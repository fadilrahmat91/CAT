<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_ujian extends CI_Model {
		
		
		public function add($data) 
		{			
			$this->db->insert('d_ujian', $data);
		}
		
		function add_hasil_ujian($data){
			$this->db->insert('d_hasil_ujian', $data);
		}
		function get(){
			$query = $this->db->query("SELECT * FROM d_ujian ");
			return $query;
		}
		
		function join_get(){
			
			$query=	$this->db->query("SELECT * FROM d_ujian INNER JOIN d_soal ON d_ujian.id_ujian=d_soal.id_ujian ");
			return $query;
		
		}
		
		function cek_ujian($id_admin){
			
			$query	=	$this->db->query("SELECT d_ujian . * , (SELECT COUNT( id_ujian ) FROM d_mulai_ujian WHERE d_mulai_ujian.id_ujian = d_ujian.id_ujian AND d_mulai_ujian.status='N' AND d_mulai_ujian.id_user='$id_admin') AS cek FROM  d_ujian");
			return $query;
		}
		function getw_id($id_ujian){
			$query	=	$this->db->query("SELECT * FROM d_ujian WHERE id_ujian='$id_ujian'");
			return	$query;
		}
		function edit($id_ujian,$data){
			$this->db->where('id_ujian', $id_ujian)->update('d_ujian', $data);
		}
		function hapus($id_ujian){
			$this->db->query("DELETE FROM d_ujian WHERE id_ujian='$id_ujian'");
		}
		
		function hasil_ujian($id_admin,$id_ujian){
			$query	=	$this->db->query("SELECT * FROM d_mulai_ujian INNER JOIN d_admin ON d_mulai_ujian.id_user=d_admin.id INNER JOIN d_siswa ON d_admin.kon_id=d_siswa.id_siswa INNER JOIN d_ujian ON d_ujian.id_ujian=d_mulai_ujian.id_ujian WHERE d_mulai_ujian.id_user='$id_admin' AND d_mulai_ujian.id_ujian='$id_ujian' AND d_mulai_ujian.status='N' ");
			return $query;
		}
		function get_ujian_result($id_admin){
			$query = $this->db->query("SELECT * FROM d_hasil_ujian INNER JOIN d_ujian ON d_hasil_ujian.h_n_ujian=d_ujian.id_ujian WHERE d_hasil_ujian.id_user='$id_admin'");
			return $query;
		}
		function all_exam_result(){
			$query = $this->db->query("SELECT * FROM d_hasil_ujian INNER JOIN d_ujian ON d_hasil_ujian.h_n_ujian=d_ujian.id_ujian ");
			return $query;
		}
		
		function h_ujian_name($nama){
			$query = $this->db->query("SELECT * FROM d_hasil_ujian INNER JOIN d_ujian ON d_hasil_ujian.h_n_ujian=d_ujian.id_ujian  WHERE d_hasil_ujian.h_n_ujian='$nama' ORDER BY h_tot_nilai DESC");
			return $query;
		}
		
	}
?>

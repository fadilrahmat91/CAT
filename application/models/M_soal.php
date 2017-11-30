<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_soal extends CI_Model {
		
		
		public function add($data) 
		{			
			$this->db->insert('d_soal', $data);
		}
		function get(){
			$query = $this->db->query("SELECT * FROM d_soal");
			return $query;
		}
		
		function join_get(){
			$query=	$this->db->query("SELECT * FROM d_soal INNER JOIN d_ujian ON d_soal.id_ujian=d_ujian.id_ujian");
			return $query;
		}
		
		function getw_id($id_soal){
			$query	=	$this->db->query("SELECT * FROM d_soal WHERE id_soal='$id_soal'");
			return	$query;
		}
		function edit($id_soal,$data){
			$this->db->where('id_soal', $id_soal)->update('d_soal', $data);
		}
		function hapus($id_soal){
			$this->db->query("DELETE FROM d_soal WHERE id_soal='$id_soal'");
		}
		
	}
?>

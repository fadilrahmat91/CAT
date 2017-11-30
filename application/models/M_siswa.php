<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_siswa extends CI_Model {
		
		
		public function add($data) 
		{			
			$this->db->insert('d_siswa', $data);
		}
		function get(){
			$query = $this->db->query("SELECT d_siswa.*,(SELECT COUNT(id) FROM d_admin WHERE level='siswa' AND kon_id=d_siswa.id_siswa) AS ada FROM d_siswa");
			return $query;
		}
		
		function getw_id($id_ps){
			$query	=	$this->db->query("SELECT * FROM d_siswa WHERE id_siswa='$id_ps'");
			return	$query;
		}
		function edit($id_siswa,$data){
			$this->db->where('id_siswa', $id_siswa)->update('d_siswa', $data);
		}
		function hapus($id_ps){
			$this->db->query("DELETE d_siswa,d_admin FROM d_siswa INNER JOIN d_admin ON d_siswa.id_siswa=d_admin.kon_id WHERE d_siswa.id_siswa='$id_ps'");
		}
		
	}
?>

<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_admin extends CI_Model {
		
		
		public function add($data) 
		{			
			$this->db->insert('d_admin', $data);
		}
		function get(){
			$query = $this->db->query("SELECT * FROM d_admin");
			return $query;
		}
		
		function getw_id($id_admin){
			$query	=	$this->db->query("SELECT * FROM d_admin WHERE id='$id_admin'");
			return	$query;
		}
		function edit($id_admin,$data){
			$this->db->where('id', $id_admin)->update('d_admin', $data);
		}
		function hapus($id_ps){
			$this->db->query("DELETE FROM d_admin WHERE id='$id_ps'");
		}
		
	}
?>

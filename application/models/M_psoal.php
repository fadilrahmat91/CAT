<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_psoal extends CI_Model {
		
		
		public function add($data) 
		{			
			$this->db->insert('d_psoal', $data);
		}
		function get(){
			$query = $this->db->query("SELECT d_psoal.*,(SELECT COUNT(id) FROM d_admin WHERE level='psoal' AND kon_id=d_psoal.id_psoal) AS ada FROM d_psoal");
			return $query;
		}
		
		function getw_id($id_ps){
			$query	=	$this->db->query("SELECT * FROM d_psoal WHERE id_psoal='$id_ps'");
			return	$query;
		}
		function edit($id_ps,$nama){
			$this->db->query("UPDATE d_psoal SET nama='$nama' WHERE id_psoal='$id_ps'");
		}
		function hapus($id_ps){
			$this->db->query("DELETE d_psoal,d_admin FROM d_psoal INNER JOIN d_admin ON d_psoal.id_psoal=d_admin.kon_id WHERE d_psoal.id_psoal='$id_ps'");
		}
		
	}
?>

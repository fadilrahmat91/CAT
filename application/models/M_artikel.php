<?php
	class M_artikel extends CI_Model{
		
		function tampil_artikel(){
			
			$row =$this->db->query("SELECT  * FROM artikel");
			return $row;
		}
		function tampil_by_id($id_artikel){
			$row=$this->db->query("SELECT * FROM artikel WHERE id_artikel='$id_artikel'");
			return $row;
			
		}
		function edit_data($id_artikel,$data) 
		{			
			$this->db->where('id_artikel',$id_artikel)->update('artikel',$data);
			
		}
		function tambah_data($data){
			$this->db->insert('artikel',$data);
		}
		
		
	}
?>
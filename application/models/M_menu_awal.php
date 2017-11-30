<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_menu_awal extends CI_Model {
		
		function __construct() {
			parent::__construct();
		
			$this->load->helper('custom_func');
		}
		
	
		//model data user
		public function jum_data_order() 
		{			
			$query = $this->db->query("SELECT count(*) AS jumlah_order FROM tbl_antrian");
			$data 	= $query->result();			
			$row 	= $data[0];
			return $row->jumlah_order;
		}
		
		function user(){
			$this->db->select('*')->from('tbl_user');
			return $this->db->get();
		}
		function user_n_k(){
			$this->db->select('*')->from('tbl_user')->where('status','nonactive');
			return $this->db->get();
		}
		
		function user_aktif(){
			$this->db->select('*')->from('tbl_user')->where('status','active');
			return $this->db->get();
		}
		
		
	}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');				
		
		
		
		$this->load->helper('text');
		if ($this->session->userdata('id_admin')=="") 
		{
			redirect('login');
		}
		date_default_timezone_set("Asia/jakarta");
	}


	public function index()
	{
		$d['nama']		=	$this->session->userdata('nama');
		$d['level']		=	$this->session->userdata('level');
		$this->load->view('template/index.php',$d);
	}
	
	
	
	function menu_awal(){
		$d['t_psoal']		= 	$this->db->query("SELECT * FROM d_admin WHERE level='psoal'")->num_rows();
		$d['a_psoal']		= 	$this->db->query("SELECT * FROM d_psoal")->num_rows();
		$d['a_siswa']		= 	$this->db->query("SELECT * FROM d_siswa")->num_rows();
		$d['t_to']		= 	$this->db->query("SELECT * FROM d_ujian")->num_rows();
		$d['t_siswa']		= 	$this->db->query("SELECT * FROM d_admin WHERE level='siswa'")->num_rows();
		$d['t_antri']       =	($d['a_siswa']-$d['t_siswa'])+($d['a_psoal']-$d['t_psoal']);
		$d['id_admin']	=	$this->session->userdata('id_admin');
		$d['level']		=	$this->session->userdata('level');
		$d['nama']		=	$this->session->userdata('nama');
		$d['kon_id']	=	$this->session->userdata('kon_id');
		
		$this->load->view('template/part/menu_awal.php',$d);
		
	}
	
}
?>
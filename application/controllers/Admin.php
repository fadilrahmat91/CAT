<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('m_admin');		
		$this->load->helper(array('form', 'url'));
		
		if ($this->session->userdata('id_admin')=="") 
		{
			redirect('login');
		}
		
		$this->load->helper('text');
		date_default_timezone_set("Asia/jakarta");
	}


	public function index()
	{
		$d['d_admin']=$this->m_admin->get();
		$this->load->view('template/part/admin_data.php',$d);
	}
	
	
	function edit_admin($id_admin){
		$d['d_admin_id']=$this->m_admin->getw_id($id_admin)->row();
		$this->load->view('template/part/admin_edit.php',$d);
	}
	function a_edit(){
		$id_admin	=	$_POST['id_admin'];
		$data 		=	array('username'			=>	addslashes($_POST['username']),
							  'password'			=>	md5($_POST['password'])
							  
							);
		
		$this->m_admin->edit($id_admin,$data);
	}
	function hapus($id_admin){
		$this->m_admin->hapus($id_admin);
	}
	
	
	
	
}
?>
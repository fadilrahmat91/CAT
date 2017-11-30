<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Psoal extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('m_psoal');		
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
		$d['d_ps']=$this->m_psoal->get();
		$this->load->view('template/part/ps_data.php',$d);
	}
	function f_psoal(){
		$this->load->view('template/part/ps_tambah.php');
	}
	function add_psoal(){
		$data =array('nama'=>addslashes($_POST['nama']));
		$this->m_psoal->add($data);
	}
	
	function edit_ps($id_ps){
		$d['d_ps_id']=$this->m_psoal->getw_id($id_ps)->row();
		$this->load->view('template/part/ps_edit.php',$d);
	}
	function a_edit(){
		$id_ps	=	addslashes($_POST['id']);
		$nama	=	addslashes($_POST['nama']);
		
		$this->m_psoal->edit($id_ps,$nama);
	}
	function hapus($id_ps){
		$this->m_psoal->hapus($id_ps);
	}
	
	function aktiv_ps($id_ps){
		$d=$this->m_psoal->getw_id($id_ps)->row();
		$this->db->query("INSERT INTO d_admin SET username='".$d->id_psoal."psoal',password='".md5('admin')."',level='psoal',kon_id='".$d->id_psoal."'");
	}
}
?>
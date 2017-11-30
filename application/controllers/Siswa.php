<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('m_siswa');		
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
		$d['level']		=	$this->session->userdata('level');
		$d['d_siswa']	=	$this->m_siswa->get();
		$this->load->view('template/part/siswa_data.php',$d);
	}
	function f_siswa(){
		$this->load->view('template/part/siswa_tambah.php');
	}
	function add_siswa(){
		$data =array('nama'			=>	addslashes($_POST['nama']),
					 's_username'	=>	addslashes($_POST['username']),
					 's_password'	=>	md5($_POST['password']),
					 'jenis_kelamin'=>	addslashes($_POST['genre']),
					 'email'		=>	addslashes($_POST['email']),
					 'asal_sekolah'	=>	addslashes($_POST['sekolah'])
				);
		$this->m_siswa->add($data);
	}
	
	function edit_siswa($id_siswa){
		$d['d_siswa_id']=$this->m_siswa->getw_id($id_siswa)->row();
		$this->load->view('template/part/siswa_edit.php',$d);
	}
	function a_edit(){
		
		$id_siswa	=	$_POST['id_siswa'];
		
		$data 		=	array('nama'			=>	addslashes($_POST['nama']),					
							 'jenis_kelamin'	=>	addslashes($_POST['genre']),							 
							 'email'			=>	addslashes($_POST['email']),
							 'asal_sekolah'		=>	addslashes($_POST['sekolah'])
						);
		
		$this->m_siswa->edit($id_siswa,$data);
	}
	function hapus($id_siswa){
		$this->m_siswa->hapus($id_siswa);
	}
	
	function ganti_pass(){
		
		$d['id_admin']	=	$this->session->userdata('id_admin');
		$d['level']		=	$this->session->userdata('level');
		$d['kon_id']	=	$this->session->userdata('kon_id');
		$d['nama']		=	$this->session->userdata('nama');
		$query			=	$this->db->query("SELECT * FROM d_admin WHERE username='".$d['nama']."' AND kon_id='".$d['kon_id']."'")->num_rows();
		$password		=	md5($_POST['password']);
		
		
		if($query==1){
				$this->db->query("UPDATE d_admin SET password='$password' WHERE kon_id='".$d['kon_id']."' AND level='".$d['level']."'");
		}else{
				$this->db->query("UPDATE d_siswa SET s_password='$password' WHERE id_siswa='".$d['kon_id']."' AND s_username='".$d['nama']."'");
		}
	}
	
	function aktiv_siswa($id_siswa){
		$d	=	$this->m_siswa->getw_id($id_siswa)->row();
		$this->db->query("INSERT INTO d_admin SET username='".$d->s_username."',password='".$d->s_password."',level='siswa',kon_id='".$d->id_siswa."'");
	}
	
	function f_pass(){
		$this->load->view('template/part/siswa_pass.php');
	}
	
	function cek_pass($password){
		$password       =   md5($password);
		$d['id_admin']	=	$this->session->userdata('id_admin');
		$query			=	$this->db->query("SELECT * FROM d_admin WHERE id='".$d['id_admin']."' AND password='$password'")->num_rows();
		if($query==1){
			$dat['status']='ada';
		}else{
			$dat['status']='belum';
		}
		$this->json($dat);
	}
	public function json($data) {
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	
	
	
}
?>
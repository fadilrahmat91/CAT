<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {


	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->model('m_soal');		
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
		$d['d_soal']=$this->m_soal->join_get();
		$this->load->view('template/part/soal_data.php',$d);
	}
	function f_soal(){
		$d['d_ujian']=$this->db->query("SELECT id_ujian,nama_ujian FROM d_ujian");
		$this->load->view('template/part/soal_tambah.php',$d);
	}
	function add_soal(){
		
		$config = array();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;

		$this->load->library('upload');

		$files = $_FILES;
		for($i=0; $i< count($_FILES['gambar']['name']); $i++)
		{           
			$_FILES['userfile']['name']		= $files['gambar']['name'][$i];
			$_FILES['userfile']['type']		= $files['gambar']['type'][$i];
			$_FILES['userfile']['tmp_name']	= $files['gambar']['tmp_name'][$i];
			$_FILES['userfile']['error']	= $files['gambar']['error'][$i];
			$_FILES['userfile']['size']		= $files['gambar']['size'][$i];    

			$this->upload->initialize($config);
			$this->upload->do_upload();
		}
		
		//$gambar	=	($_POST['gambar']=="") ? "" : $_POST['gambar'];
		$data =array('soal_kat'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['soal_kat']),					 
					 'soal'			=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['soal']),
					 'opsi_a'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_a']),
					 'opsi_b'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_b']),
					 'opsi_c'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_c']),
					 'opsi_d'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_d']),
					 'opsi_e'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_e']),
					 'jawaban'		=>	$_POST['jawaban'],
					 'petunjuk_soal'=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['j_soal']),
					 'bobot'		=>	addslashes($_POST['bobot']),
					 'id_ujian'		=>	addslashes($_POST['nama_ujian']),
					 'pembuat_soal'	=>	$this->session->userdata('nama')
				);
		
		$kirim=$this->m_soal->add($data);
		var_dump($kirim);
		$arr["status"]		=	"ok";
		$this->json($arr);
	}
	
	function edit_soal($id_soal){
		$d['d_ujian']=$this->db->query("SELECT id_ujian,nama_ujian FROM d_ujian");
		$d['d_soal_id']=$this->m_soal->getw_id($id_soal)->row();
		$this->load->view('template/part/soal_edit.php',$d);
	}
	function a_edit(){
		$config = array();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;

		$this->load->library('upload');

		$files = $_FILES;
		for($i=0; $i< count($_FILES['gambar']['name']); $i++)
		{           
			$_FILES['userfile']['name']		= $files['gambar']['name'][$i];
			$_FILES['userfile']['type']		= $files['gambar']['type'][$i];
			$_FILES['userfile']['tmp_name']	= $files['gambar']['tmp_name'][$i];
			$_FILES['userfile']['error']	= $files['gambar']['error'][$i];
			$_FILES['userfile']['size']		= $files['gambar']['size'][$i];    

			$this->upload->initialize($config);
			$this->upload->do_upload();
		}
		$id_soal	=	$_POST['id_soal'];
		$data =array('soal_kat'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['soal_kat']),					 
					 'soal'			=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['soal']),
					 'petunjuk_soal'=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['j_soal']),
					 'opsi_a'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_a']),
					 'opsi_b'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_b']),
					 'opsi_c'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_c']),
					 'opsi_d'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_d']),
					 'opsi_e'		=>	preg_replace('/<p>(.*?)<\/p>/', '$1',$_POST['opsi_e']),
					 'jawaban'		=>	$_POST['jawaban'],
					 'bobot'		=>	addslashes($_POST['bobot']),
					 'id_ujian'		=>	addslashes($_POST['nama_ujian']),
					 'pembuat_soal'	=>	$this->session->userdata('nama')
				);
		
		$this->m_soal->edit($id_soal,$data);
	}
	function hapus($id_soal){
		$this->m_soal->hapus($id_soal);
	}
	
	public function json($data) {
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	
	
	
	
}
?>
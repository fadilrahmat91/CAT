<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');		
		$this->load->helper('form');		
		
		date_default_timezone_set("Asia/jakarta");
		$this->session->sess_expire_on_close = TRUE;

	}

	public function index() {
		
		$this->load->view('template/form_login.php');
	}

	public function cek_login() {
		
		$username 	= addslashes($this->input->post('username', TRUE));
		$password 	= md5(addslashes($this->input->post('password', TRUE)));
		
		
		$hasil 	= $this->db->query("SELECT * FROM d_admin WHERE username='$username' AND password='$password'");
		$hasil1 = $this->db->query("SELECT * FROM d_siswa WHERE s_username='$username' AND s_password='$password'");
		
		
		
		if ($hasil->num_rows() == 1) 
		{
			
					
					$data					=	$hasil->row();
					$sess_data['nama'] 		= 	$data->username;
					$sess_data['id_admin'] 	= 	$data->id;					
					$sess_data['level'] 	= 	$data->level;					
					$sess_data['kon_id'] 	= 	$data->kon_id;					
					$this->session->set_userdata($sess_data);
					$arr["status"]			=	"ok";
					$this->json($arr);
				
					//redirect('home');
			
			
			
		}else if($hasil1->num_rows() == 1){
					$data					    =	$hasil1->row();
			        $sess_data['nama'] 		= 	$data->s_username;
					$sess_data['id_admin'] 	= 	$data->id_siswa;					
					//$sess_data['level'] 	= 	"siswa";					
					$sess_data['kon_id'] 	= 	$data->id_siswa;					
					$this->session->set_userdata($sess_data);
					$arr["status"]			=	"ok";
					$this->json($arr);
			  //redirect('home');
		}else {
			
					$arr["status"]			=	"gagal";
					$this->json($arr);
		}
		
		
		
	}
	
	function daftar(){
		
		$this->load->view("template/form_register");
	}
	
	
	
	public function logout() {		
			$id_admin	=	$this->session->userdata('id_admin');			
			session_destroy();
			redirect('login');
		
	}
	
	public function json($data) {
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	
	
	
	
	
	
}
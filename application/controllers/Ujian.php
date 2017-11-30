<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
		error_reporting(0);
		$this->load->database();
		$this->load->model('m_ujian');		
		$this->load->helper(array('form', 'url'));
		$this->load->helper('my_helper');
		if ($this->session->userdata('id_admin')=="") 
		{
			redirect('login');
		}
		date_default_timezone_set("Asia/jakarta");
	}


	public function index()
	{
		$uri2 = addslashes($this->uri->segment(2));
		$uri3 = addslashes($this->uri->segment(3));
		$uri4 = addslashes($this->uri->segment(4));
		$uri5 = addslashes($this->uri->segment(5));
		$d['id_admin']		=	$this->session->userdata('id_admin');
		$d['a_level']		=	$this->session->userdata('level');
		$d['d_ujian']		=	$this->m_ujian->cek_ujian($d['id_admin']);
		
		
		
		
		$this->load->view('template/part/ujian_data.php',$d);
	}
	function f_ujian(){
		$this->load->view('template/part/ujian_tambah.php');
	}
	function add_ujian(){
			$data = array('nama_ujian'	=>	$_POST['nama_ujian'],					 
						 'jumlah_soal'	=>180,
						 'waktu'		=>	150,
						 'jenis'		=>	$_POST['jenis']					 
						
					);
		$this->m_ujian->add($data);
	}
	
	function edit_ujian($id_ujian){
		$d['d_ujian_id']=$this->m_ujian->getw_id($id_ujian)->row();
		$this->load->view('template/part/ujian_edit.php',$d);
	}
	function a_edit(){
		$id_ujian	=	$_POST['id_ujian'];
		
		$data =array('nama_ujian'	=>	$_POST['nama_ujian'],					 
					 'jumlah_soal'		=>	180,
					 'waktu'		=>	150,
					 'jenis'		=>	$_POST['jenis']					 
					
				);
		
		$this->m_ujian->edit($id_ujian,$data);
	}
	function hapus($id_ujian){
		$this->m_ujian->hapus($id_ujian);
	}
	
	function m_ujian(){
		
		$uri2 = addslashes($this->uri->segment(2));
		$uri3 = addslashes($this->uri->segment(3));
		$uri4 = addslashes($this->uri->segment(4));
		$uri5 = addslashes($this->uri->segment(5));
		
		$d['id_admin']	=	$this->session->userdata('id_admin');
		$d['level']		=	$this->session->userdata('level');
		$d['kon_id']	=	$this->session->userdata('kon_id');
			
		$d['data_user']	=	$this->db->query("SELECT * FROM d_siswa WHERE id_siswa='".$d['kon_id']."' ")->row();
		$d['d_soal']	=	$this->db->query("SELECT * FROM d_soal WHERE id_ujian='$uri3' AND soal_kat='$uri4' ORDER BY soal_kat DESC");
		$d['d_ujian']	=	$this->m_ujian->getw_id($uri3)->row();
			
		
		
		$cek_sd_ujian=$this->db->query("SELECT * FROM d_mulai_ujian WHERE id_user='".$d['id_admin']."' AND id_ujian='$uri3' AND status in('Y','S') AND soal_kat='$uri4'")->num_rows();
		$cek_sd_ujian1=$this->db->query("SELECT * FROM d_mulai_ujian WHERE id_user='".$d['id_admin']."' AND id_ujian='$uri3' AND status ='N' AND soal_kat='$uri4'")->num_rows();
	   
		//S=sedang ujian
		//Y=belom ujian
		//N=selesai ujian
			if($cek_sd_ujian1<1){
				
				if($uri3=="simpan_satu"){
					
					$p			= json_decode(file_get_contents('php://input'),true);
					
					$update_="";
					
					for($i=1; $i<=$p['jml_soal']; $i++ ){
						$_tjawab 	= "jawab".$i;
						$_tidsoal 	= "id_soal".$i;

						$jawaban_ 	= empty($p[$_tjawab]) ? "" : $p[$_tjawab];

						$update_	.= "".$p[$_tidsoal].":".$jawaban_.",";
						
					}
					$update_		= substr($update_, 0, -1);
					
					
					$this->db->query("UPDATE d_mulai_ujian SET list_jawaban='$update_',status='S' WHERE id_ujian = '$uri4' AND soal_kat='$uri5' AND jumlah_bobot='0' AND id_user = '".$d['id_admin']."'");
					print_r($p);
					exit;
				}else if($uri3=="simpan_semua"){
					$p			= json_decode(file_get_contents('php://input'));
					
					$jumlah_soal = $p->jml_soal;
					$jumlah_benar = 0;
					$jumlah_salah = 0;
					$jumlah_bobot = 0;
					$update_ = "";

					for ($i = 1; $i <= $p->jml_soal; $i++) {
						$_tjawab 	= "jawab".$i;
						$_tidsoal 	= "id_soal".$i;
						
						$jawaban_ 	= empty($p->$_tjawab) ? "" : $p->$_tjawab;
						//$jawaban_=trim($jawaban_);
						$cek_jwb 	= $this->db->query("SELECT bobot, jawaban FROM d_soal WHERE id_soal= '".$p->$_tidsoal."'")->row();
						if ($cek_jwb->jawaban == $jawaban_) {
							$jumlah_benar++;
							$jumlah_bobot = $jumlah_benar * $cek_jwb->bobot;
						}else if(empty($jawaban_)){
							//bobot 0					
						}else{
							$jumlah_salah++;
							//$jumlah_salah=$jumlah_bobot-1;
							
						}
						
						$update_	.= "".$p->$_tidsoal.":".$jawaban_.",";
					}
					$update_		= substr($update_, 0, -1);

					//echo $jumlah_benar."<br>";
					//print_r($p);
					 $jumlah_bobot=$jumlah_bobot-$jumlah_salah;
					
					
					$this->db->query("UPDATE d_mulai_ujian SET jumlah_benar = ".$jumlah_benar.", jumlah_bobot = ".$jumlah_bobot.",list_jawaban = '".$update_."', status = 'N' WHERE id_ujian = '$uri4' AND soal_kat='$uri5' AND id_user = '".$d['id_admin']."'");
					 $a["benar"]=$jumlah_benar;
					 $a["salah"] =$jumlah_salah;
					 $a["Nilai"] =$jumlah_bobot;
					$a["kat"] =$uri5;
					echo json_encode($a);
					exit;		
				}else{

						
					
					$d_ujian		=	$this->m_ujian->getw_id($uri3)->row();			
					foreach($d['d_soal']->result() as $datasoal){
						$list_id_soal .=$datasoal->id_soal.",";
						$list_jw_soal .=$datasoal->id_soal.":,";
					}
					$list_id_soal = substr($list_id_soal, 0, -1);
					$list_jw_soal = substr($list_jw_soal, 0, -1);
					//$waktu_ujian	=($uri4=='tpa')? tambah_jam_sql($d_ujian->waktu)-60:tambah_jam_sql($d_ujian->waktu)-40
					$d['waktu_selesai'] = ($uri4=='tpa')? tambah_jam_sql($d_ujian->waktu-50):tambah_jam_sql($d_ujian->waktu-100);
					if($cek_sd_ujian<1 ){
					 $this->db->query("INSERT INTO d_mulai_ujian VALUES (null, '".$d['id_admin']."', '$uri3', '$list_id_soal', '$list_jw_soal',0, NOW(), ADDTIME(NOW(), '".$d['waktu_selesai']."'), 'Y',0,'$uri4')");
					}
					
					$this->load->view('template/part/ujian_mulai.php',$d);
				}
			}else{
				echo "<script>alert('Anda Sudah Selesai Ujian')</script>";
				redirect(site_url());
			}
		
	}
	
	function add_h_ujian(){
		
		$uri2 		= 	addslashes($this->uri->segment(2));
		$uri3 		= 	addslashes($this->uri->segment(3));
		$uri4 		= 	addslashes($this->uri->segment(4));
		$uri5 		= 	addslashes($this->uri->segment(5));
		$d['id_admin']	=	$this->session->userdata('id_admin');
		$d_hasil_ujian  = $this->m_ujian->hasil_ujian($d['id_admin'],$uri3)->result_array();
		print_r($d_hasil_ujian);
		$j_tpa		=	120;
		$j_tbi		=	60;
		$salah_tpa	=	(($d_hasil_ujian[0]["jumlah_bobot"])-(4*$d_hasil_ujian[0]["jumlah_benar"]))/-1;	
		$salah_tbi	=	(($d_hasil_ujian[1]["jumlah_bobot"])-(4*$d_hasil_ujian[1]["jumlah_benar"]))/-1;	
		$kos_tpa  	=	$j_tpa-($d_hasil_ujian[0]["jumlah_benar"])-$salah_tpa;
		$kos_tbi  	=	$j_tbi-($d_hasil_ujian[1]["jumlah_benar"])-$salah_tbi;
		$total_nilai=	$d_hasil_ujian[0]["jumlah_bobot"]+$d_hasil_ujian[1]["jumlah_bobot"];
		
		
		
		
		
		$status			=	($d_hasil_ujian[0]["jumlah_benar"]<40 || $d_hasil_ujian[1]["jumlah_benar"]<20) ? $status="gagal" : $status="lulus";
		
		
		
		$data		   =  array(		
									"h_namasiswa"	=> $d_hasil_ujian[0]["nama"],	
									"h_n_ujian"		=> $d_hasil_ujian[0]["id_ujian"],
									"h_waktu_ujian"	=> $d_hasil_ujian[0]["waktu"],	
									"h_tot_nilai"	=> $total_nilai,
									"h_benar_tpa"	=> $d_hasil_ujian[0]["jumlah_benar"],
									"h_benar_tbi"	=> $d_hasil_ujian[1]["jumlah_benar"],
									"h_sal_tpa"	    => $salah_tpa,
									"h_sal_tbi"     => $salah_tbi,
									"h_kos_tpa"		=> $kos_tpa,
									"h_kos_tbi"		=> $kos_tbi,
									"h_nil_tpa"		=> $d_hasil_ujian[0]["jumlah_bobot"],
									"h_nil_tbi"		=> $d_hasil_ujian[1]["jumlah_bobot"],
									"status"		=> $status,
									"id_user"		=> $d['id_admin']
						);
		$this->m_ujian->add_hasil_ujian($data);
	}
	
	function hasil_ujian(){
		$d['id_admin']	=	$this->session->userdata('id_admin');
		$d['level']		=	$this->session->userdata('level');
		$uri3 		= 	addslashes($this->uri->segment(3));
		if($d['level']=="siswa"){
			$d['hasil_ujian'] = $this->m_ujian->get_ujian_result($d['id_admin']);
		}else{
			$d['hasil_ujian'] = $this->m_ujian->h_ujian_name($uri3);
		}
		$this->load->view('template/part/ujian_hasil.php',$d);
		
	}
	
	function h_ujian_name($id){
		//$n= str_replace("-"," ",addslashes($this->uri->segment(3)));
		$d['hasil_ujian']	=	$this->m_ujian->h_ujian_name($id);
		$this->load->view('template/part/u_hasil_name.php',$d);
	}
	
	public function json($data) {
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	
	
	
	
}
?>
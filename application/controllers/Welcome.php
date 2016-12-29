<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("index",$comp);
	}
	public function login(){
		$this->load->view("login");
	}
	
	public function loginproses(){
		if($this->input->post('submit')){
		$username = $this->input->post('username');
		$password = $this->input->post('password');		
		$data = array(
		'username'=>$username,
		'password'=>$password		
		);
		$cek=$this->mymodel->Getlogin($data);
		if($cek==1){
			$_SESSION['password'] = $password;
			redirect('welcome/index');
		}else{
			redirect('welcome/login');
		}
		
		} //tutup submit
	}
	public function logout(){
		$this->session->sess_destroy();
        redirect('welcome/login');
	}
	public function html_header(){
		$data = array ();
		return $this->load->view("header",$data,true);
	}
	public function ceklogin(){
		$data = array ();
		return $this->load->view("ceklogin",$data,true);
	}
	public function nasabah(){
		$comp = array(
		"dnasabah" =>$this->mymodel ->Getnasabah()->result_array(),
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("nasabah",$comp);
	}
	public function tambah_nasabah(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("tambah_nasabah",$comp);
		$data = array ();
		if($this->input->post('submit')){
			$this->mymodel->Tambahnasabah();
			redirect('welcome/nasabah');
		}
	}
	public function marketing(){
		$comp = array(
		"dmarketing" =>$this->mymodel ->Getmarketing()->result_array(),
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("marketing",$comp);
	}
	public function tambah_marketing(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("tambah_marketing",$comp);
		$data = array ();
		if($this->input->post('save')){
			$this->mymodel->Tambahmarketing();
			redirect('welcome/marketing');
		}
	}
	public function kolektibilitas(){
		$comp = array(
		"dkolek" =>$this->mymodel ->Getkolek()->result_array(),
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("kolektibilitas",$comp);
	}
	public function tambah_kolektibilitas(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("tambah_kolektibilitas",$comp);
		$data = array ();
		if($this->input->post('save')){
			$this->mymodel->Tambahkolektibilitas();
			redirect('welcome/kolektibilitas');
		}
	}
	public function area(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("area",$comp);
	}
	public function tambah_area(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("tambah_area",$comp);
	}
	public function kredit(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("kredit",$comp);
	}
	public function tambah_kredit(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("tambah_kredit",$comp);
	}
	public function pembayaran(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("pembayaran",$comp);
	}
	public function tambah_pembayaran(){
		$comp = array(
		"header" =>$this->html_header(),
		"cek_login" =>$this->ceklogin()		
		);
		$this->load->view("tambah_pembayaran",$comp);
	}
}

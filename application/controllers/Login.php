<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct()
	{
	
		parent::__construct();
		//Codeigniter : Write Less Do More

		$this->load->model('Mdl_login', 'login');

	}

	function index(){
		if ( $this->session->username != '' ) { // cek apakah sudah login? jika sudah, redirect ke halaman login
			redirect('login/berhasil');
		}
		else{	// jika belum, maka ke form login
			$this->load->view('login_view');
		}
	}


	function cek(){
		$username = addslashes($this->input->post('username'));
		$password = addslashes(md5($this->input->post('password')));
		#echo $password;
		// get data from database
		$cek = $this->login->select_by($username, $password);

		echo $cek;

		if ($cek == 1) {
			// session aktif
			$this->session->username = $username;
			// redirect
			redirect('login/berhasil');
		}
		else{
			echo '<script language="JavaScript">alert("Gagal Login ! Pastikan Username dan Password Anda Benar");</script>';
			redirect('login/index', 'refresh');
		}
	}

	function berhasil(){
		if ( $this->session->username == '' ) {	// jika belum login, redireect ke form login
			redirect('login/index');
		}
		else{
			redirect('beranda');
		}
	}

	function logout(){
		$this->session->unset_userdata('username');
		redirect('login/index');
	}

}

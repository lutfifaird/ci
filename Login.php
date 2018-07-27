<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->library('Auth');
		$this->load->helper('url');
	}
 
	function index(){
		$data_session=$this->session->userdata('auth');
		if($this->input->post("submit") == "Login"){
			$this->aksi_login();
		} else if($data_session){
			redirect(base_url('homepage'));
		}
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = $this->m_login->cek_login($username,$password);
		 if($data->num_rows() > 0) {
			$this->auth->authenticate($data->row());
			redirect(base_url('content'));
		} else {
			$this->session->set_flashdata('pesan', 'Username dan password salah !');
			redirect(base_url("login"));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		$this->auth->logout();
		redirect(base_url('login'));
	}
}
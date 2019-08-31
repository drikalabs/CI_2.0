<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('M_crud');
	}

	public function index()
	{
		$this->load->view('crud/login');
		$this->load->view('crud/footer');
	}
	public function login_action()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$where = array('username' => $user ,
					   'password' => md5($pass));
		$cek = $this->M_crud->cek_login("admin",$where)->num_rows();
		if ($cek > 0) 
		{
			$data_session = array('nama'  => $user,
								  'status' => "login" );
			$this->session->set_userdata($data_session);
			redirect(base_url("Crud"));
		}
		else
		{
			$msg['msg'] = "username atau password salah !";

			$this->load->view('crud/login1',$msg);
			$this->load->view('crud/footer');
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_public extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('M_crud');
		
	}

	public function index()
	{
		$data['index']=$this->M_crud->jsDisplayDes()->result();
		$data['index2']=$this->M_crud->ambil_dasboard2()->result();
		$data['jumd']= $this->db->get('destinasi')->num_rows();
		$data['jumn']= $this->db->get('news')->num_rows();
		$data['jumu']= $this->db->get('user')->num_rows();

		$this->load->view('public/header');
		$this->load->view('public/index',$data);
		$this->load->view('public/footer');
	}
	
	public function news()
	{

		$this->load->library('pagination');

 		$config['base_url']    = base_url().'C_public/news'; 
 		$config['total_rows']    = $this->M_crud->ambil()->num_rows();
 		$config['per_page']      = 4;
 		$config['num_links']     = 2;
 		$config['uri_segment']   = 3;

 		//styling

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging "><ul class="pagination ">';
        $config['full_tag_close']   = '</ul></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';


 		$this->pagination->initialize($config);

 		$uri =$this->uri->segment(3);
		$data['news'] = $this->M_crud->kotak($config['per_page'],$uri)->result();
		$data['popular']=$this->M_crud->popular()->result();

		$this->load->view('public/header');
		$this->load->view('public/blog',$data);
		$this->load->view('public/footer');	
	}
	public function readmore($id){
		$data['read'] = $this->M_crud->read_news($id)->result();
		$data['komen']= $this->M_crud->display_komen($id)->result();
		$data['jum']  = $this->M_crud->display_komen($id)->num_rows();
		$data['popular']=$this->M_crud->popular()->result();

		$this->load->view('public/header');
		$this->load->view('public/blog-single',$data);
		$this->load->view('public/footer');
	}
	public function komen()
	{
		$ikom     = $this->input->post('ikom');
		$nama     = $this->input->post('name');
		$email    = $this->input->post('email');
		$komen    = $this->input->post('komen');
		
		$data = array('id_berita' => $ikom ,
					  'nama'      => $nama ,
					  'email'     => $email ,
					  'komentar'  => $komen
					  );
		$this->db->insert('komentar',$data);
		redirect('C_public/readmore/'.$ikom.'/#komen');
	}
	public function destinasi()
	{
		$data['wisata']= $this->M_crud->ambil_wisata()->result();

		$this->load->view('public/header');
		$this->load->view('public/shop',$data);
		$this->load->view('public/footer');	
	}
	public function detil($id)
	{
		$data['detil'] = $this->M_crud->detil($id)->result();
		$data['review']= $this->M_crud->display_review($id)->result();
		$data['jum']   = $this->M_crud->display_review($id)->num_rows();	

		$this->load->view('public/header');
		$this->load->view('public/shop-single',$data);
		$this->load->view('public/footer');
	}
	public function register()
	{
		$this->load->view('public/header');
		$this->load->view('public/register');
		$this->load->view('public/footer');
	}
	public function proses_regis(){

		$fname        = $this->input->post('fristname');
		$sname        = $this->input->post('surename');
		$company      = $this->input->post('company');
		$country      = $this->input->post('country');
		$country_code = $this->input->post('countrycode');
		$pnumber      = $this->input->post('phone');
		$email        = $this->input->post('email');
		$psw          = $this->input->post('password');
		$p            = md5($psw);

		$data = array('fname'    => $fname,
					  'surename' => $sname ,
					  'company'  => $company,
					  'contry'   => $country,
					  'cocode'   => $country_code,
					  'phone'    => $pnumber,
					  'email'    => $email,
					  'password' => $p
					  );
		$this->db->insert('user' ,$data);
		redirect('C_public/login');
	}
	public function login()
	{
		$this->load->view('public/header');
		$this->load->view('public/login');
		$this->load->view('public/footer');
	}
	public function proses_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$psw = md5($password);

		$cek = $this->M_crud->cekAkun($email,$psw);
		if ($cek->num_rows() > 0) 
		{
			$data = $cek->row_array();

			$data_session = array('nama'    => $data['fname'],
								  'company' => $data['company'],
								  'id'      => $data['id_user'],
								  'status'  => "login" );
			$this->session->set_userdata($data_session);
			redirect(base_url());
		}
		else{
			redirect(base_url("C_public/login"));
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('C_public/login'));
	}
	public function review()
	{
		$iwis     = $this->input->post('iwis');
		$nama     = $this->input->post('nama');
		$ius      = $this->input->post('ius');
		$rev      = $this->input->post('review');
		
		$data = array('id_destinasi' => $iwis ,
					  'name'         => $nama ,
					  'id_user'      => $ius ,
					  'review'       => $rev
					  );
		$this->db->insert('reviews',$data);
		redirect('C_public/detil/'.$iwis.'/#menu2');
	}
	public function create_listing()
	{
		if (! $this->session->userdata('status') == "login") {
				redirect(base_url(''));
			}
		$this->load->view('public/header');
		$this->load->view('public/user_listing');
		$this->load->view('public/footer');
	}
	public function proses_add_ubis()
	{
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
		$config['max_size']      = 10000;
		$config['max_width']     = 5000;
		$config['max_height']    = 5000;


		$this->load->library('upload' ,$config);
		$this->upload->initialize($config);
		
		if (! $this->upload->do_upload('gambar')) 
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('public/header');
			$this->load->view('public/user_listing');
			$this->load->view('public/footer');
		}
		else
		{
			$file     = array('upload' => $this->upload->data());
			$gambar   = $file['upload']['file_name'];
			$bisname  = $this->input->post('usaha');
			$alamat   = $this->input->post('alamat');
			$type     = $this->input->post('type');
			$tentang  = $this->input->post('tentang');
			$des      = $this->input->post('deskripsi');
			$iduser   = $this->input->post('iduser');

			$data = array
			(
				'id_user'        => $iduser,
				'bisname'        => $bisname,
				'alamat'         => $alamat,
				'type'           => $type,
				'tentang'        => $tentang,
				'deskripsi_usaha'=> $des,
				'gambar'         => $gambar,
				'status'         => "0"
			);

			$this->M_crud->input_posting($data);
			redirect('C_public/list_post');
		}
	}
	public function list_post()
	{
		if (! $this->session->userdata('status') == "login") {
				redirect(base_url(''));
			}
		$where = $this->session->userdata('id');
		$data['list'] = $this->M_crud->ambil_record($where)->result();
		$this->load->view('public/header');
		$this->load->view('public/user_list_post',$data);
		$this->load->view('public/footer');
	}
	public function service()
	{
		$data['service']=$this->M_crud->ambil_record_service()->result();
		$this->load->view('public/header');
		$this->load->view('public/blog-3',$data);
		$this->load->view('public/footer');
	}
	public function detil2($id)
	{
		$data['detil'] = $this->M_crud->detil2($id)->result();
		$data['review']= $this->M_crud->display_review($id)->result();
		$data['jum']   = $this->M_crud->display_review($id)->num_rows();	

		$this->load->view('public/header');
		$this->load->view('public/detil_service',$data);
		$this->load->view('public/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form','url');
		$this->load->model('M_crud');
		
		if (! $this->session->userdata('status') == "login") {
				redirect('C_login');
			}
	}

	public function index()
	{
		$data['wisata']= $this->M_crud->ambil_dasboard1()->result();
		$data['news']= $this->M_crud->ambil_dasboard2()->result();
		
		$this->load->view('crud/admin_header');
		$this->load->view('crud/admin',$data);
		$this->load->view('crud/footer');
	}
	public function add_news()
	{
		$this->load->view('crud/admin_header');
		$this->load->view('crud/add_news');
		$this->load->view('crud/footer');
	}
	public function proses_add_news()
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

			$this->load->view('crud/admin_header');
			$this->load->view('crud/add_news');
			$this->load->view('crud/footer');

		}
		else
		{
			$file     = array('upload' => $this->upload->data());
			$gambar   = $file['upload']['file_name'];
			$penulis  = $this->input->post('penulis');
			$judul    = $this->input->post('judul');
			$type     = $this->input->post('type');
			$isi      = $this->input->post('berita');

			$data = array
			(
				'penulis'   => $penulis,
				'judul'     => $judul,
				'type'      => $type,
				'image'     => $gambar,
				'isi'       => $isi
			);

			$this->M_crud->input_news($data,'news');
			redirect('Crud/news_list');
		}
	}
	public function news_list()
	{
		$this->load->library('pagination');

 		$config['base_url']    = base_url().'Crud/news_list'; 
 		$config['total_rows']    = $this->M_crud->ambil()->num_rows();
 		$config['per_page']      = 6;
 		$config['num_links']     = 2;
 		$config['uri_segment']   = 3;

 		//styling

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
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
		$this->load->view('crud/admin_header');
		$this->load->view('crud/news_list',$data);
		$this->load->view('crud/footer');
	
	}
	public function news_edit($id)
	{
		$where = array('id_berita' => $id );
		$data['news'] = $this->M_crud->update_news($where ,'news')->result();
		$this->load->view('crud/admin_header');
		$this->load->view('crud/update_news',$data);
		$this->load->view('crud/footer');
	}
	public function news_update_proses($id)
	{
		$penulis  = $this->input->post('penulis');
		$judul    = $this->input->post('judul');
		$type     = $this->input->post('type');
		$isi      = $this->input->post('berita');
		if (!empty($_FILES['gambar']['name'])) 
		{
			$config['upload_path']    ='./uploads/';
			$config['allowed_types']  ='gif|jpg|jpeg|png|bmp';
			$config['encrypt_name'] =	TRUE;

			$this->load->library('upload' ,$config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')) {
					$img = $this->upload->data();

					$config['source_image']    ='./uploads/'.$img['file_name'];
					$config['create_thumb']    =FALSE;
					$config['maintain_ratio']  =FALSE;
					$config['max_size']        = 10000;
					$config['max_width']       = 5000;
					$config['max_height']      = 5000;
					$config['max_height']      = 10000;
					$config['new_image']   	   ='./uploads/'.$img['file_name'];
					
					$this->load->library('image_lib',$config);

					$gambar = $img['file_name'];

					$this->M_crud->new_image($id,$penulis,$judul,$type,$isi,$gambar);
				}	
		}
		else{
			$this->M_crud->old_image($id,$penulis,$judul,$type,$isi);
			}
		redirect('Crud/news_list');
	}
	public function delete_news($id)
	{
		$this->M_crud->news_delete($id);
		redirect('Crud/news_list');
	}
	public function add_destination()
	{
		$this->load->view('crud/admin_header');
		$this->load->view('crud/add_wisata');
		$this->load->view('crud/footer');
	}
	public function proses_add_wisata()
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

			$this->load->view('crud/admin_header');
			$this->load->view('crud/add_destination');
			$this->load->view('crud/footer');

		}
		else
		{
			$file     = array('upload' => $this->upload->data());
			$gambar   = $file['upload']['file_name'];
			$wisata   = $this->input->post('wisata');
			$lokasi   = $this->input->post('lokasi');
			$info  = $this->input->post('informasi');
			$des      = $this->input->post('deskripsi');

			$data = array
			(
				'nama_wisata'   => $wisata,
				'lokasi'        => $lokasi,
				'informasi'     => $info,
				'deskripsi'     => $des,
				'gambar'        => $gambar
			);

			$this->M_crud->input_wisata($data,'destinasi');
			redirect('crud/list_wisata');
		}
	}
	public function list_wisata()
	{
		$this->load->library('pagination');

 		$config['base_url']    = base_url().'Crud/list_wisata'; 
 		$config['total_rows']    = $this->M_crud->ambil_wisata()->num_rows();
 		$config['per_page']      = 6;
 		$config['num_links']     = 2;
 		$config['uri_segment']   = 3;

 		//styling

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
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
		$data['wisata'] = $this->M_crud->kotak_wisata($config['per_page'],$uri)->result();
		$this->load->view('crud/admin_header');
		$this->load->view('crud/wisata_list',$data);
		$this->load->view('crud/footer');
	}
	public function update_wisata($id)
	{
		$where = array('id_wisata' => $id );
		$data['wisata'] = $this->M_crud->update_wisata($where ,'destinasi')->result();
		$this->load->view('crud/admin_header');
		$this->load->view('crud/update_wisata',$data);
		$this->load->view('crud/footer');
	}
	public function wisata_update_proses($id)
	{
		$wisata   = $this->input->post('wisata');
		$lokasi   = $this->input->post('lokasi');
		$info  = $this->input->post('informasi');
		$des      = $this->input->post('deskripsi');
		if (!empty($_FILES['gambar']['name'])) 
		{
			$config['upload_path']    ='./uploads/';
			$config['allowed_types']  ='gif|jpg|jpeg|png|bmp';
			$config['encrypt_name'] =	TRUE;

			$this->load->library('upload' ,$config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')) {
					$img = $this->upload->data();

					$config['source_image']    ='./uploads/'.$img['file_name'];
					$config['create_thumb']    =FALSE;
					$config['maintain_ratio']  =FALSE;
					$config['max_size']        = 10000;
					$config['max_width']       = 5000;
					$config['max_height']      = 5000;
					$config['max_height']      = 10000;
					$config['new_image']   	   ='./uploads/'.$img['file_name'];
					
					$this->load->library('image_lib',$config);

					$gambar = $img['file_name'];

					$this->M_crud->new_image2($id,$wisata,$lokasi,$info,$des,$gambar);
				}	
		}
		else{
			$this->M_crud->old_image2($id,$wisata,$lokasi,$info,$des);
			}
		redirect('Crud/list_wisata');
	}
	public function delete_destination($id)
	{
		$this->M_crud->desti_delete($id);
		redirect('Crud/list_wisata');
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
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('C_login'));
	}
	public function registered()
	{
		$this->load->library('pagination');

 		$config['base_url']    = base_url().'Crud/registered'; 
 		$config['total_rows']    = $this->M_crud->ambil_user()->num_rows();
 		$config['per_page']      = 5;
 		$config['num_links']     = 2;
 		$config['uri_segment']   = 3;

 		//styling

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
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
		$data['user'] = $this->M_crud->kotak_user($config['per_page'],$uri)->result();
		$this->load->view('crud/admin_header');
		$this->load->view('crud/user_list',$data);
		$this->load->view('crud/footer');
	}
	public function delete_user($id)
	{
		$this->M_crud->user_delete($id);
		redirect('Crud/registered');
	}
	public function bisnis_list()
	{
		$data['list'] = $this->M_crud->ambil_record_list()->result();

		$this->load->view('crud/admin_header');
		$this->load->view('crud/user_list_bisnis',$data);
		$this->load->view('crud/footer');
	}
	public function accept($id)
	{
		$status = "1";
		$this->M_crud->acc($id,$status);
		redirect('Crud/bisnis_list');
	}	
}

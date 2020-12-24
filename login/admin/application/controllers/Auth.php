<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Akun_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('nama_akun','Nama','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'LOGIN';
			$this->load->view('template/header',$data);
			$this->load->view('auth/login');
			$this->load->view('template/footer');
		} else{
			//jika login berhasil
			$this->Akun_model->login();
		}

	}

	public function registrasi()
	{
		$this->form_validation->set_rules('nama','Nama','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]',[
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password kurang dari 6 karakter!'
			
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');


		if($this->form_validation->run() == false)
		{
			$data['title'] = 'REGISTRASI';
			$this->load->view('template/header', $data);
			$this->load->view('auth/registrasi');
			$this->load->view('template/footer');	
		} else {
			$this->Akun_model->tambahDataAkun();
			
		}
	}

    public function logout()
    {
    	$this->session->unset_userdata('nama_akun');

    	$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Anda berhasil keluar dari halaman beranda!</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 		redirect('auth');
    }

}

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Beranda'; 
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('template/header_admin');
		$this->load->view('template/sidebar_admin');
		$this->load->view('template/topbar_admin');
		$this->load->view('admin/index');
		$this->load->view('template/footer_admin');
	}

}
?>
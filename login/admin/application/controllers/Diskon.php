<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Diskon extends CI_Controller {


	public function index()
	{
		 
		//menampilkan satu baris
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		//menampilkan semua baris
		$data['data'] = $this->db->get('diskon')->result_array();

		$this->form_validation->set_rules('diskon','Nama','required');
		$this->form_validation->set_rules('ket','Nama','required');
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Data diskon';
			$this->load->view('template/header_admin',$data);
			$this->load->view('template/sidebar_admin');
			$this->load->view('template/topbar_admin');
			$this->load->view('diskon/index', $data);
			$this->load->view('template/footer_admin');
		} else{
			$this->Diskon_model->tambahData();
		}
	}

	public function hapusData($id)
	{
		if (!$this->Diskon_model->hapusDiskon($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('diskon');

		}
	}

	public function ubahData()
	{
		//menampilkan data satu baris
		echo json_encode($this->db->get_where('diskon', ['id_diskon' => $_POST['id']])->row_array());
	}

	public function ubah()
	{
		$this->form_validation->set_rules('diskon','Nama','required');
		$this->form_validation->set_rules('ket','Nama','required');

		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data anda tidak berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('diskon');
		} else{
			$this->Diskon_model->ubahReview($_POST['id']);
		}

	}

}
?>
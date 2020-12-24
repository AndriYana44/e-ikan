<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {


	public function index()
	{
		 
		//menampilkan satu baris
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		//menampilkan semua baris
		$data['data'] = $this->db->get('review')->result_array();

		$this->form_validation->set_rules('jml_reviuw','Nama','required');
		$this->form_validation->set_rules('ket','Nama','required');
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Data review';
			$this->load->view('template/header_admin',$data);
			$this->load->view('template/sidebar_admin');
			$this->load->view('template/topbar_admin');
			$this->load->view('review/index', $data);
			$this->load->view('template/footer_admin');
		} else{
			$this->Review_model->tambahData();
		}
	}

	public function hapusData($id)
	{
		if (!$this->Review_model->hapusReview($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('review');

		}
	}

	public function ubahData()
	{
		//menampilkan data satu baris
		echo json_encode($this->db->get_where('review', ['id_reviuw' => $_POST['id']])->row_array());
	}

	public function ubah()
	{
		$this->form_validation->set_rules('jml_reviuw','Nama','required');
		$this->form_validation->set_rules('ket','Nama','required');

		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data anda tidak berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('review');
		} else{
			$this->Review_model->ubahReview($_POST['id']);
		}

	}

}
?>
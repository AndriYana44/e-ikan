<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {


	public function index()
	{
		 
		//menampilkan satu baris
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		//menampilkan semua baris
		$data['data'] = $this->db->get('harga')->result_array();

		$this->form_validation->set_rules('harga','Nama','required');
		$this->form_validation->set_rules('ket','Nama','required');
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Data harga';
			$this->load->view('template/header_admin',$data);
			$this->load->view('template/sidebar_admin');
			$this->load->view('template/topbar_admin');
			$this->load->view('harga/index', $data);
			$this->load->view('template/footer_admin');
		} else{
			$this->Harga_model->tambahData();
		}
	}

	public function hapusData($id)
	{
		if (!$this->Harga_model->hapusHarga($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('harga');

		}
	}

	public function ubahData()
	{
		//menampilkan data satu baris
		echo json_encode($this->db->get_where('harga', ['id_diskon' => $_POST['id']])->row_array());
	}

	public function ubah()
	{
		$this->form_validation->set_rules('harga','Nama','required');
		$this->form_validation->set_rules('ket','Nama','required');

		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data anda tidak berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('harga');
		} else{
			$this->Harga_model->ubahReview($_POST['id']);
		}

	}

}
?>
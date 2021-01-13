<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {


	public function index()
	{
		 
		//menampilkan satu baris
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		//menampilkan semua baris
		$data['data'] = $this->db->get('kategori_produk')->result_array();

		$this->form_validation->set_rules('nama_kategori','Nama','required');
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Data Kategori';
			$this->load->view('template/header_admin',$data);
			$this->load->view('template/sidebar_admin');
			$this->load->view('template/topbar_admin');
			$this->load->view('kategori/index', $data);
			$this->load->view('template/footer_admin');
		} else{
			$this->Kategori_model->tambahData();
		}
	}

	public function hapusData($id)
	{
		if (!$this->Kategori_model->hapusKategori($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('kategori');

		}
	}

	public function ubahData()
	{
		//menampilkan data satu baris
		echo json_encode($this->db->get_where('kategori', ['id_kategori' => $_POST['id']])->row_array());
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama_kategori','Nama','required');

		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data anda tidak berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('kategori');
		} else{
			$this->Kategori_model->ubahKategori($_POST['id']);
		}

	}

}
?>
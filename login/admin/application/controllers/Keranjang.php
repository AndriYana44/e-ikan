<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {


	public function index()
	{
		 
		//menampilkan satu baris
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		//menampilkan semua baris
		$data['data'] = $this->db->get('keranjang')->result_array();

			$data['title'] = 'Data keranjang';
			$this->load->view('template/header_admin',$data);
			$this->load->view('template/sidebar_admin');
			$this->load->view('template/topbar_admin');
			$this->load->view('keranjang/index', $data);
			$this->load->view('template/footer_admin');
	}

	public function hapusData($id)
	{
		if (!$this->Keranjang_model->hapusKeranjang($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('keranjang');

		}
	}

	public function ubahData()
	{
		//menampilkan data satu baris
		echo json_encode($this->db->get_where('keranjang', ['id_keranjang' => $_POST['id']])->row_array());
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama_produk','Nama','required');
		$this->form_validation->set_rules('nama_akun','Nama','required');
		$this->form_validation->set_rules('jml_item','Nama','required');
		$this->form_validation->set_rules('total_pembayaran','Nama','required');
		$this->form_validation->set_rules('tgl_pemesanan','Nama','required');

		if($this->form_validation->run() == false)
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Data anda tidak berhasil diubah!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('keranjang');
		} else{
			$this->Keranjang_model->ubahKeranjang($_POST['id']);
		}

	}

}
?>
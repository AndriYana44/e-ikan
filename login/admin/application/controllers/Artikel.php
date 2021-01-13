<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{ 

		//menampilkan satu baris
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		//menampilkan semua baris
		$data['data'] = $this->db->get('artikel')->result_array();

			$data['title'] = 'Artikel';
			$this->load->view('template/header_admin',$data);
			$this->load->view('template/sidebar_admin');
			$this->load->view('template/topbar_admin');
			$this->load->view('artikel/index', $data);
			$this->load->view('template/footer_admin');
	
	}

	public function hapusData($id)
	{
		if (!$this->Artikel_model->hapusArtikel($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('artikel');

		}
	}

	public function acc(){		
		$id = $this->uri->segment('3');
		$status = $_POST['status'];	
		if(!empty($status)){
        $data = [   'status' => $status,
        			'tgl_acc'=> date('d-m-Y')
                ];
    	$this->db->where('id_akun',$id);
    	$this->db->update('artikel',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Status artikel telah sukses diubah menjadi artikel diterima.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, album anda sukses dibuat! </div>');
         		redirect('artikel');
 	} else{
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>GAGAL!</strong> Status artikel gagal diubah menjadi artikel diterima.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, album anda sukses dibuat! </div>');
         		redirect('artikel');
 	}
		//$query = "SELECT * FROM berita where id = $data";
    	//$data1['berita'] = $this->db->query($query)->result_array();
    	//$data2['data'] = $this->db->get('profile')->result_array();
		//$data1['dok'] = $this->db->get('dokumen')->result_array();
		//$this->load->view('template/hberita',$data2);
		//$this->load->view('template/mberita');
		//$this->load->view('berita/list',$data1);
		//$this->load->view('template/fberita');

	}

}
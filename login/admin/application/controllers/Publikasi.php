<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends CI_Controller {

	public function index()
	{ 

		//menampilkan satu baris
		$data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		//menampilkan semua baris
		$data['data'] = $this->db->get('publikasi')->result_array();

			$data['title'] = 'Publikasi';
			$this->load->view('template/header_admin',$data);
			$this->load->view('template/sidebar_admin');
			$this->load->view('template/topbar_admin');
			$this->load->view('publikasi/index', $data);
			$this->load->view('template/footer_admin');
	
	}

	public function hapusData($id)
	{
		if (!$this->Publikasi_model->hapusPublikasi($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('publikasi');

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
    	$this->db->update('publikasi',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Status publikasi telah sukses diubah menjadi publikasi diterima.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, album anda sukses dibuat! </div>');
         		redirect('publikasi');
 	} else{
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>GAGAL!</strong> Status publikasi gagal diubah menjadi publikasi diterima.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, album anda sukses dibuat! </div>');
         		redirect('publikasi');
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
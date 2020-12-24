<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		 
 /**$this->load->view('profile/index', array('error' => ' ' ));*/
		//menampilkan satu baris
		$data1['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

		//menampilkan semua baris
		$data['data'] = $this->db->get('produk')->result_array();


			$data1['title'] = 'Data Produk';
			$this->load->view('template/header_admin',$data);
			$this->load->view('template/sidebar_admin');
			$this->load->view('template/topbar_admin');
			$this->load->view('produk/index', $data);
			$this->load->view('template/footer_admin');
	}

	public function upload(){
			$config['upload_path']         = '../gambar/';  // folder upload 
            $config['allowed_types']        = 'jpg|png|jpeg'; // jenis file
            $config['max_size']             = 30000000;
            /**$config['max_width']            = 1024;
            $config['max_height']           = 768;*/
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('file')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
            	//tampung data dari form
            	$nama_produk = $this->input->post('nama_produk');
            	$file = $this->upload->data();
            	$file = $file['file_name'];
            	$ukuran = $this->input->post('ukuran');
            	$harga = $this->input->post('harga');
            	$stok = $this->input->post('stok');
            	$ket = $this->input->post('ket');
            	$id_jenis = $this->input->post('id_jenis');
            	$id_reviuw = $this->input->post('id_reviuw');
 
                $this->Produk_model->tambahData(array(
                	'nama_produk' => $nama_produk,
                	'gambar_produk' => $file,
                	'ukuran' => $file,
                	'harga' => $harga,
                	'stok' => $stok,
                	'ket' => $ket,
                	'id_jenis' => $id_jenis,
                	'id_reviuw' => $id_reviuw

				));
				$this->session->set_flashdata('msg','data berhasil di upload');
				redirect('produk');
 
            }
		}

	public function hapusData($id)
	{
		if (!$this->Produk_model->hapusProduk($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('produk');

		}
	}

	public function ubahData()
	{
		//menampilkan data satu baris
		//echo $_POST['id'];
		echo json_encode($this->db->get_where('produk', ['id_produk' => $_POST['id']])->row_array());
	}

	public function ubah()
	{
		$config['upload_path']         = '../gambar/';  // folder upload 
        $config['allowed_types']        = 'jpg|png|jpeg'; // jenis file
        $config['max_size']             = 30000000;
 
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('file')) //sesuai dengan name pada form 
        {
            echo 'anda gagal upload';
        } else {
 			$this->Produk_model->ubahProduk($_POST['id']); 
 		}
	}


}
?>
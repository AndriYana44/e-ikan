<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function index()
	{
		 /**$this->load->view('profile/index', array('error' => ' ' ));*/
		//menampilkan satu baris
		$data1['akun'] = $this->db->get_where('akun', ['nama_akun' => $this->session->userdata('nama_akun')])->row_array();

		//menampilkan semua baris
		$data1['data'] = $this->db->get('dokumen')->result_array();
		$data1['subdata'] = $this->db->get('kategori')->result_array();


			$data1['title'] = 'Data Dokumen';
			$this->load->view('template/header_admin',$data1);
			$this->load->view('template/sidebar_admin',$data1);
			$this->load->view('template/topbar_admin',$data1);
			$this->load->view('dokumen/index', $data1);
			$this->load->view('template/footer_admin');
	}

		public function upload(){
			$config['upload_path']         = '../dokumen/';  // folder upload 
            $config['allowed_types']        = 'pdf|docx|xlsx|pptx'; // jenis file
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
            	$id_kategori = $this->input->post('id_kategori');
            	$nama_dokumen = $this->input->post('nama_dokumen');
            	$link_file = $this->input->post('link_file');
            	$ket = $this->input->post('ket');
            	$file = $this->upload->data();
            	$file = $file['file_name'];
 
                $this->Dokumen_model->tambahData(array(
                	'id_kategori' => $id_kategori,
                	'nama_dokumen' => $nama_dokumen,
                	'file' => $file,
                	'link_file' => $link_file,
                	'ket' => $ket
				));
				$this->session->set_flashdata('msg','data berhasil di upload');
				redirect('dokumen');
 
            }
		}
	public function hapusData($id)
	{
		if (!$this->Dokumen_model->hapusDokumen($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('dokumen');

		}
	}

	public function ubahData()
	{
		//menampilkan data satu baris
		//echo $_POST['id'];
		echo json_encode($this->db->get_where('dokumen', ['id_dokumen' => $_POST['id_dokumen']])->row_array());
	}

	public function ubah()
	{

			$config['upload_path']         = '../dokumen/';  // folder upload 
            $config['allowed_types']        = 'pdf|docx|xlsx|pptx'; // jenis file
            $config['max_size']             = 30000000;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('file')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
 				$this->Dokumen_model->ubahDokumen($_POST['id_dokumen']);
 
            }

	}


}
?>
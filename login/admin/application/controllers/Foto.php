<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {

	public function index()
	{
		 
 /**$this->load->view('profile/index', array('error' => ' ' ));*/
		//menampilkan satu baris
		$data1['akun'] = $this->db->get_where('akun', ['nama_akun' => $this->session->userdata('nama_akun')])->row_array();

		//menampilkan semua baris
		$data1['data'] = $this->db->get('foto')->result_array();
		$data1['subdata'] = $this->db->get('album')->result_array();


			$data1['title'] = 'Data Foto';
			$this->load->view('template/header_admin',$data1);
			$this->load->view('template/sidebar_admin',$data1);
			$this->load->view('template/topbar_admin',$data1);
			$this->load->view('foto/index', $data1);
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
            	$id_album = $this->input->post('id_album');
            	$judul = $this->input->post('judul');
            	$file = $this->upload->data();
            	$file = $file['file_name'];
            	$link_foto = $this->input->post('link_foto');
            	$deskripsi = $this->input->post('deskripsi');
            	$tgl_upload = $this->input->post('tgl_upload');
 
                $this->Foto_model->tambahData(array(
                	'id_album' => $id_album,
                	'judul' => $judul,
                	'foto' => $file,
                	'link_foto' => $link_foto,
                	'deskripsi' => $deskripsi,
                	'tgl_upload' => $tgl_upload
				));
				$this->session->set_flashdata('msg','data berhasil di upload');
				redirect('foto');
 
            }
		}

	public function hapusData($id)
	{
		if (!$this->Foto_model->hapusFoto($id)) {
			//jika data berhasil
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Data anda berhasil dihapus!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 		redirect('foto');

		}
	}

	public function ubahData()
	{
		//menampilkan data satu baris
		//echo $_POST['id'];
		echo json_encode($this->db->get_where('foto', ['id_foto' => $_POST['id']])->row_array());
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
 			$this->Foto_model->ubahDokumen($_POST['id_foto']); 
 		}
	}


}
?>
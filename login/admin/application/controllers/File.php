<?php 
	class File extends CI_Controller {
		public function index(){
			$this->load->view('file', array('error' => ' ' ));
		}

		public function upload(){
			$config['upload_path']         = '../gambar/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 300000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('file')) //sesuai dengan name pada form 
            {
                   echo 'anda gagal upload';
            }
            else
            {
            	//tampung data dari form
                $nama = $this->input->post('nama');
                $alamat = $this->input->post('alamat');
                $link_alamat = $this->input->post('link_alamat');
                $telpon = $this->input->post('telpon');
                $fax = $this->input->post('fax');
                $email = $this->input->post('email');
            	$penjelasan = $this->input->post('penjelasan');
            	$file = $this->upload->data();
            	$file = $file['file_name'];
 
                $this->File_model->insert(array(
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'link_alamat' => $link_alamat,
                    'telpon' => $telpon,
                    'fax' => $fax,
                    'email' => $email,
			        'logo' => $file,
			        'penjelasan' => $penjelasan
				));
				$this->session->set_flashdata('msg','data berhasil di upload');
				redirect('file');
 
            }
		}
}
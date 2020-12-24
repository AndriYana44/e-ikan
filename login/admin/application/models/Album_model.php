<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album_model extends CI_Model{

	public function tambahData($data)
    {

    	$this->db->insert('album',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data album telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('album');
    }

    public function hapusAlbum($id)
    {
    	$this->db->where('id_album',$id)->delete('album');
    }

    public function ubahAlbum($id)
    {
                //tampung data dari form
                $judul = $this->input->post('judul');
                $file = $this->upload->data();
                $file = $file['file_name'];
        $data = [   'judul' => $judul,
                    'cover_album' => $file
                ];
    	$this->db->where('id_album',$id);
    	$this->db->update('album',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data album telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, album anda sukses dibuat! </div>');
 		redirect('album');
 	}

}
?>
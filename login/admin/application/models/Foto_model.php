<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto_model extends CI_Model{

	public function tambahData($data)
    {
    	$this->db->insert('foto',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data foto telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('foto');
    }

    public function hapusFoto($id)
    {
    	$this->db->where('id_galeri',$id)->delete('foto');
    }

    public function ubahFoto($id)
    {
        //tampung data dari form
        $id_album = $this->input->post('id_album');
        $judul = $this->input->post('judul');
        $file = $this->upload->data();
        $file = $file['file_name'];
        $link_foto = $this->input->post('link_foto');
        $deskripsi = $this->input->post('deskripsi');
        $tgl_upload = $this->input->post('tgl_upload');
        $data = [   'id_album' => $id_album,
                    'judul' => $judul,
                    'foto' => $file,
                    'link_foto' => $link_foto,
                    'deskripsi' => $deskripsi,
                    'tgl_upload' => $tgl_upload
                ];

    	$this->db->where('id_foto',$id);
    	$this->db->update('foto',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data foto telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, foto anda sukses dibuat! </div>');
 		redirect('foto');
 	}

}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_model extends CI_Model{
    public function tambahData($data)
    {
        $this->db->insert('dokumen',$data);
    }

    public function hapusDokumen($id)
    {
        $this->db->where('id_dokumen',$id)->delete('dokumen');

    }

    public function ubahDokumen($id)
    {

                //tampung data dari form
                $id_kategori = $this->input->post('id_kategori');
                $nama_dokumen = $this->input->post('nama_dokumen');
                $link_file = $this->input->post('link_file');
                $ket = $this->input->post('ket');
                $file = $this->upload->data();
                $file = $file['file_name'];
        $data = [   'id_kategori' => $id_kategori,
                    'nama_dokumen' => $nama_dokumen,
                    'file' => $file,
                    'link_file' => $link_file,
                    'ket' => $ket
                ];
        $this->db->where('id_dokumen',$id);
        $this->db->update('dokumen',$data);
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            //<div class="alert alert-success" role="alert">Selamat, profile anda sukses dibuat! </div>');
        redirect('dokumen');
    }

}
?>
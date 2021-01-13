<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model{

	public function tambahData()
    {
    	$data = [ 
    		'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true)),
    	];

    	$this->db->insert('kategori_produk',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data Kategori telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('kategori');
    }

    public function hapusKategori($id)
    {
    	$this->db->where('id_kategori',$id)->delete('kategori_produk');
    }

    public function ubahKategori($id)
    {
    $data = [ 
    		'nama_kategori' => htmlspecialchars($this->input->post('nama_kategori', true)),
    	];

    	$this->db->where('id_kategori',$id);
    	$this->db->update('kategori_produk',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data kategori telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, kategori anda sukses dibuat! </div>');
 		redirect('kategori');
 	}

}
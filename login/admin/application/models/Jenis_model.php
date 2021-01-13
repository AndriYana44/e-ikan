<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_model extends CI_Model{
public function tambahData()
    {
    	$data = [ 
    		'nama_jenis' => htmlspecialchars($this->input->post('nama_jenis', true)),
    		'id_kategori' => htmlspecialchars($this->input->post('id_kategori', true)),
    	];

    	$this->db->insert('jenis_produk',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data Jenis telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('jenis');
    }

    public function hapusJenis($id)
    {
    	$this->db->where('id_jenis',$id)->delete('jenis_produk');
    }

    public function ubahJenis($id)
    {
    $data = [ 
    		'nama_jenis' => htmlspecialchars($this->input->post('nama_jenis', true)),
    		'id_kategori' => htmlspecialchars($this->input->post('id_kategori', true)),
    	];

    	$this->db->where('id_jenis',$id);
    	$this->db->update('jenis_produk',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data jenis telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, jenis anda sukses dibuat! </div>');
 		redirect('jenis');
 	}

}
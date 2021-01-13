<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model{

public function tambahData($data)
    {
    	$this->db->insert('produk',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data produk telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('produk');
    }

    public function hapusProduk($id)
    {
    	$this->db->where('id_produk',$id)->delete('produk');
    }

    public function ubahProduk($id)
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
        $data = [   'nama_produk' => $nama_produk,
                	'gambar_produk' => $file,
                	'ukuran' => $file,
                	'harga' => $harga,
                	'stok' => $stok,
                	'ket' => $ket,
                	'id_jenis' => $id_jenis,
                	'id_reviuw' => $id_reviuw
                ];

    	$this->db->where('id_produk',$id);
    	$this->db->update('produk',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data produk telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, produk anda sukses dibuat! </div>');
 		redirect('produk');
 	}

}
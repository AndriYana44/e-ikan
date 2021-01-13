<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang_model extends CI_Model{

public function tambahData()
    {
    	$data = [ 
    		'keranjang' => htmlspecialchars($this->input->post('keranjang', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
    	];

    	$this->db->insert('keranjang',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data keranjang telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('keranjang');
    }

    public function hapusKeranjang($id)
    {
    	$this->db->where('id_keranjang',$id)->delete('keranjang');
    }

    public function ubahKeranjang($id)
    {
    $data = [ 
    		'keranjang' => htmlspecialchars($this->input->post('keranjang', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
    	];

    	$this->db->where('id_keranjang',$id);
    	$this->db->update('keranjang',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data keranjang telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, keranjang anda sukses dibuat! </div>');
 		redirect('keranjang');
 	}

}
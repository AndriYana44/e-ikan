<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Harga_model extends CI_Model{
public function tambahData()
    {
    	$data = [ 
    		'harga' => htmlspecialchars($this->input->post('harga', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
    	];

    	$this->db->insert('harga',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data harga telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('harga');
    }

    public function hapusHarga($id)
    {
    	$this->db->where('id_harga',$id)->delete('harga');
    }

    public function ubahHarga($id)
    {
    $data = [ 
    		'harga' => htmlspecialchars($this->input->post('harga', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
    	];

    	$this->db->where('id_harga',$id);
    	$this->db->update('harga',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data harga telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, harga anda sukses dibuat! </div>');
 		redirect('harga');
 	}

}
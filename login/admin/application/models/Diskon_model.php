<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diskon_model extends CI_Model{
public function tambahData()
    {
    	$data = [ 
    		'diskon' => htmlspecialchars($this->input->post('diskon', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
    	];

    	$this->db->insert('diskon',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data diskon telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('diskon');
    }

    public function hapusDiskon($id)
    {
    	$this->db->where('id_diskon',$id)->delete('diskon');
    }

    public function ubahDiskon($id)
    {
    $data = [ 
    		'diskon' => htmlspecialchars($this->input->post('diskon', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
    	];

    	$this->db->where('id_diskon',$id);
    	$this->db->update('diskon',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data diskon telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, diskon anda sukses dibuat! </div>');
 		redirect('diskon');
 	}

}
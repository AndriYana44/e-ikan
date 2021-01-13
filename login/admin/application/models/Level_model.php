<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model{
public function tambahData()
    {
    	$data = [ 
    		'level' => htmlspecialchars($this->input->post('level', true)),
    	];

    	$this->db->insert('level_akun',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data level telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('level');
    }

    public function hapusLevel($id)
    {
    	$this->db->where('id_level',$id)->delete('level_akun');
    }

    public function ubahLevel($id)
    {
    $data = [ 
    		'level' => htmlspecialchars($this->input->post('level', true)),
    	];

    	$this->db->where('id_level',$id);
    	$this->db->update('level_akun',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data level telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, level anda sukses dibuat! </div>');
 		redirect('level');
 	}

}
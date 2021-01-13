<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_model extends CI_Model{

	public function tambahData()
    {
    	$data = [ 
    		'nama_sub' => htmlspecialchars($this->input->post('nama_sub', true)),
            'id_jenis' => htmlspecialchars($this->input->post('id_jenis', true)),
    	];

    	$this->db->insert('sub_jenis',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data Sub Jenis telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('sub');
    }

    public function hapusSub($id)
    {
    	$this->db->where('id_jenis',$id)->delete('sub_jenis');
    }

    public function ubahSub($id)
    {
    $data = [ 
    		'nama_sub' => htmlspecialchars($this->input->post('nama_sub', true)),
    	];

    	$this->db->where('id_jenis',$id);
    	$this->db->update('sub_jenis',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data sub jenis telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, sub anda sukses dibuat! </div>');
 		redirect('sub');
 	}


}
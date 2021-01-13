<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model{

	public function tambahData()
    {
    	$data = [ 
    		'nama_akun' => htmlspecialchars($this->input->post('nama_akun', true)),
    		'email' => htmlspecialchars($this->input->post('email', true)),
    		'image' => 'default.jpg',
    		'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT), 
    		'is_active' => 1,
    		'tanggal_buat' => time()
    	];

    	$this->db->insert('akun',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data Akun telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('akun');
    }

    public function hapusAkun($id)
    {
    	$this->db->where('id_akun',$id)->delete('akun');
    }

    public function ubahAkun($id)
    {
    $data = [ 
    		'nama_akun' => htmlspecialchars($this->input->post('nama_akun', true)),
    		'email' => htmlspecialchars($this->input->post('email', true)),
    		'image' => 'default.jpg',
    		'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT), 
    		'is_active' => 1,
    		'tanggal_buat' => time()
    	];

    	$this->db->where('id',$id);
    	$this->db->update('akun',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data Akun telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('akun');
 	}

}
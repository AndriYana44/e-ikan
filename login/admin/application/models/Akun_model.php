<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_model extends CI_Model{

    public function GetAkun()
    {
        $data = $this->db->query("SELECT * FROM akun");
        return $data->result_array();
    }

    public function tambahDataAkun()
    {
    	$data = [ 
    		'nama_akun' => htmlspecialchars($this->input->post('nama', true)),
    		'email' => htmlspecialchars($this->input->post('email', true)),
    		'image' => 'default.jpg',
    		'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT), 
    		'is_active' => 1,
    		'tanggal_buat' => time()
    	];

    	$this->db->insert('akun',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Akun anda sukses dibuat.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('auth');
    }

    public function login()
    {
    	$nama_akun = $this->input->post('nama_akun');
    	$password = $this->input->post('password');

    	$akun = $this->db->get_where('akun', ['nama_akun' => $nama_akun])->row_array();

    	//jika akun terdaftar
    	if ($akun) 
    	{
    		//jika akun aktif
    		if($akun['is_active'] == 1)
    		{
    			//cek password
    			if (password_verify($password, $akun['password'])) 
    			{
    				$data = ['nama_akun' => $akun['nama_akun'] ];
    				$this->session->set_userdata($data);
    				redirect('admin');
    			} else{
    				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Password anda salah!</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 					redirect('auth');
    			}
    		} else{
    			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Nama anda belum terdaftar sebagai akun administrator!</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 				redirect('auth');
    		}
    	} else {
    		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Nama anda belum terdaftar sebagai akun administrator!</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 			redirect('auth');
    	}
    }

}
?>
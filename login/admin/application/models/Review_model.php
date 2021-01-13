<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model{
public function tambahData()
    {
    	$data = [ 
    		'jml_reviuw' => htmlspecialchars($this->input->post('jml_reviuw', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
    	];

    	$this->db->insert('review',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data review telah sukses ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, Akun anda sukses dibuat! </div>');
 		redirect('review');
    }

    public function hapusReview($id)
    {
    	$this->db->where('id_reviuw',$id)->delete('review');
    }

    public function ubahReview($id)
    {
    $data = [ 
    		'jml_reviuw' => htmlspecialchars($this->input->post('jml_reviuw', true)),
            'ket' => htmlspecialchars($this->input->post('ket', true)),
    	];

    	$this->db->where('id_reviuw',$id);
    	$this->db->update('review',$data);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Selamat!</strong> Data review telah sukses diubah.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//<div class="alert alert-success" role="alert">Selamat, review anda sukses dibuat! </div>');
 		redirect('review');
 	}

}
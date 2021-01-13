<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi_model extends CI_Model{

    public function hapusPublikasi($id)
    {
    	$this->db->where('id_publikasi',$id)->delete('publikasi');
    }

}
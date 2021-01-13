<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_model extends CI_Model{

    public function hapusToko($id)
    {
    	$this->db->where('id_toko',$id)->delete('toko');
    }

}
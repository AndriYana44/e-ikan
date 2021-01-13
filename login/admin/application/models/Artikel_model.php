<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model{

    public function hapusArtikel($id)
    {
    	$this->db->where('id_artikel',$id)->delete('artikel');
    }

}
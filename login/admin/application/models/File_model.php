<?php 
	class File_model extends CI_Model{
		public function insert($data){
			$this->db->insert('profile',$data);
		}
	}
<?php 

class Upload extends CI_Controller{

    function __construct(){
        parent::__construct();
          $this->load->helper(array('form', 'url'));
    }

	public function index(){
		$this->load->view('v_upload', array('error' => ' ' ));
	}

	public function aksi_upload(){
		$config['upload_path']          = '../gambar/';
		$config['allowed_types']        = 'pdf|docx|xlsx|pptx';
		$config['max_size']             = 1000000000;
		$config['max_width']            = 1000000024;
		$config['max_height']           = 1000000768;

		$this->load->library('upload', $config);
		$data = [ 
    		'file' => $this->upload->do_upload('berkas'),
    		'ket' => $this->input->post('ket')
    	];
		$this->db->insert('file',$data);
		//if ( ! $this->upload->do_upload('berkas')){
			//$error = array('error' => $this->upload->display_errors());
			//$this->load->view('v_upload', $error);
		//}else{
			//$data = array('upload_data' => $this->upload->data());
			//$this->db->insert('file',$data);
			//$this->load->view('v_upload_sukses', $data);
		//}
	}

 }
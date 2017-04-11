<?php

class Upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	public function do_upload()
	{
		$config['upload_path']          = './application/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 0;
		$config['max_width']            = 0;
		$config['max_height']           = 0;


		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload())
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_success',$data);
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
		}
	}
}
?>
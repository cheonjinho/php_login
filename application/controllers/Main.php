<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Main extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        //$this->load->library('form_validation');
        $this->load->model('user');
    }
    
    public function index(){

    	$data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));

    	$this->load->view('template/header', $data);
    	$this->load->view('main_view');
    	$this->load->view('template/footer');
    }
}
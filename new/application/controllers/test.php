<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

    public function index(){
        $this->load->library('upload');
        $this->load->helper('form');
        $this->load->view('upload-test');
    }
    public function iframeupload(){
        $this->load->helper('form');
        $this->load->library('upload');
        $this->load->view('upload-imgs');
    }
    
    public function uploadimgs(){
        
    }
}
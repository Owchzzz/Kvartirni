<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Country extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('countryquery','cq');
        
    }   
    
    public function index(){
        $this->load->view('header_auth');
        $this->load->view('menu');
        $op=$this->cq->loadcountry();
        $data=array('output'=>$op);
        $this->load->view('load-country',$data);
        $this->load->view('footer');
    }
    
    public function addnew(){
        $this->load->view('header_auth');
        $this->load->view('menu');
        $this->load->view('add-country');
        $this->load->view('footer');
               
    }
    
    public function savenew(){
        $this->load->model('countryquery');
        $this->countryquery->savenew();
    }
    
    public function edit(){
        $this->load->view('header_auth');
        $this->load->view('edit-country',$data);
        $this->load->view('footer');
    }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class City extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('loginid')){
            $this->load->model('cityquery');
        }
        else{
            header('Location: /new/');
            die();
        }
    }
    
    public function index(){
        $this->load->view('header_auth');
        //$this->load->model('cityquery');
        $output=$this->cityquery->loadall();
        $data=array('output'=>$output);
        $this->load->view('menu');
        $this->load->view('cities',$data);
        $this->load->view('footer');
    }
    
    public function del(){
        //$this->load->model('cityquery');
        $this->cityquery->delete();
    }
    
    public function edit(){
        $this->load->view('header_auth');
        $this->load->view('menu');
        $this->load->model('countryquery');
        $output=$this->countryquery->loadcountryselect();
        $row=$this->cityquery->loadcity();
    
        $data=array('latname'=>$row['latname'],'cityname'=>$row['cityname'],'output'=>$output);
        $this->load->view('edit-city',$data);
        $this->load->view('footer');
    }
    
    public function saveedit(){
        $this->load->view('header_auth');
        $this->load->view('menu');
        $this->cityquery->saveedit();
        $this->load->view('footer');
    }
}
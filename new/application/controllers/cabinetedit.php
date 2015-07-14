<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabinetedit extends CI_Controller{
       public function index(){
           $this->load->view('header_auth');
           $this->load->view('menu');
          $this->load->view('footer');
          
       }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
                $auth_error=$this->session->userdata('auth_error');
                $loginid=$this->session->userdata('loginid');
                if(!empty($auth_error)){
                    $data['auth_error']=$auth_error;
                    $this->session->sess_destroy();
                    $this->load->view('header_not_auth',$data);
                    $this->load->view('menu');
                    $this->load->view('main');
                    $this->load->view('footer');
                }
                elseif(!empty($loginid)){
                    $this->load->view('header_auth');
                    $this->load->view('menu');
                    $this->load->view('main');
                    $this->load->view('footer');
                }
                else{
                    $this->load->view('header_not_auth');
                    $this->load->view('menu');
                    $this->load->view('main');
                    $this->load->view('footer');
                }
		
	}
}
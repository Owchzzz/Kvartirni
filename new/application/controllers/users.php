<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
		
	}
     
     
     //Registration Functions
        public function registration()
	{
                $loginid=$this->session->userdata('loginid');
                if (empty($loginid)){
                    $this->load->view('header_not_auth');
                }else{
                    $this->load->view('header_auth');
                }
                $this->load->view('menu');
		$this->load->view('registration');
	}
    
    public function submitreg(){
        $this->load->model('usersquery','uq');
        $this->uq->register();
    }
    
    public function successregister(){
        $this->load->model('usersquery','uq');
        $this->uq->mailconfirmation();
        $this->load->view('header_not_auth');
        $this->load->view('menu');
        $this->load->view('registrationsuccess');
    }
    
    public function failedregister(){
        $this->load->model('usersquery','uq');
        $this->load->view('header_not_auth');
        $this->load->view('menu');
        $this->load->view('registrationfailure');
    }
    
    public function confirm(){
        $this->load->model('usersquery','uq');
        $this->load->view('header_not_auth');
        $this->uq->confirmcheck();
        $this->load->view('menu');
        $this->load->view('confirmsuccess');
        
    }
        
         public function logout()
	{
		$this->session->sess_destroy();
                header("Location: ../");
	}
        
        public function login()
	{
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $password=md5($password);
            $query = $this->db->query('SELECT id FROM users WHERE login="'.$username.'" and pass="'.$password.'";');
            $row = $query->row();
            $id=$row->id;
                  if (empty($row)){
                      $newdata = array('auth_error'  => "1");
                      $this->session->set_userdata($newdata);
                      header("Location: ../");
                  }else{
                      $newdata = array('loginid'  => $id);
                      $this->session->set_userdata($newdata);
                      header("Location: ../");
                  }
	}
}
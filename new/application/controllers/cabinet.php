<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabinet extends CI_Controller {
	public function index()
	{
            $this->load->model('cabinetquery');
            $data['aparts'] = $this->cabinetquery->load_apartments();
                $this->load->view('header_auth');
                $this->load->view('menu');
                $this->load->view('cabinet_header');
		$this->load->view('cabinet',$data);
              
	}
        
        public function profile()
	{
                $this->load->view('header_auth');
                $this->load->view('menu');
                $this->load->view('cabinet_header');
		$this->load->view('profile');
 
	}
        
         public function paid_services()
	{
                $this->load->view('header_auth');
                $this->load->view('menu');
                $this->load->view('cabinet_header');
		$this->load->view('paid_services');
;
	}
        
        public function payment()
	{
                $this->load->view('header_auth');
                $this->load->view('menu');
                $this->load->view('cabinet_header');
		$this->load->view('payment');

	}    
        
        public function blacklist()
	{
                $this->load->view('header_auth');
                $this->load->view('menu');
                $this->load->view('cabinet_header');
		$this->load->view('blacklist');

	}  
        
        public function makepremium(){
            $this->load->model('cabinetquery');
            $this->cabinetquery->makeprem();
            
        }
        
        public function delete(){
            $this->load->model('cabinetquery');
            $this->cabinetquery->delete();
        }
        
}
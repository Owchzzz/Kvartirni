<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aparts extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('upload');
    }
    public function index(){
            
    }
     public function add_apart(){
         $this->load->helper('form');
         $this->load->model('apartmentquery');
         $select1=$this->apartmentquery->load_country_select();
         $select2=$this->apartmentquery->load_city_select();
         $data['select1'] = $select1;
         $data['select2'] = $select2;
            $this->load->view('header_auth');
            $this->load->view('menu');
            $this->load->view('cabinet_header');
            $this->load->view('add_apart',$data);
    }
    
   
    
     public function apartlist(){
         $this->load->model('apartmentquery');
         $data['output']=$this->apartmentquery->list_apartments();
         $data['select1']=  $this->apartmentquery->load_country_select();
            $this->load->view('header_auth');
            $this->load->view('menu');
            $this->load->view('apartments_list.php',$data);
    }
    public function apartslistsort(){
         $this->load->model('apartmentquery');
         $data['output']=$this->apartmentquery->display_search();
         $data['select1']=  $this->apartmentquery->load_country_select();
            $this->load->view('header_auth');
            $this->load->view('menu');
            $this->load->view('apartments_list_sort.php',$data);
    }
	
    public function apartment(){
            $this->load->view('header_auth');
            $this->load->view('menu');
            $this->load->view('apartments.php');
    }
    
    public function edit(){
        $this->load->model('apartmentquery');
        $data1=  $this->apartmentquery->load_country();
        $select1=$this->apartmentquery->load_country_select();
         $select2=$this->apartmentquery->load_city_select(); 
         $data2 = $this->apartmentquery->load_tel_nums($data1['Tell'],$data1['callafter'],$data1['addtell']);
         $data=  array_merge($data1,$data2);
         $data['select1'] = $select1;
         $data['select2'] = $select2;
        $this->load->view('header_auth');
        $this->load->view('menu');
        $this->load->view('cabinet_header');
        $this->load->view('edit-apart',$data);
    }
    
    public function savenew(){
        $this->load->model('apartmentquery');
        $this->apartmentquery->save_new_apart();
    }
    
    public function saveedit(){
        $this->load->model('apartmentquery');
        $this->apartmentquery->save_edit_apart();
    }
    
    public function savesuccess(){
    $this->load->view('header_auth');
    $this->load->view('menu');
    $this->load->view('apartmentadd');
    }
    
    
}
    
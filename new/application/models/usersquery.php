<?php

class Usersquery extends CI_Model{
    public function register(){
        $id=$this->input->post('username');
        $email=$this->input->post('email');
        $pass1=$this->input->post('password1');
        $pass2=$this->input->post('password2');
        
        if($pass1==$pass2){
            $this->db->where('login',$id);
            $this->db->get('users');
            $count = $this->db->count_all_results();
            if($count <1){
            $data=array('login'=>$id,'pass'=>md5($pass1),'email'=>$email,'registered_on'=>date('m-d-Y',time()),'status'=>0);
            
            $this->db->insert('users',$data);
            header('Location: /new/users/successregister.html?id='.$id.'&email='.$email);
            }
            else{
                header('Location: /new/users/failedregister.html');
            }
        }else{
            header('Location: /new/users/failedregister.html');
        }
    }
    
    public function mailconfirmation(){
        $id=$this->input->get('id');
        $msg="Thank you for registering an account with us, please click on the following link or copy it to the top of your browser: http://kvartirni.ru/new/users/confirm.html?id=$id";
        $mailto=$this->input->get('email');
        mail($mailto,'Account Confirmation - No Reply Message',$msg,'This is an automatically generated email, do not reply');
        echo $mailto;
    }
    
    public function confirmcheck(){
        $id=$this->input->get('id');
        $this->db->where('login',$id);
        $data=array('status'=>1);
        $this->db->update('users',$data);
    }
}
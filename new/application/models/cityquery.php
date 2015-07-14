<?php

class Cityquery extends CI_Model{
    public function loadall(){
        $output="";
        $query=$this->db->get('city');
        foreach($query->result() as $row){
            $county=$row->country; 
            $output=$output."<tr><td>$row->id</td><td>$row->latname</td><td>$row->cityname</td><td>$row->timepoyas</td><td>$row->country</td><td>$row->okato</td>
            <td> <a href=\"/new/city/edit.html?id=$row->id\">Edit</a> <a href=\"/new/city/del.html?id=$row->id\">Delete</a>
            </tr>";
        }
        return $output;
    }   
    
    public function delete(){
        $id=$this->input->get('id');
        $this->db->where('id',$id);
        $this->db->delete('city');
        header('Location: /new/city.html');
    }
    
    public function loadcity(){
        $id=$this->input->get('id');
        $query=$this->db->get_where('city',array('id'=>$id));
        $data=array();
        foreach($query->result() as $row){
            $data=array('latname'=>$row->latname,'cityname'=>$row->cityname,'country'=>$row->country);
        }
        
        return $data;
    }
    
    public function saveedit(){
        $latname=$this->input->post('latname');
        $cityname=$this->input->post('name');
        $country=$this->input->post('country');
        
        $this->db->where('id',$this->input->get('id'));
        $data=array('latname'=>$latname,'cityname'=>$cityname,'country'=>$country);
        $this->db->update('city',$data);
        header('Location:/new/city.html');
    }
}
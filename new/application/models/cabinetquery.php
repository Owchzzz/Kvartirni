<?php

class Cabinetquery extends CI_Model{
    public function load_apartments(){
        $query=$this->db->get('Apartments');
        $count=0;
        $output="";
        foreach($query->result() as $row){
            
            $count++;
            $output.="<li class=\"li_bg_$row->Status\"> <span> <input type=\"checkbox\" class=\"styled\" name=\"$row->ApartmentId\"/> </span> <span> $row->ApartmentId </span> <span> Images Here </span><span> $row->Country <br /> $row->Address </span> <span> <label>".lang('day')."</label><input type=\"text\" name=\"day\" value=\"$row->Day\" /> <label>".lang('night')."</label><input type=\"text\" name=\"night\" value=\"$row->Night\"> <label>".lang('hour')."</label><input type=\"text\" name=\"hour\" value=\"$row->Hour\"></span><span> <a href=\"/new/cabinet/makepremium?id=$row->ApartmentId\">".lang('advertise')."</a> <a href=\"/new/aparts/edit?id=$row->ApartmentId\">".lang('edit')."</a> <a href=\"\">".lang('enable')."</a> <a href=\"/new/cabinet/delete?id=$row->ApartmentId\">".lang('delete')."</a> </span> </li>";
        }
        return $output;
    }
    
    public function makeprem(){
        $id=$this->input->get('id');
        $this->db->where('ApartmentId',$id);
        $data=array('Status'=>1);
        $this->db->update('Apartments',$data);
        $this->output->set_header("HTTP/1.0 200 OK");
    $this->output->set_header("HTTP/1.1 200 OK");
$this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_update).' GMT');
$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
$this->output->set_header("Cache-Control: post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
        redirect('cabinet','refresh');
    }
    
    public function delete(){
        $id=$this->input->get('id');
        $this->db->where('ApartmentId',$id);
        $this->db->delete('Apartments');
        $this->output->set_header("HTTP/1.0 200 OK");
    $this->output->set_header("HTTP/1.1 200 OK");
$this->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s', $last_update).' GMT');
$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
$this->output->set_header("Cache-Control: post-check=0, pre-check=0");
$this->output->set_header("Pragma: no-cache");
        redirect('cabinet','refresh');
    }
}
<?

class Countryquery extends CI_Model{
    public function loadcountryselect(){
        $query = $this->db->get('countries');
        $output = "";
        foreach($query->result() as $row){
            $output=$output.'<option value="'.$row->id.'">'.$row->InternationalName.'</option>';
        }
        return $output;
    }  
    public function loadcountry(){
        $query = $this->db->get('countries');
        $output = "";
        foreach($query->result() as $row){
            $output=$output."<tr><td>$row->id</td><td>$row->name</td><td>$row->InternationalName</td>
            <td><a href=\"/new/country/edit.html?id=$row->id\">Edit</a> <a href=\"/new/country/del.html?id=$row->id\">Delete</a></td>
            </tr>";
        }
        return $output;
    }   
    public function loadcount(){
        $query=$this->db->get_where('countries',array('id'=>$this->input->get('id')));
        
    }
    
    public function savenew(){
        $name=$this->input->post('name');
        $inter=$this->input->post('international');
        $data=array('name'=>$name,'InternationalName'=>$inter);
        $this->db->insert('countries',$data);
        redirect('/country/','refresh');
    }
}

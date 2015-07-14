<?php

class Apartmentquery extends CI_Model{
    public function load_country_select(){
        $query=$this->db->get('countries');
        $select="";
        foreach($query->result() as $row){
            $select.="<option value=\"$row->id\">$row->InternationalName</option>";
        }
        return $select;
    }
    
    public function load_city_select(){
        $query=$this->db->get('city');
        $output="";
        foreach($query->result() as $row){
            $output.="<option value=\"$row->id\">$row->cityname</option>";
        }
        return $output;
    }
    
    public function display_search(){
        $searchdata=array();
        if($this->input->post('cb_tv')){
     
            $searchdata['Tv'] = 1;
        }
        if($this->input->post('cb_conditions')){
          
            $searchdata['AirCon'] = 1;
        }
        if($this->input->post('cb_ref')){
            
            $searchdata['Ref'] = 1;
        }
        if($this->input->post('cb_stove')){
            
            $searchdata['Stove'] = 1;
        }
        if($this->input->post('cb_washing')){
            
            $searchdata['Washing'] = 1;
        }
        if($this->input->post('cb_phone')){
            
            $searchdata['PhoneAvailable'] = 1;
        }
        if($this->input->post('cb_bath')){
            $searchdata['Bath'] = 1;
        }
        if($this->input->post('cb_parking')){
            $searchdata['Parking'] = 1;
        }
        
        if($this->input->post('sel_country')){
            echo 'country '.  $this->input->post('sel_country');
            $searchdata['Country'] = $this->input->post('sel_country');
        }
        
        if($this->input->post('txt_city')){
            echo 'City is '. $this->input->post('txt_city');
            //$this->db->where('City LIKE',  $this->input->post('txt_city'));
            $searchdata['City LIKE'] = $this->input->post('txt_city');
            
        }
        
        if($this->input->post('street')){
            //$this->db->where('District LIKE', $this->input->post('street'));
            $searchdata['District'] = $this->input->post('street');
        }
        
        if($this->input->post('sel_numrooms')){
           // $this->db->where('NumOfRooms',  $this->input->post('sel_numrooms'));
            $searchdata['NumOfRooms'] = $this->input->post('sel_numrooms');
        }
        
        if($this->input->post('txt_pricebefore')){
           // $this->db->where('Day <=',  $this->input->post('txt_pricebefore'));
            $searchdata['Day <='] = $this->input->post('txt_pricebefore');
        }
        if($this->input->post('txt_priceafter')){
           // $this->db->where('Day >=',  $this->input->post('txt_pricebefore'));
            $searchdata['Day >='] = $this->input->post('txt_priceafter');
        }
        foreach($searchdata as $key => $value){
            echo $key;
            echo ' ';
            echo $value;
            echo '<br>';
        }
        $query=$this->db->get_where('Apartments',$searchdata);
        
        $output="";
        if($this->input->get('page')){
            $page=$this->input->get('page');
        }else{
            $page=1;
        }
        $count = 1;
        $posts=1;
        foreach($query->result() as $row){
            
                $posts++;
                $output.="<div class=\"div_cat\"><div class=\"cat_pic\"><a href=\"http://kvartirni.ru/i/pic_big.jpg\" rel=\"colorbox2\"><img src=\"http://kvartirni.ru/i/pic_cat.jpg\" alt=\"\" /></a>";
                $output.="<p><a href=\"#\">".lang('more_photos')."</a></p><span>&nbsp;;</span> </div>";
                $output.="<div class=\"info_cat\"><p>".lang('day')." $row->Day $row->Currency.<br />".lang('hour')."$row->Hour $row->Currency.</p>";
                $output.="<h3><a href=\"#\">1 bedroom apartment for rent</a></h3><p class=\"cat_address\">$row->Address<br />$row->District";
                $output.="<a href=\"#\" class=\"link_map\"><?php echo lang('show_on_map'); ?></a><p class=\"p_id\">ID $row->ApartmentId</p><p class=\"p_phone\">$row->Tell</p>";
                $output.="<p>$row->Description</p><a href=\"#\" class=\"link_more\">more</a> </div> </div>";
            
        }
        
        return $output;
        
    }
    
    public function save_new_apart(){
        
        
        
        $totalnums = $totalcallafter = 0;
        $addtel="";
        $callafter="";
        foreach($_POST as $key => $value){
            if(strpos($key,'telnum') !== false){
                echo ' telnum found '.$key;
                $totalnums++;
                if(strpos($key,'main') !== false){
                    echo ' main';
                    $data['Tell']=$value;
                }
                else{
                    $addtel .=",". $value;
                }
            }
            if(strpos($key,'callafter') !== false){
                $totalcallafter++;
                echo 'callafter found '.$key. ' '.$key;
                if(strpos($key,'main') !== false){
                    echo ' main';
                    $data['callafter'] = $value;
                }else{
                    $callafter.=",".$value;
                }
            }
        }
        
        $data['callafter'] = $callafter;
        $data['addtell'] = $addtel;
        $data['ICQ']=$this->input->post('cb_icq');
        $data['Skype'] = $this->input->post('cb_skype');
        $data['OwnerName'] = $this->input->post('OwnerName');
        $data['Country'] = $this->input->post('country');
        $data['City'] = $this->input->post('city');
        $data['Metro'] = $this->input->post('metro');
        $data['District'] = $this->input->post('district');
        $data['Address'] = $this->input->post('address');
        $data['NumOfRooms'] = $this->input->post('numrooms');
        $data['AreaOfApartment'] = $this->input->post('area');
        $data['Floors'] = $this->input->post('floor');
        $data['TotalFloors'] = $this->input->post('totalfloors');
        $data['Sleeps'] = $this->input->post('sleeps');
        $data['Currency'] = $this->input->post('currency');
        $data['Day'] = $this->input->post('day');
        $data['Night'] = $this->input->post('night');
        $data['Hour'] = $this->input->post('hour');
        $data['MaxPeople'] = $this->input->post('maxpeople');
        $data['MinHours'] = $this->input->post('minorders');
        $data['Pledge'] = $this->input->post('pledge');
        $data['Balcony'] = $this->input->post('balcony');
        $data['Tv'] = $this->input->post('tv');
        $data['Internet'] = $this->input->post('internet');
        $data['AirCon'] = $this->input->post('air_con');
        $data['Ref'] = $this->input->post('refrigerator');
        $data['Stove'] = $this->input->post('stove');
        $data['Microwave'] = $this->input->post('microwave');
        $data['Washing'] = $this->input->post('washing');
        $data['PhoneAvailable'] = $this->input->post('phoneavailable');
        $data['Bath'] = $this->input->post('bath');
        $data['Parking'] = $this->input->post('parking');
        $data['Booking'] = $this->input->post('booking');
        $data['Description'] = $this->input->post('desc');
        $data['ConditionsOrder'] = $this->input->post('conditions_order');
        $data['ConditionsAccomodation'] = $this->input->post('conditions_accom');
        $data['Status'] = 3;
        $this->db->insert('Apartments',$data);
        $user_id_apart= $this->db->insert_id();
                $baseurl=$_SERVER['DOCUMENT_ROOT'];
                $path=$baseurl.'/new/uploads/'.$user_id_apart.'';
                $location  = "$baseurl" ;
                if (!is_dir ( $path )) {
                    mkdir ($path, 0777, true );
                }
                
            $this->load->library('MY_Upload');
            
            $config['upload_path'] = 'uploads/'.$user_id_apart.'/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000';
            $config['max_width']  = '1624';
            $config['max_height']  = '1768';
            echo $config['upload_path'];
            $this->upload->initialize($config);
            echo 'INITIALIZING UPLOAD';
            foreach($_FILES as $field => $file)
            {
                $photodata=array();
                echo $field;
                // No problems with the file
                
                    // So lets upload
                    if ($this->upload->do_multi_upload("files"))
                    {
                        $data = $this->upload->data();
                        echo 'success';
                        echo $data;
                    }
                    else
                    {
                        $errors = $this->upload->display_errors();
                        echo 'errors';
                        echo $errors;
                    }
                
            }
        
       
        
        redirect('/aparts/savesuccess/','refresh');
    }
    
    
    public function save_edit_apart(){
        
        
        $id=$this->input->get('id');
        $totalnums = $totalcallafter = 0;
        $addtel="";
        $callafter="";
        foreach($_POST as $key => $value){
            if(strpos($key,'telnum') !== false){
                echo ' telnum found '.$key;
                $totalnums++;
                if(strpos($key,'main') !== false){
                    echo ' main';
                    $data['Tell']=$value;
                }
                else{
                    $addtel .=$value.",";
                }
            }
            if(strpos($key,'callafter') !== false){
                $totalcallafter++;
                echo 'callafter found '.$key. ' '.$key;
                if(strpos($key,'main') !== false){
                    echo ' main';
                    $data['callafter'] = $value;
                }else{
                    $callafter.=$value.",";
                }
            }
        }
        
        $data['callafter'] = $callafter;
        $data['addtell'] = $addtel;
        $data['ICQ']=$this->input->post('cb_icq');
        $data['Skype'] = $this->input->post('cb_skype');
        $data['OwnerName'] = $this->input->post('OwnerName');
        $data['Country'] = $this->input->post('country');
        if($this->input->post('city') != "nochange"){
        $data['City'] = $this->input->post('city');}
        $data['Metro'] = $this->input->post('metro');
        $data['District'] = $this->input->post('district');
        $data['Address'] = $this->input->post('address');
        $data['NumOfRooms'] = $this->input->post('numrooms');
        $data['AreaOfApartment'] = $this->input->post('area');
        $data['Floors'] = $this->input->post('floor');
        $data['TotalFloors'] = $this->input->post('totalfloors');
        $data['Sleeps'] = $this->input->post('sleeps');
        if($this->input->post('currency') != "nochange"){
        $data['Currency'] = $this->input->post('currency');}
        $data['Day'] = $this->input->post('day');
        $data['Night'] = $this->input->post('night');
        $data['Hour'] = $this->input->post('hour');
        $data['MaxPeople'] = $this->input->post('maxpeople');
        $data['MinHours'] = $this->input->post('minorders');
        $data['Pledge'] = $this->input->post('pledge');
        $data['Balcony'] = $this->input->post('balcony');
        $data['Tv'] = $this->input->post('tv');
        $data['Internet'] = $this->input->post('internet');
        $data['AirCon'] = $this->input->post('air_con');
        $data['Ref'] = $this->input->post('refrigerator');
        $data['Stove'] = $this->input->post('stove');
        $data['Microwave'] = $this->input->post('microwave');
        $data['Washing'] = $this->input->post('washing');
        $data['PhoneAvailable'] = $this->input->post('phoneavailable');
        $data['Bath'] = $this->input->post('bath');
        $data['Parking'] = $this->input->post('parking');
        $data['Booking'] = $this->input->post('booking');
        $data['Description'] = $this->input->post('desc');
        $data['ConditionsOrder'] = $this->input->post('conditions_order');
        $data['ConditionsAccomodation'] = $this->input->post('conditions_accom');
       
        $this->db->where('ApartmentId',$id);
        $this->db->update('Apartments',$data);
        $user_id_apart= $this->db->insert_id();
                $baseurl=$_SERVER['DOCUMENT_ROOT'];
                $path=$baseurl.'/new/uploads/'.$user_id_apart.'';
                $location  = "$baseurl" ;
                if (!is_dir ( $path )) {
                    mkdir ($path, 0777, true );
                }
                
            $this->load->library('MY_Upload');
            
            $config['upload_path'] = 'uploads/'.$user_id_apart.'/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '1000';
            $config['max_width']  = '1624';
            $config['max_height']  = '1768';
            echo $config['upload_path'];
            $this->upload->initialize($config);
            echo 'INITIALIZING UPLOAD';
            foreach($_FILES as $field => $file)
            {
                $photodata=array();
                echo $field;
                // No problems with the file
                
                    // So lets upload
                    if ($this->upload->do_multi_upload("files"))
                    {
                        $data = $this->upload->data();
                        echo 'success';
                        echo $data;
                    }
                    else
                    {
                        $errors = $this->upload->display_errors();
                        echo 'errors';
                        echo $errors;
                    }
                
            }
        
       
        
        redirect('/aparts/savesuccess/','refresh');
    }
    
    
    public function load_country(){
        $apid=$this->input->get('id');
        $this->db->where('ApartmentId',$apid);
        $query=$this->db->get('Apartments',1,0);
        $data=array();
        foreach($query->result() as $row){
            $data['ApartmentId'] = $apid;
            $data['OwnerName'] = $row->OwnerName;
            $data['Tell'] = $row->Tell;
            $data['addtell'] = $row->addtell;
            $data['Country'] = $row->Country;
            
            $data['City'] = $row->City;
                    $data['District'] = $row->District;
                    $data['Address'] = $row->Address;
                    $data['NumOfRooms'] = $row->NumOfRooms;
                    $data['AreaOfApartment'] = $row->AreaOfApartment;
                    $data['Floors'] = $row->Floors;
                    $data['Sleeps'] = $row->Sleeps;
                    
                    $data['Currency'] = $row->Currency;
                            $data['Day'] = $row->Day;
                            $data['Night'] = $row->Night;
                            $data['Hour'] = $row->Hour;
                            $data['MaxPeople'] = $row->MaxPeople;
                            $data['MinHours'] = $row->MinHours;
                            $data['Pledge'] = $row->Pledge;
                            $data['Balcony'] = $row->Balcony;
                           
                            $data['Equipments'] = $row->Equipments;
                            $data['Description'] = $row->Description;
                            $data['ConditionsOrder'] = $row->ConditionsOrder;
                            $data['ConditionsAccomodation'] = $row->ConditionsAccomodation;
                            $data['Skype'] = $row->Skype;
                            $data['ICQ'] = $row->ICQ;
                            $data['callafter'] = $row->callafter;
                            $data['addtell'] = $row->addtell;
                            $data['Metro'] = $row->Metro;
                            $data['TotalFloors'] = $row->TotalFloors;
                            $data['Tv'] = $row->Tv;
                            $data['Internet'] = $row->Internet;
                            $data['AirCon'] = $row->AirCon;
                            $data['Ref'] = $row->Ref;
                            $data['Stove'] = $row->Stove;
                            $data['Microwave'] = $row->Microwave;
                            $data['Washing'] = $row->Washing;
                            $data['PhoneAvailable'] = $row->PhoneAvailable;
                            $data['Bath'] = $row->Bath;
                            $data['Parking'] = $row->Parking;
                            $data['Booking'] = $row->Booking;
                            $data['callafter'] = $row->callafter;
                            $data['addtell'] = $row->addtell;
                    
                 $this->db->where('id',$data['Country']);
                 $query=$this->db->get('countries',1,0);
                 $cname="";
                 foreach($query->result() as $row){
                     $cname = $row->InternationalName;
                 }
                 
                 $data['CountryName'] = $cname;
        }
        
        return $data;
    
    }
    
    public function load_tel_nums($tell,$callafter,$addtell){
        $output="";
        $totalNums=0;
         $callafterarr=array();
        $callafterarr=explode(',',$callafter);
        if($tell != null || $tell != ""){
            $output="<div id=\"$totalNums\"><input type=\"hidden\" name=\"maincallaffter\" value=\"$callafterarr[$totalNums]\"/><input type=\"hidden\" name=\"maintelnum\" value=\"$tell\"/><br clear=\"left\"><label class=\"lab_dobav_3\">Main</label><label class=\"lab_dobav_2\">$tell</label><a href=\"javascript:;\" onClick=\"delNumMain('#$totalNums');\" class=\"del_phone\" >Delete Number</a> </div><br clear=\"left\"><br>";
            $totalNums++;
        }
        
       $count=0;
        foreach(explode(',',$addtell) as $field => $value){
            if($value != null && $value != "" && $value != " " && strlen($value) > 4){
            $output.="<div id=\"$totalNums\"><input type=\"hidden\" name=\"callafter$totalNums\" value=\"$callafterarr[$count]\"/><input type=\"hidden\" name=\"telnum$totalNums\" value=\"$value\" /><br clear=\"left\"><label class=\"lab_dobav_3\">Additional</label><label class=\"lab_dobav_2\">$value</label><a href=\"javascript:;\" onClick=\"delNum('#$totalNums');\" class=\"del_phone\" >Delete Number</a> </div><br clear=\"left\"><br> ";
            }
            $count++;
            $totalNums++;
            
            
        }
        $data=  array('telNums'=>$output,'totalNums'=>$totalNums);
        return $data;
    }
    
    public function list_apartments(){
        $query=$this->db->get('Apartments');
        $output="";
        if($this->input->get('page')){
            $page=$this->input->get('page');
        }else{
            $page=1;
        }
        $count = 1;
        $posts=1;
        foreach($query->result() as $row){
            
                $posts++;
                $output.="<div class=\"div_cat\"><div class=\"cat_pic\"><a href=\"http://kvartirni.ru/i/pic_big.jpg\" rel=\"colorbox2\"><img src=\"http://kvartirni.ru/i/pic_cat.jpg\" alt=\"\" /></a>";
                $output.="<p><a href=\"#\">".lang('more_photos')."</a></p><span>&nbsp;;</span> </div>";
                $output.="<div class=\"info_cat\"><p>".lang('day')." $row->Day $row->Currency.<br />".lang('hour')."$row->Hour $row->Currency.</p>";
                $output.="<h3><a href=\"#\">1 bedroom apartment for rent</a></h3><p class=\"cat_address\">$row->Address<br />$row->District";
                $output.="<a href=\"#\" class=\"link_map\"><?php echo lang('show_on_map'); ?></a><p class=\"p_id\">ID $row->ApartmentId</p><p class=\"p_phone\">$row->Tell</p>";
                $output.="<p>$row->Description</p><a href=\"#\" class=\"link_more\">more</a> </div> </div>";
            
        }
        
        return $output;
    }
    
}
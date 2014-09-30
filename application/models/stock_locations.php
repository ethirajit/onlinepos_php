<?php
class Stock_locations extends CI_Model
{
    function exists($location_name='')
    {
        $this->db->from('stock_locations');  
        $this->db->where('location_name',$location_name);
        $query = $this->db->get();
        
        return ($query->num_rows()==1);
    }
    
    function get_all($limit=10000, $offset=0)
    {
        $this->db->from('stock_locations');
        $this->db->limit($limit);
        $this->db->offset($offset);
        return $this->db->get();
    }
    
    function get_location_names() 
    {
    	$this->db->select('location_name');
    	$this->db->from('stock_locations');
    	$this->db->where('deleted', 0);
    	return $this->db->get();
    }
    
    function concat_location_names() 
    {
    	$this->db->select('GROUP_CONCAT(location_name SEPARATOR\',\') AS location_names', FALSE);
    	$this->db->from('stock_locations');
    	$this->db->where('deleted', 0);
    	return $this->db->get()->row();
    }
    
    function get_undeleted_all($limit=10000, $offset=0)
    {
        $this->db->from('stock_locations');
        $this->db->where('deleted',0);
        $this->db->limit($limit);
        $this->db->offset($offset);
        return $this->db->get();
    }
    
    function get_location_id($location_name)
    {
        $this->db->from('stock_locations');
        $this->db->where('deleted',0);
        $this->db->where('location_name',$location_name);
        return $this->db->get()->row()->location_id;
    }
    
    function get_location_name($location_id) 
    {
    	$this->db->from('stock_locations');
    	$this->db->where('deleted',0);
    	$this->db->where('location_id',$location_id);
    	return $this->db->get()->row()->location_name;
    }
    
    function array_save($stock_locations)
    {
        $location_db = $this->get_all()->result_array();     
        //Delete all in db
        $this->db->trans_start();
        $location_ids=array();
        foreach($location_db as $db)
        {
            array_push($location_ids,$db['location_id']);            
        }
        if (sizeof($location_ids) > 0) 
        {
	        $this->db->where_in('location_id', $location_ids);
	        $this->db->update('stock_locations',array('deleted'=>1));
	        $this->db->trans_complete();
        }
        
        $location_db = $this->get_all()->result_array();
        //Update the stock location
        $this->db->trans_start();
        foreach ($stock_locations as $location)
        {
            $to_create = true;
            foreach($location_db as $db)
            {
                if($db['location_name'] == $location)
                {
                    if($db['deleted'] == 1)
                    {
                        $this->db->where('location_id', $db['location_id']);
                        
                        $this->db->update('stock_locations',array('location_name'=>$db['location_name'],'deleted'=>0));
                    }
                    $to_create = false;
                    break;
                }
            }
            
            if($to_create)
            {
                $location_data = array('location_name'=>$location,'deleted'=>0);
                $this->db->insert('stock_locations',$location_data);
            }
        }
        $this->db->trans_complete();
        return true;            
    }
}
?>

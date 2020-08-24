<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subjects extends CI_Model
{
    public function add($data)
    {
        $query = $this->db->insert('subjects', $data);
        return $query;
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('subjects', $data);
        
        return $query;
    }

    public function get_code($sub_code = null)
    {
        if($sub_code==null){
            $this->db->select('sub_code');
            $query = $this->db->get('subjects');
            return $query->result_array(); 
        }else{
        $query = $this->db->get_where('subjects', array('sub_code' => $sub_code));
        return $query->row_array();
        }
    }

    public function get($id = null)
    {
        if($id==null){
            $query = $this->db->get('subjects');
            return $query->result_array(); 
        }else{
           $query = $this->db->get_where('subjects', array('id' => $id));
            return $query->row_array(); 
        }
    }
}

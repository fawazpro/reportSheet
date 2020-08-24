<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Variables extends CI_Model
{
    public function add($data)
    {
        $query = $this->db->insert('variables', $data);
        return $query;
    }

    public function upd($id, $data)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('variables', $data);
        
        return $query;
    }

    // public function upd($id, $data)
    // {
    //     $query = $this->db->get_where('variables', array('id' => $id));
    //     return $query->result_array();
    // }

    public function get($id = null)
    {
        if($id==null){
            $query = $this->db->get('variables');
            return $query->result_array(); 
        }else{
           $query = $this->db->get_where('variables', array('id' => $id));
            return $query->row_array(); 
        }
    }
}

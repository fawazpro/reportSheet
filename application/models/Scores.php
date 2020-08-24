<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scores extends CI_Model
{
    public function add($data)
    {
        $query = $this->db->insert('gen_score', $data);
        return $query;
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('gen_score', $data);
        
        return $query;
    }

    public function updscr($value, $score)
    {
        $this->db->where('value', $value);
        $query = $this->db->update('gen_score', array('score' => $score));
        
        return $query;
    }

    public function get($class)
    {
        $query = $this->db->get_where('gen_score', array('class' => $class));
        return $query->result_array();
    }

    public function get_stud($id = null)
    {
        if($id==null){
            $query = $this->db->get('gen_score');
            return $query->result_array(); 
        }else{
           $query = $this->db->get_where('gen_score', array('id' => $id));
            return $query->row_array(); 
        }
    }
}

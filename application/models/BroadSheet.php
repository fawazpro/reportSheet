<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BroadSheet extends CI_Model
{
    public function add($data)
    {
        $query = $this->db->insert('broadsheet', $data);
        return $query;
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('broadsheet', $data);
        
        return $query;
    }

    public function get($class)
    {
        $query = $this->db->get_where('broadsheet', array('class' => $class));
        return $query->result_array();
    }

    public function get_report_class($class)
    {
        $this->db->select('*');
        $this->db->from('broadsheet');
        $this->db->join('indiv_students', 'indiv_students.students_id = broadsheet.id');
        $this->db->where('class', $class);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_max($subject, $class)
    {
        $this->db->select("(SELECT MAX($subject) WHERE class = '$class') AS max", FALSE);
        $query = $this->db->get('broadsheet');
        return $query->row_array()['max'];
    }

    public function get_avg($subject, $class)
    {
        $this->db->select("(SELECT AVG($subject) WHERE class = '$class') AS avg", FALSE);
        $query = $this->db->get('broadsheet');
        return $query->row_array()['avg'];
    }

    public function get_stud($id = null)
    {
        if($id==null){
            $query = $this->db->get('broadsheet');
            return $query->result_array(); 
        }else{
           $query = $this->db->get_where('broadsheet', array('id' => $id));
            return $query->row_array(); 
        }
    }
}

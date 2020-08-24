<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Students extends CI_Model
{
    public function check($uname, $pass)
    {
        $query = $this->db->get_where('users', array('uname' => $uname, 'pword' => $pass));
        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function add($data){
        $query1 = $this->db->insert('students', $data);
        $query = $this->db->insert('broadsheet', ['name' => $data['fname'], 'class' => $data['class']]);
        return $query;
    }

    public function indiv_add($data){
        $query= $this->db->insert('indiv_students', $data);
        return $query;
    }

    public function indiv_upd($id, $data){
        $this->db->where('students_id', $id);
        $query= $this->db->update('indiv_students', $data);
        return $query;
    }

    public function indiv_get($id){
        $query= $this->db->get_where('indiv_students', array('id' => $id));
        return $query->row_array();
    }

    public function select($id = null){
        if($id != null){
            $query = $this->db->get_where('students', array('id' => $id));
            return $query->row_array();
        }else{
            $this->db->select('id, fname');
            $query = $this->db->get('students');
            return $query->result_array();
        }
    }
}

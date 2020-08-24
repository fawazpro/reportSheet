<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model
{
    public function check($uname, $pass)
    {
        $query = $this->db->get_where('users', array('uname' => $uname, 'pword' => $pass));
        if($query->num_rows() == 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function level($uname)
    {
        $query = $this->db->get_where('users', array('uname' => $uname));
        return $query->row_array();
    }
}
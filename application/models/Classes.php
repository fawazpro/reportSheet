<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classes extends CI_Model
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

    public function add($data)
    {
        $query = $this->db->insert('classes', $data);
        return $query;
    }
}

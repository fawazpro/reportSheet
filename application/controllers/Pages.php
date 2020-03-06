<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function index()
    {
        $var = '';
        $data = [
            '' => $var
        ];
        $this->load->view('login');
    }

    public function dashboard()
    {
        $uname = $this->input->post('uname');
        $pass = $this->input->post('pword');
        if($this->users->check($uname, $pass)){
            $this->load->view('dashboard');
        }else{
            $this->load->view('login');
        }
        
    }
}

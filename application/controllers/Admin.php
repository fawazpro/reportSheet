<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        if ($this->session->logged_in) {
            $this->dashboard();
        } else {
            $this->signin();
        }
    }

    public function dashboard($err = '')
    {
        if ($this->session->level == 1) {
            $data = [
                'nos' => 2,
                'nou' => 4,
                'noc' => 3,
                'vars' => $this->variables->get(),
            ];
            $fdata = [
                'err' => $err
            ];
            $this->load->view('ui/inc/header');
            $this->load->view('ui/inc/sidebar');
            $this->load->view('ui/dashboard', $data);
            $this->load->view('ui/inc/rightbar');
            $this->load->view('ui/inc/footer', $fdata);
        } else {

            $data = [
                'subjects' => $this->subjects->get()
            ];
            $this->load->view('ui/inc/header');
            $this->load->view('ui/inc/sidebar2');
            $this->load->view('ui/scores', $data);
            $this->load->view('ui/inc/rightbar');
            $this->load->view('ui/inc/footer');
        }
    }

    public function signin()
    {
        $this->load->view('ui/index');
    }

    public function signout()
    {
        $this->session->sess_destroy();
        $this->load->view('ui/index');;
    }

    public function login()
    {
        $uname = $this->input->post('uname');
        $pass = md5($this->input->post('pword'));

        if ($this->users->check($uname, $pass)) {
            $sdata = array(
                'level' => $this->users->level($uname)['level'],
                'subject'  => '',
                'uname'     => $uname,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($sdata);
            $this->dashboard();
        } else {
            $this->index();
        }
    }

    public function add_student()
    {
        if ($this->session->level == 1) {
            $data = [
                'list' => $this->broadsheet->get_stud()
            ];

            $fdata = [
                'err' => ''
            ];

            $this->load->view('ui/inc/header');
            $this->load->view('ui/inc/sidebar');
            $this->load->view('ui/add_student', $data);
            $this->load->view('ui/inc/rightbar');
            $this->load->view('ui/inc/footer');
        } else {
            $this->index();
        }
    }

    public function studupdate($err = '')
    {
        if ($this->session->logged_in) {
            if ($this->session->level == 1) {
                $data = [
                    'studs' => $this->broadsheet->get_stud()
                ];

                $fdata = [
                    'err' => $err
                ];

                $this->load->view('ui/inc/header');
                $this->load->view('ui/inc/sidebar');
                $this->load->view('ui/upd_student', $data);
                $this->load->view('ui/inc/rightbar');
                $this->load->view('ui/inc/footer', $fdata);
            } else {
                $data = [
                    'studs' => $this->broadsheet->get_stud()
                ];

                $fdata = [
                    'err' => $err
                ];

                $this->load->view('ui/inc/header');
                $this->load->view('ui/inc/sidebar2');
                $this->load->view('ui/upd_student', $data);
                $this->load->view('ui/inc/rightbar');
                $this->load->view('ui/inc/footer', $fdata);
            }
        } else {
            $this->index();
        }
    }

    public function addStudent()
    {
        if ($this->session->logged_in) {
            $data = [
                'fname' => $this->input->post('name'),
                'dob' => $this->input->post('dob'),
                'class' => $this->input->post('class'),
                'phone' => $this->input->post('phone')
            ];

            if ($this->students->add($data)) {
                $data = [
                    'list' => $this->broadsheet->get_stud()
                ];

                $fdata = [
                    'err' => 'Last operation was Successfull'
                ];

                $this->load->view('ui/inc/header');
                $this->load->view('ui/inc/sidebar');
                $this->load->view('ui/add_student', $data);
                $this->load->view('ui/inc/rightbar');
                $this->load->view('ui/inc/footer', $fdata);
            } else {
                $data = [
                    'list' => $this->broadsheet->get_stud()
                ];

                $fdata = [
                    'err' => 'Last operation failed'
                ];

                $this->load->view('ui/inc/header');
                $this->load->view('ui/inc/sidebar');
                $this->load->view('ui/add_student', $data);
                $this->load->view('ui/inc/rightbar');
                $this->load->view('ui/inc/footer', $fdata);
            }
        } else {
            $this->index();
        }
    }

    public function updstudent()
    {
        if ($this->session->logged_in) {

            $config['upload_path']          = './assets/students/img/';
            $config['allowed_types']        = 'png|gif|svg|jpg';
            $config['max_size']             = 500;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('stud_photo') == TRUE) {

                $stud_photo = $this->upload->data('file_name');

                $data = [
                    'term' => $this->variables->get(1)['value'],
                    'students_id' => $this->input->post('id'),
                    'student_photo' => $stud_photo,
                    'present' => $this->input->post('ntp'),
                    'absent' => intval($this->variables->get(2)['value']) - intval($this->input->post('ntp')),
                    // 't_comment' => $this->input->post('tcomment'),
                    'p_comment' => $this->input->post('pcomment')
                ];

                if ($this->students->indiv_add($data)) {
                    $err = 'Successfull';
                    $this->studupdate($err);
                } else {
                    $err = 'Failed';
                    $this->studupdate($err);
                }
            } else {
                $err = 'Upload Failed';
                $this->studupdate($err);
            }
        } else {
            $this->index();
        }
    }

    public function updstudentdata()
    {
        if ($this->session->logged_in) {

            $id = $this->input->post('id');

            $data = [
                'term' => $this->variables->get(1)['value'],
                'present' => $this->input->post('ntp'),
                'absent' => intval($this->variables->get(2)['value']) - intval($this->input->post('ntp')),
                'p_comment' => $this->input->post('pcomment')
            ];

            if ($this->students->indiv_upd($id, $data)) {
                $err = 'Successfull';
                $this->studupdate($err);
            } else {
                $err = 'Failed';
                $this->studupdate($err);
            }
        } else {
            $this->index();
        }
    }

    public function add_class()
    {
        if ($this->session->level == 1) {
            $data = [
                'err' => ''
            ];
            $this->load->view('add_class', $data);
        } else {
            $this->index();
        }
    }

    public function addClass()
    {
        if ($this->session->level == 1) {
            $data = [
                'name' => $this->input->post('name'),
                'teacher' => $this->input->post('teacher'),
                'total' => $this->input->post('total'),
                'phone' => $this->input->post('phone')
            ];

            if ($this->classes->add($data)) {
                $data = [
                    'err' => 'Successfull'
                ];
                $this->load->view('add_class', $data);
            } else {
                $data = [
                    'err' => 'Failed'
                ];
                $this->load->view('add_class', $data);
            }
        } else {
            $this->index();
        }
    }

    public function scores()
    {
        if ($this->session->logged_in) {
            if ($this->session->level == 1) {
                $data = [
                    'subjects' => $this->subjects->get()
                ];
                $this->load->view('ui/inc/header');
                $this->load->view('ui/inc/sidebar');
                $this->load->view('ui/scores', $data);
                $this->load->view('ui/inc/rightbar');
                $this->load->view('ui/inc/footer');
            } else {
                $data = [
                    'subjects' => $this->subjects->get()
                ];
                $this->load->view('ui/inc/header');
                $this->load->view('ui/inc/sidebar2');
                $this->load->view('ui/scores', $data);
                $this->load->view('ui/inc/rightbar');
                $this->load->view('ui/inc/footer');
            }
        } else {
            $this->index();
        }
    }

    public function editboard()
    {
        $class = $this->input->post('class');
        $subject = $this->input->post('subject');

        $data = [
            'list' => $this->broadsheet->get($class),
            'subj' => $subject,
            'subject' => $this->subjects->get_code($subject)['subject'],
            'class' => $class,
            'err' => ''
        ];

        $sdata = array(
            'subject'  => $subject
        );

        $this->session->set_userdata($sdata);

        // $this->load->view('editboard', $data);


        $this->load->view('ui/inc/header');
        $this->load->view('ui/inc/sidebar');
        $this->load->view('ui/editboard', $data);
        $this->load->view('ui/inc/rightbar');
        $this->load->view('ui/inc/footer');
    }

    public function example()
    {
        global $s;
        $subj = $_SESSION['subject'];
        $input = filter_input_array(INPUT_POST);

        if ($input['action'] === 'edit') {
            $id = $input['id'];
            if (isset($input['subjCAT'])) {
                $data = [
                    $subj . '_cat' => $input['subjCAT']
                ];
                $res = $this->broadsheet->edit($id, $data);
            } else if (isset($input['subjEXAM'])) {
                $data = [
                    $subj . '_exam' => $input['subjEXAM']
                ];
                $res = $this->broadsheet->edit($id, $data);
            }
            echo $res;
        } else if ($input['action'] === 'delete') {
            echo 'delete';
        } else if ($input['action'] === 'restore') {
            echo 'restore';
        }
        echo json_encode($input);
    }

    public function test()
    {
        $names = $this->students->select();
        $output = [];
        foreach ($names as $name) {
            $id = $name['id'];
            $fname = $name['fname'];
            $output[$fname] = "det/" . $id;
            // array_push($output, $fname);
            // $output = $output."\"$fname\"".'\n';
        }
        // echo $output;
        echo json_encode($output);
    }

    public function reports()
    {
        if ($this->session->level == 1) {
            $data = [
                'studs' => $this->broadsheet->get_stud()
            ];
            $this->load->view('ui/inc/header');
            $this->load->view('ui/inc/sidebar');
            $this->load->view('ui/reportsheet', $data);
            $this->load->view('ui/inc/rightbar');
            $this->load->view('ui/inc/footer');
        } else {
            $this->index();
        }
    }

    public function reportsingle()
    {
        if ($this->session->level == 1) {
            $id = $this->input->post('id');
            $data = [
                'info' => $this->broadsheet->get_stud($id)
            ];
            $this->load->view('reportsheet', $data);
            $this->load->view('ui/inc/footer');
        } else {
            $this->index();
        }
    }

    private function updScores($class)
    {
        foreach ($this->subjects->get_code() as $subject) {
            $subjects[]= $subject['sub_code'];
        }

        foreach ($subjects as $subj) {
            $score = $this->broadsheet->get_avg($subj.'_total', $class);
            $this->scores->updscr($subj.'_avg', $score);

            $score = $this->broadsheet->get_max($subj.'_total', $class);
            $this->scores->updscr($subj.'_max', $score);
        }
    }

    public function reportclass()
    {
        if ($this->session->level == 1) {
            $scrs = [];
            $class = $this->input->post('class');
            $this->updScores($class);

            foreach ($this->scores->get($class) as $score) {
                $scrs[$score['value']] = $score['score'];
                // $scores = array_push($temp);
                // $scores = $this->scores->get($class);
            }
            $data = [
                'studs' => $this->broadsheet->get_report_class($class),
                'score' => $scrs
            ];
            $this->load->view('reportsheetclass', $data);
            $this->load->view('ui/inc/footer');
        } else {
            $this->index();
        }
    }

    public function blank()
    {
        $data = [
            'subjects' => $this->subjects->get()
        ];
        $this->load->view('ui/inc/header');
        $this->load->view('ui/inc/sidebar');
        $this->load->view('ui/blank', $data);
        $this->load->view('ui/inc/rightbar');
        $this->load->view('ui/inc/footer');
    }

    public function varupdate()
    {
        if ($this->session->level == 1) {
            $id = $this->input->post('id');
            $data = [
                'value' => $this->input->post('value')
            ];
            if ($this->variables->upd($id, $data)) {
                $this->dashboard('Variable update successful');
            } else {
                $this->dashboard('Variable update failed');
            }
        } else {
            $this->index();
        }
    }
}

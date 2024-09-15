<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utility');
        $this->load->helper('user');
        $this->load->model('content_model');
    }

    public function index()
    {

        $this->load->view('layouts/header');
        $this->load->view('course/index');
        $this->load->view('layouts/footer');
    }
    public function register()
    {

        $this->load->view('layouts/header');
        $this->load->view('course/register');
        $this->load->view('layouts/footer');
    }
    public function document()
    {

        $this->load->view('layouts/header');
        $this->load->view('course/document');
        $this->load->view('layouts/footer');
    }
    public function ep()
    {
        if (get_user_login()->id == '') {
            redirect('course');
        }

        $id = get_user_login()->id;
        $data['id'] = $id;
        $data['username'] = get_user_login()->username;

        // print_r(get_user_login());
        // $params = array('id' => $id);
        // $res = $this->content_model->profile($params);
        
        // $data['member'] = $res->data[0];

        $this->load->view('layouts/header');
        $this->load->view('course/ep', $data);
        $this->load->view('layouts/footer');
    }

    public function ep_start()
    {

        $this->load->view('layouts/header');
        $this->load->view('course/ep_start');
        $this->load->view('layouts/footer');
    }

    public function ep_end()
    {

        $this->load->view('layouts/header');
        $this->load->view('course/ep_end');
        $this->load->view('layouts/footer');
    }

    public function detail($id = '')
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('knowledge/detail', $data);
        $this->load->view('layouts/footer');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $this->load->model('content_model');
        $params = array('content_type' => '0', 'cate_id' => '2', 'page_size' => 16);
        $data['banner1'] = $this->content_model->get_banner($params);

        $this->load->model('content_model');
        $params = array('content_type' => '0', 'cate_id' => '3', 'page_size' => 16);
        $data['banner2'] = $this->content_model->get_banner($params);

        $this->load->model('content_model');
        $params = array('content_type' => '10', 'page_size' => 20);
        $data['banner3'] = $this->content_model->get_content($params);

        // print "<pre>";
        // print_r($data);
        // print "</pre>";

        $this->load->view('layouts/header');
        $this->load->view('about/index', $data);
        $this->load->view('layouts/footer');
    }
}

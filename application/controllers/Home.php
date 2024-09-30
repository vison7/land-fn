<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->model('content_model');
        $params = array('content_type' => '1',  'page_size' => 15);
        $data['cases'] = $this->content_model->get_content($params);


        // $params = array('cate_id' => '1','page_size' => 6);
        // $data['temple1'] = $this->content_model->get_temple($params);

        // $params = array('cate_id' => '2','page_size' => 6,'page_no'=>1);
        // $data['temple2'] = $this->content_model->get_temple($params);

        // $params = array('cate_id' => '3','page_size' => 6,'page_no'=>1);
        // $data['temple3'] = $this->content_model->get_temple($params);

        // $params = array('content_type' => '2','page_size' => 6,'page_no'=>1);
        // $data['volunteer'] = $this->content_model->about_volunteer($params);

        $this->load->view('layouts/header');
        $this->load->view('home/index', $data);
        $this->load->view('layouts/footer');
    }
}

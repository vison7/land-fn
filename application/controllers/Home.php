<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->model('content_model');
        $params = array('content_type' => '1',  'page_size' => 8,'is_status'=>'approved');
        $data['cases'] = $this->content_model->get_content($params);

        $this->load->model('content_model');
        $params = array('content_type' => '2',  'page_size' => 10 , 'is_status'=>'publish');
        $data['faq'] = $this->content_model->get_content($params);

        $params = array('content_type' => '1', 'cate_id' => '1', 'page_size' => 15 ,'old'=>"asc");
        $data['banner1'] = $this->content_model->get_banner($params);

        $params = array('content_type' => '1', 'cate_id' => '2', 'page_size' => 15,'old'=>"asc");
        $data['banner2'] = $this->content_model->get_banner($params);


        $this->load->view('layouts/header');
        $this->load->view('home/index', $data);
        $this->load->view('layouts/footer');
    }
}

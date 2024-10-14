<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('utility');
        $this->load->model('content_model');
    }

    public function index()
    {
        $params = array('content_type' => '1', 'page_size' => 20, 'page_no' => 1 , 'is_status'=>'publish');
        $data['cases'] = $this->content_model->get_content($params);

        $this->load->view('layouts/header');
        $this->load->view('faq/index', $data);
        $this->load->view('layouts/footer');
    }

   
    public function detail($id)
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('faq/detail', $data);
        $this->load->view('layouts/footer');
    }

}

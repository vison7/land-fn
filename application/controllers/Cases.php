<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cases extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('utility');
        $this->load->model('content_model');
    }

    public function index()
    {
        $params = array('content_type' => '1', 'page_size' => 40, 'page_no' => 1 , 'is_status'=>'approved');
        $data['cases'] = $this->content_model->get_content($params);

        $this->load->view('layouts/header');
        $this->load->view('cases/index', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id)
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('cases/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function submit()
    {
        $params = $_POST;
        $params['content_type'] = '1';
        $res = $this->content_model->cases($params);

        header('Content-type: text/json');
        header('Content-type: application/json');
        echo json_encode($res);
    }

    public function upload()
    {
        $res = array('code'=>200);
        header('Content-type: text/json');
        header('Content-type: application/json');
        echo json_encode($res);
    }

}

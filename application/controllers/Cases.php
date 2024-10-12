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
        $params = array('content_type' => '1', 'page_size' => 20, 'page_no' => 1);
        $data['cases'] = $this->content_model->get_content($params);

        // $data['ebook'] = $this->content_model->get_content($params_ebook);
        // $data['photo'] = $this->content_model->get_content($params_photo);
        // $data['sound'] = $this->content_model->get_content($params_sound);
        // $data['article'] = $this->content_model->get_content($params_article);

        // print_r($data['article']);

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

        // $data = array('code'=>200,'data'=> $_POST);
        // unset($params['confirm_password']);
        // unset($params['agree']);
        // print_r($params);
        // exit();


        $res = $this->content_model->cases($params);
        // if ($res->code == 200) {
        //     $data = 
        // }
        // echo $res;

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

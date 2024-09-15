<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Knowledge extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('utility');
        $this->load->model('content_model');
    }

    public function index()
    {


        // $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        // $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';

        // // video
        // $params_video = array('content_type' => '1', 'cate_id' => '1', 'recommend' => $recommend, 'hit' => $hit, 'page_size' => 4, 'page_no' => 1);
        // // video
        // $params_ebook = array('content_type' => '7', 'cate_id' => '',  'page_size' => 4, 'page_no' => 1);
        // // video
        // $params_photo = array('content_type' => '5', 'cate_id' => '',  'recommend' => $recommend, 'hit' => $hit, 'page_size' => 4, 'page_no' => 1);
        // // video
        // $params_sound = array('content_type' => '6', 'cate_id' => '', 'recommend' => $recommend, 'hit' => $hit, 'page_size' => 4, 'page_no' => 1);

        // $data['video'] = $this->content_model->get_content($params_video);
        // $data['ebook'] = $this->content_model->get_content($params_ebook);
        // $data['photo'] = $this->content_model->get_content($params_photo);
        // $data['sound'] = $this->content_model->get_content($params_sound);

        $this->load->view('layouts/header');
        $this->load->view('knowledge/index');
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

    public function list_items()
    {

        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 12;

        $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
        $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
        $data['cate_id'] = $cate_id;

        // by cate
        $params = array('content_type' => '3', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

        $data['data'] = $this->content_model->get_content($params);

        $this->load->view('knowledge/list_items', $data);
    }
}

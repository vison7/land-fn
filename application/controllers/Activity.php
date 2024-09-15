<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Activity extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('utility');
        $this->load->model('content_model');
    }

    public function index()
    {
        // $params = array('content_type' => '1', 'temple_id' => '0', 'page_size' => 5);
        // $data['banner'] = $this->content_model->get_banner($params);

        // $params = array('cate_id' => '1','page_size' => 6);
        // $data['temple1'] = $this->content_model->get_temple($params);

        // $params = array('cate_id' => '2','page_size' => 6,'page_no'=>1);
        // $data['temple2'] = $this->content_model->get_temple($params);

        // $params = array('cate_id' => '3','page_size' => 6,'page_no'=>1);
        // $data['temple3'] = $this->content_model->get_temple($params);

        // $params = array('content_type' => '2','page_size' => 6,'page_no'=>1);
        // $data['volunteer'] = $this->content_model->about_volunteer($params);


        $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';

        // video
        $params_1 = array('content_type' => '2', 'cate_id' => '1', 'page_size' => 4, 'page_no' => 1);
        // video
        $params_2 = array('content_type' => '2', 'cate_id' => '2',  'page_size' => 4, 'page_no' => 1);
        // video
        $params_3 = array('content_type' => '2', 'cate_id' => '3', 'page_size' => 4, 'page_no' => 1);
        // video
        $params_4 = array('content_type' => '2', 'cate_id' => '4', 'page_size' => 4, 'page_no' => 1);
        // article
        $params_5 = array('content_type' => '2', 'cate_id' => '5', 'page_size' => 4, 'page_no' => 1);
        $params_6 = array('content_type' => '2', 'cate_id' => '6',  'page_size' => 4, 'page_no' => 1);
        $params_7 = array('content_type' => '2', 'cate_id' => '7',  'page_size' => 4, 'page_no' => 1);
        $params_8 = array('content_type' => '2', 'cate_id' => '8', 'page_size' => 4, 'page_no' => 1);

        $data['activity1'] = $this->content_model->get_content($params_1);
        $data['activity2'] = $this->content_model->get_content($params_2);
        $data['activity3'] = $this->content_model->get_content($params_3);
        $data['activity4'] = $this->content_model->get_content($params_4);
        $data['activity5'] = $this->content_model->get_content($params_5);
        $data['activity6'] = $this->content_model->get_content($params_6);
        $data['activity7'] = $this->content_model->get_content($params_7);
        $data['activity8'] = $this->content_model->get_content($params_8);

        // print_r($data['article']);

        $this->load->view('layouts/header');
        $this->load->view('activity/index', $data);
        $this->load->view('layouts/footer');
    }

    public function article($cate=1)
    {
        $data['cate_id'] = $cate;
        $this->load->view('layouts/header');
        $this->load->view('activity/article', $data);
        $this->load->view('layouts/footer');
    }
    public function list_article()
    {
        
        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 12;

        $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
        $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
        $data['cate_id'] = $cate_id;

        // by cate
        $params = array('content_type' => '2', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

        $data['data'] = $this->content_model->get_content($params);

        $this->load->view('activity/list_article', $data);
    }
    public function article_detail($id)
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('activity/article_detail', $data);
        $this->load->view('layouts/footer');
    }



    public function video()
    {
        $data['cate_id'] = 1;
        $this->load->view('layouts/header');
        $this->load->view('activity/video', $data);
        $this->load->view('layouts/footer');
    }
    public function list_video()
    {
        
        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 12;

        $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
        $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
        $data['cate_id'] = $cate_id;

        // by cate
        $params = array('content_type' => '1', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

        $data['data'] = $this->content_model->get_content($params);

        $this->load->view('activity/list_video', $data);
    }
    public function video_detail($id)
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('activity/video_detail', $data);
        $this->load->view('layouts/footer');
    }

    public function photo()
    {
        $this->load->view('layouts/header');
        $this->load->view('activity/photo');
        $this->load->view('layouts/footer');
    }
    public function list_photo()
    {
        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 12;

        $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
        $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
        $data['cate_id'] = $cate_id;

        // by cate
        $params = array('content_type' => '5', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

        $data['data'] = $this->content_model->get_content($params);

        $this->load->view('media/list_photo', $data);
    }
    public function photo_detail($id)
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('media/photo_detail', $data);
        $this->load->view('layouts/footer');
    }

    public function ebook()
    {
        $this->load->view('layouts/header');
        $this->load->view('media/ebook');
        $this->load->view('layouts/footer');
    }
    public function list_ebook()
    {
        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 12;

        $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
        $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
        $data['cate_id'] = $cate_id;

        // by cate
        $params = array('content_type' => '7', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

        $data['data'] = $this->content_model->get_content($params);

        $this->load->view('media/list_ebook', $data);
    }
    public function ebook_detail($id)
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('media/ebook_detail', $data);
        $this->load->view('layouts/footer');
    }

    public function sound()
    {
        $this->load->view('layouts/header');
        $this->load->view('media/sound');
        $this->load->view('layouts/footer');
    }
    public function list_sound()
    {
        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 12;

        $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
        $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
        $data['cate_id'] = $cate_id;

        // by cate
        $params = array('content_type' => '6', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

        $data['data'] = $this->content_model->get_content($params);

        $this->load->view('media/list_sound', $data);
    }
    public function sound_detail($id)
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('media/sound_detail', $data);
        $this->load->view('layouts/footer');
    }
}

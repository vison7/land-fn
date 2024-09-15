<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Place extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('utility');
        $this->load->model('content_model');
    }

    public function index()
    {
        $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';

        $params_1 = array('content_type' => '12', 'page_size' => 4, 'page_no' => 1);
        $params_2 = array('content_type' => '13',  'page_size' => 4, 'page_no' => 1);
        $params_3 = array('content_type' => '14',  'page_size' => 4, 'page_no' => 1);
        
        $params_4 = array('content_type' => '15', 'page_size' => 1, 'page_no' => 1);

        $data['activity1'] = $this->content_model->get_content($params_1);
        $data['activity2'] = $this->content_model->get_content($params_2);
        $data['activity3'] = $this->content_model->get_content($params_3);

        // detail
        $place = $this->content_model->get_content($params_4);
        $params = array('id' => @$place->data[0]->id);
        $data['place'] = $this->content_model->get_detail($params);

        // print "<pre>";
        // print_r($data);
        // print "</pre>";

        // 
        $this->load->view('layouts/header');
        $this->load->view('place/index', $data);
        $this->load->view('layouts/footer');
    }

    public function article($content_type="")
    {
        $name = array(
            '12'=> 'Sandbox กรุงเทพมหานคร',
            '13'=> 'Sandbox ต่างจังหวัด',
            '14'=> 'โมเดล Health Station'
        );
        $data['content_type'] = $content_type;
        $data['content_type_name'] = @$name[$content_type];
        $this->load->view('layouts/header');
        $this->load->view('place/article', $data);
        $this->load->view('layouts/footer');
    }
    public function list_article()
    {
        
        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 12;

        $content_type = (isset($_REQUEST['content_type'])) ? $_REQUEST['content_type'] : '';

        // by cate
        $params = array('content_type' => $content_type, 'page_size' => $page_size, 'page_no' => $page_no);

        $data['data'] = $this->content_model->get_content($params);

        $this->load->view('place/list_article', $data);
    }
    public function article_detail($id)
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);

        $this->load->view('layouts/header');
        $this->load->view('place/article_detail', $data);
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

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Temple extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('utility');
        $this->load->model('content_model');
    }

    public function index()
    {
        $params = array('content_type' => '9', 'cate_id' => '1','fields'=>'address','recommend' => 'yes', 'page_size' => 5, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['project'] = $d;
        $params = array('content_type' => '9', 'cate_id' => '1', 'page_size' => 1, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['total_project'] = $total;


        $params = array('content_type' => '9', 'cate_id' => '2','fields'=>'address','recommend' => 'yes', 'page_size' => 5, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['education'] = $d;
        $params = array('content_type' => '9', 'cate_id' => '2','fields'=>'address', 'page_size' => 1, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['total_education'] = $total;

        $params = array('content_type' => '9', 'cate_id' => '3','fields'=>'address','recommend' => 'yes', 'page_size' => 5, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['center'] = $d;
        $params = array('content_type' => '9', 'cate_id' => '3','fields'=>'address', 'page_size' => 1, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['total_center'] = $total;

        $params = array('content_type' => '9', 'cate_id' => '4','fields'=>'address','recommend' => 'yes', 'page_size' => 5, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['creative'] = $d;
        $params = array('content_type' => '9', 'cate_id' => '4','fields'=>'address', 'page_size' => 1, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['total_creative'] = $total;


        $this->load->view('layouts/header');
        $this->load->view('temple/index', $data);
        $this->load->view('layouts/footer');
    }

    function thainumDigit($num){
        return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
        array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
        $num);
    }

         // '1' => 'วัดในโครงการ',
        // '2' => 'วัดกรณีศึกษา',
        // '3' => 'วัดศูนย์การเรียนรู้',
        // '4' => 'วัดพื้นที่สุขภาวะสร้างสรรค์'

    public function project()
    {

        $params = array('content_type' => '9', 'cate_id' => '1', 'page_size' => 1, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['total'] = $total;

        $this->load->view('layouts/header');
        $this->load->view('temple/project', $data);
        $this->load->view('layouts/footer');
    }
    public function list_project()
    {
        
        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 40;

        $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
        // $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
        $region = (isset($_REQUEST['region'])) ? $_REQUEST['region'] : '';
        $data['cate_id'] = $cate_id;

        // by cate
        $params = array('fields'=>'address','content_type' => '9', 'cate_id' => $cate_id,'region'=>  $region, 'page_size' => $page_size, 'page_no' => $page_no);

        $data['data'] = $this->content_model->get_content($params);

        $this->load->view('temple/list_project', $data);
    }
    public function creative()
    {
        $params = array('content_type' => '9', 'cate_id' => '4', 'page_size' => 1, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['total'] = $total;

        $this->load->view('layouts/header');
        $this->load->view('temple/creative',$data);
        $this->load->view('layouts/footer');
    }
    public function center()
    {
        $params = array('content_type' => '9', 'cate_id' => '3', 'page_size' => 1, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['total'] = $total;

        $this->load->view('layouts/header');
        $this->load->view('temple/center', $data);
        $this->load->view('layouts/footer');
    }
    public function education()
    {
        $params = array('content_type' => '9', 'cate_id' => '2', 'page_size' => 1, 'page_no' => 1);
        $d = $this->content_model->get_content($params);
        $total = $this->thainumDigit($d->paging->total_item );
        $data['total'] = $total;

        $this->load->view('layouts/header');
        $this->load->view('temple/education', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id = '')
    {
        $params = array('id' => $id);
        $data['data'] = $this->content_model->get_detail($params);
        $this->load->view('layouts/header');
        $this->load->view('temple/detail', $data);
        $this->load->view('layouts/footer');
    }

    // public function video()
    // {
    //     $data['cate_id'] = 1;
    //     $this->load->view('layouts/header');
    //     $this->load->view('media/video', $data);
    //     $this->load->view('layouts/footer');
    // }
    // public function list_video()
    // {

    //     $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
    //     $page_size = 12;

    //     $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
    //     $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
    //     $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
    //     $data['cate_id'] = $cate_id;

    //     // by cate
    //     $params = array('content_type' => '1', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

    //     $data['data'] = $this->content_model->get_content($params);

    //     $this->load->view('media/list_video', $data);
    // }
    // public function video_detail($id)
    // {
    //     $params = array('id' => $id);
    //     $data['data'] = $this->content_model->get_detail($params);

    //     $this->load->view('layouts/header');
    //     $this->load->view('media/video_detail', $data);
    //     $this->load->view('layouts/footer');
    // }

    // public function photo()
    // {
    //     $this->load->view('layouts/header');
    //     $this->load->view('media/photo');
    //     $this->load->view('layouts/footer');
    // }
    // public function list_photo()
    // {
    //     $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
    //     $page_size = 12;

    //     $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
    //     $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
    //     $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
    //     $data['cate_id'] = $cate_id;

    //     // by cate
    //     $params = array('content_type' => '5', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

    //     $data['data'] = $this->content_model->get_content($params);

    //     $this->load->view('media/list_photo', $data);
    // }


    // public function ebook()
    // {
    //     $this->load->view('layouts/header');
    //     $this->load->view('media/ebook');
    //     $this->load->view('layouts/footer');
    // }
    // public function list_ebook()
    // {
    //     $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
    //     $page_size = 12;

    //     $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
    //     $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
    //     $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
    //     $data['cate_id'] = $cate_id;

    //     // by cate
    //     $params = array('content_type' => '7', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

    //     $data['data'] = $this->content_model->get_content($params);

    //     $this->load->view('media/list_ebook', $data);
    // }
    // public function ebook_detail($id)
    // {
    //     $params = array('id' => $id);
    //     $data['data'] = $this->content_model->get_detail($params);

    //     $this->load->view('layouts/header');
    //     $this->load->view('media/ebook_detail', $data);
    //     $this->load->view('layouts/footer');
    // }

    // public function sound()
    // {
    //     $this->load->view('layouts/header');
    //     $this->load->view('media/sound');
    //     $this->load->view('layouts/footer');
    // }
    // public function list_sound()
    // {
    //     $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
    //     $page_size = 12;

    //     $cate_id = (isset($_REQUEST['cate_id'])) ? $_REQUEST['cate_id'] : '';
    //     $recommend = (isset($_REQUEST['recommend'])) ? $_REQUEST['recommend'] : '';
    //     $hit = (isset($_REQUEST['hit'])) ? $_REQUEST['hit'] : '';
    //     $data['cate_id'] = $cate_id;

    //     // by cate
    //     $params = array('content_type' => '6', 'cate_id' => $cate_id, 'page_size' => $page_size, 'page_no' => $page_no);

    //     $data['data'] = $this->content_model->get_content($params);

    //     $this->load->view('media/list_sound', $data);
    // }
    // public function sound_detail($id)
    // {
    //     $params = array('id' => $id);
    //     $data['data'] = $this->content_model->get_detail($params);

    //     $this->load->view('layouts/header');
    //     $this->load->view('media/sound_detail', $data);
    //     $this->load->view('layouts/footer');
    // }
}

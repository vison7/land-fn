<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utility');
        $this->load->helper('user');
        $this->load->model('content_model');
    }
    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('member/index');
        $this->load->view('layouts/footer');
    }

    public function register()
    {
        $this->load->view('layouts/header');
        $this->load->view('member/register');
        $this->load->view('layouts/footer');
    }

    public function verify_email()
    {
        $this->load->view('layouts/header');
        $this->load->view('member/verify_email');
        $this->load->view('layouts/footer');
    }

    public function register_member()
    {
        $_POST['is_status'] = 'active';
        $params = $_POST;
        unset($params['confirm_password']);
        unset($params['agree']);
        // print_r($params);
        // exit();
        $res = $this->content_model->register($params);
        if ($res->code == 200) {
            $params = array('username' => $_POST['username'], 'password' => $_POST['password']);
            $login = $this->content_model->auth($params);
            if ($login->code == 200) {
                $value_encrypt = string_encrypt(json_encode($login->data));
                setcookie("userinfo", $value_encrypt, null, "/");
                // $res = array('code' => 200, 'data' => json_encode($res->data));
            }
        }


        header('Content-type: text/json');
        header('Content-type: application/json');
        echo json_encode($res);
    }

    public function login()
    {
        $data['id'] = @$_GET['id'];
        $data['page'] = @$_GET['page'];
        $this->load->view('layouts/header');
        $this->load->view('member/login', $data);
        $this->load->view('layouts/footer');
    }
    public function auth()
    {
        $id = @$_GET['id'];
        $page = @$_GET['page'];

        $params = $_POST;
        $res = $this->content_model->auth($params);
        if ($res->code == 200) {
            $value_encrypt = string_encrypt(json_encode($res->data));
            setcookie("userinfo", $value_encrypt, null, "/");
            $res = array('code' => 200, 'data' => json_encode($res->data));
            // if ($page == 'subscription') {
            //     redirect('volunteer/subscription');
            // }

            // if ($id != '') {
            //     redirect('volunteer/step1?id=' . $id);
            // }

            // if ($id != '') {
            //     redirect('volunteer/step1?id=' . $id);
            // } else {
            //     redirect('/?code=' . $res->code);
            // }
            // redirect('/?code=' . $res->code);

        } else {
            $res = array('code' => 400);
            // redirect('member/login?id=' . $id . '&page=' . $page . '&code=' . $res->code);
        }

        header('Content-type: text/json');
        header('Content-type: application/json');
        echo json_encode($res);
    }

    public function auth2()
    {
        $id = @$_GET['id'];
        $page = @$_GET['page'];

        $params = $_POST;
        $res = $this->content_model->auth($params);
        if ($res->code == 200) {
            $value_encrypt = string_encrypt(json_encode($res->data));
            setcookie("userinfo", $value_encrypt, null, "/");

            if ($page == 'subscription') {
                redirect('volunteer/subscription');
            }

            if ($id != '') {
                redirect('volunteer/step1?id=' . $id);
            }

            // if ($id != '') {
            //     redirect('volunteer/step1?id=' . $id);
            // } else {
            //     redirect('/?code=' . $res->code);
            // }
            redirect('/?code=' . $res->code);
        } else {
            redirect('member/login?id=' . $id . '&page=' . $page . '&code=' . $res->code);
        }
    }

    public function logout()
    {
        setcookie("userinfo", null, time() - 3600, "/");
        redirect('course');
    }
    public function verify()
    {
        $data['id'] = @$_GET['id'];
        $this->load->view('layouts/header');
        $this->load->view('member/verify', $data);
        $this->load->view('layouts/footer');
    }
    public function forget_pass()
    {
        $this->load->view('layouts/header');
        $this->load->view('member/forget_pass');
        $this->load->view('layouts/footer');
    }

    public function forget_pass_check()
    {
        $params = $_POST;
        $res = $this->content_model->forget_pass($params);
        redirect('member/forget_pass_check_result');
    }
    public function forget_pass_check_result()
    {
        $this->load->view('layouts/header');
        $this->load->view('member/forget_pass_check_result');
        $this->load->view('layouts/footer');
    }

    public function forget_pass_verify()
    {
        $v = @$_GET['v'];
        $email = @$_GET['email'];
        if (!empty($email) && !empty($v)) {
            //$my_email = base64_decode(base64_decode($email));

            $key_email = 'watUHusahduiwkjYIT873yugyudsavj';
            $my_email = md5($email . '-' . $key_email);

            $data = array('v' => $v, 'email' => $email);
            $this->load->view('layouts/header');
            $this->load->view('member/forget_pass_verify', $data);
            $this->load->view('layouts/footer');

            // if ($my_email == $v) {
            //     $this->load->database();
            //     $table = $this->db->dbprefix('members');
            //     $data = array(
            //         'is_status' => 'active',
            //     );

            //     $this->db->where('email', $email);
            //     $this->db->update($table, $data);
            //     redirect(VERIFY_EMAIL);
            // } else {
            //     echo 'Data Not Found.';
            // }

        } else {
            echo 'Page Not Found.';
        }
    }

    public function forget_pass_update()
    {
        $v = @$_POST['v'];
        $email = @$_POST['email'];
        if (!empty($email) && !empty($v)) {
            //$my_email = base64_decode(base64_decode($email));

            $key_email = 'watUHusahduiwkjYIT873yugyudsavj';
            $my_email = md5($email . '-' . $key_email);

            if ($v == $my_email) {
                $params = array('email' => $email);
                $res = $this->content_model->profile_by_email($params);

                if (isset($res->data[0]) && !empty($res->data[0])) {
                    $pass = $_POST['pass'];
                    $member_id = $res->data[0]->id;
                    $params = array(
                        'id' => $res->data[0]->id,
                        'email' => $email,
                        'pass' => $pass
                    );
                    $res_profile = $this->content_model->reset_password($params);

                    redirect('member/forget_pass_result?code=' . @$res_profile->code);
                    // print "<pre>";
                    // print_r($res_profile);
                }
            } else {
                echo 'Invalid url';
            }

            $data = array('v' => $v, 'email' => $email);
            // $this->load->view('layouts/header');
            // $this->load->view('member/forget_pass_verify', $data);
            // $this->load->view('layouts/footer');

        } else {
            echo 'Page Not Found.';
        }
    }
    public function forget_pass_result()
    {
        $this->load->view('layouts/header');
        $this->load->view('member/forget_pass_result');
        $this->load->view('layouts/footer');
    }

    // My Profile
    public function profile()
    {
        if (get_user_login()->id == '') {
            redirect('course');
        }

        $id = get_user_login()->id;

        $params = array('id' => $id);
        $res = $this->content_model->profile($params);
        $data['id'] = $id;
        $data['member'] = $res->data[0];

        $this->load->view('layouts/header');
        $this->load->view('member/profile', $data);
        $this->load->view('layouts/footer');
    }

    public function edit_profile()
    {
        if (get_user_login()->id == '') {
            redirect('member/login');
        }

        $id = get_user_login()->id;

        $params = array('id' => $id);
        $res = $this->content_model->profile($params);
        $data['id'] = $id;
        $data['member'] = $res->data[0];

        $this->load->view('layouts/header');
        $this->load->view('member/edit_profile', $data);
        $this->load->view('layouts/footer');
    }
    public function update_profile()
    {
        if (get_user_login()->id == '') {
            redirect('member/login');
        }

        $_POST['thumb'] = '';
        if (isset($_FILES['file']['tmp_name']) && !empty($_FILES['file']['tmp_name'])) {
            $tmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fp = fopen($tmpName, 'r');
            $content = fread($fp, $fileSize);
            //$content = addslashes($content);
            fclose($fp);
            $_POST['thumb'] = base64_encode($content);
        }

        $data['id'] = $_POST['id'];

        $_POST['date_of_birth'] = $_POST['yy'] . '-' . $_POST['mm'] . '-' . $_POST['dd'];
        unset($_POST['yy']);
        unset($_POST['mm']);
        unset($_POST['dd']);

        // print "<pre>";
        // print_r($_POST);

        $this->load->model('content_model');
        $res = $this->content_model->update_profile($_POST);
        redirect('member/edit_profile?code=' . $res->code);
        //print_r($res);
    }

    public function change_password()
    {
        if (get_user_login()->id == '') {
            redirect('member/login');
        }

        $id = get_user_login()->id;

        $params = array('id' => $id);
        $res = $this->content_model->profile($params);
        $data['id'] = $id;
        $data['member'] = $res->data[0];

        $this->load->view('layouts/header');
        $this->load->view('member/change_password', $data);
        $this->load->view('layouts/footer');
    }
    public function update_password()
    {
        if (get_user_login()->id == '') {
            redirect('member/login');
        }

        $id = get_user_login()->id;
        $_POST['id'] = $id;

        $this->load->model('content_model');
        $res = $this->content_model->update_password($_POST);

        redirect('member/change_password?code=' . $res->code);
        //print_r($res);
    }

    public function my_volunteer()
    {
        if (get_user_login()->id == '') {
            redirect('member/login');
        }

        // $id = get_user_login()->id;

        // $params = array('member_id' => $id);
        // $res = $this->content_model->volunteerall($params);
        // $data['res'] = $res;
        // print_r($res);
        // exit();

        $this->load->view('layouts/header');
        $this->load->view('member/my_volunteer');
        $this->load->view('layouts/footer');
    }

    public function list_volunteer()
    {
        if (get_user_login()->id == '') {
            redirect('member/login');
        }

        $id = get_user_login()->id;

        $page_no = (isset($_REQUEST['page_no'])) ? $_REQUEST['page_no'] : 1;
        $page_size = 3;

        $params = array('member_id' => $id, 'page_size' => $page_size, 'page_no' => $page_no);
        $data['data'] = $this->content_model->volunteerall($params);

        $this->load->view('member/list_volunteer', $data);
    }
}

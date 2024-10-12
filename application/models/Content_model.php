<?php

class Content_model extends CI_Model
{

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function get_content($params)
    {
        $data = $this->feed_data('content', $params);
        return json_decode($data);
    }

    public function get_detail($params)
    {
        $data = $this->feed_data('content/detail', $params);
        return json_decode($data);
    }
    
    
    // member
    public function register($params = array())
    {
        //print_r($params);
        $data = $this->feed_data('member/register', $params , 'POST');
        return json_decode($data);
    }
    public function auth($params = array())
    {
        //print_r($params);
        $data = $this->feed_data('member/auth', $params , 'POST');
        return json_decode($data);
    }
    public function profile($params = array())
    {
        //print_r($params);
        $data = $this->feed_data('member/profile', $params , 'POST');
        return json_decode($data);
    }
    public function update_profile($params = array())
    {
        //print_r($params);
        $data = $this->feed_data('member/updateprofile', $params , 'POST');
        return json_decode($data);
    }
    public function update_password($params = array())
    {
        //print_r($params);
        $data = $this->feed_data('member/updatepassword', $params , 'POST');
        return json_decode($data);
    }
    public function forget_pass($params = array())
    {
        //print_r($params);
        $data = $this->feed_data('member/forgetpass', $params , 'POST');
        return json_decode($data);
    }
    public function profile_by_email($params = array())
    {
        //print_r($params);
        $data = $this->feed_data('member/profilebyemail', $params , 'POST');
        return json_decode($data);
    }
    public function reset_password($params = array())
    {
        //print_r($params);
        $data = $this->feed_data('member/resetpassword', $params , 'POST');
        return json_decode($data);
    }


    // Cases
    public function cases($params = array())
    {
        $data = $this->feed_data('content/submitcase', $params , 'POST');
        return json_decode($data);
    }


    // core feed
    private function feed_data($api_path, $params, $method = 'GET')
    {
        if ($method == 'GET') {
            $params['token'] = API_TOKEN;
            $url = API_URL . $api_path . '?' . http_build_query($params);
        } else {
            $token['token'] = API_TOKEN;
            $url = API_URL . $api_path . '?' . http_build_query($token);
        }
    //  echo $url;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => ($params),
            // CURLOPT_HTTPHEADER => array(
            //     "Authorization: 58d8d84e198c070b1a0b7d7bcba9a4e915b34a33a3b677437a9fc8fd",
            //     "Cache-Control: no-cache",
            //     "Postman-Token: 51d6abdc-e7dd-4cdc-b23c-3e3a00bb4915",
            // ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        // echo $response;
        curl_close($curl);

        if ($err) {
            return null;
        } else {
            return $response;
        }
    }

}

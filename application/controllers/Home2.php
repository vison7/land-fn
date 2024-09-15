<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home2 extends CI_Controller
{

    public function index()
    {
         $this->load->view('layouts/header');
        $this->load->view('home2/index');
        $this->load->view('layouts/footer');
    }
}

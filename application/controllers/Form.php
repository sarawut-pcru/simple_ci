<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
    }
    public function index()
    {
        $this->load->view('mycss');
        $this->load->view('welcome_message');
        $this->load->view('js');
    }
    public function register()
    {
        $this->member_model->addmember();
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function index()
    {
        $this->load->view('mycss');
        $this->load->view('pages');
        $this->load->view('js');
    }
    public function social()
    {
        $this->load->view('mycss');
        $this->load->view('create');
        $this->load->view('js');
    }
    public function register()
    {
        $this->load->view('mycss');
        $this->load->view('register');
        $this->load->view('js');
    }
    public function signup()
    {
        $this->load->view('mycss');
        $this->load->view('signup');
        $this->load->view('js');
    }
}

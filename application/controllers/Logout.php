<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function logout()
    {
		$this->load->view('mycss');
		$this->load->view('welcome_message');
		$this->load->view('js');
    }
}

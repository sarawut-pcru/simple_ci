<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{


    public function index()
    {
        
        $this->load->view('mycss');
		$this->load->view('welcome_message');
		$this->load->view('js');
    }
}

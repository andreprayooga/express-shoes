<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/auth/registration');
        $this->load->view('administrator/templates/footer');
	}
}

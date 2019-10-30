<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/templates/topbar');
        $this->load->view('administrator/index');
        $this->load->view('administrator/templates/footer');
	}
}

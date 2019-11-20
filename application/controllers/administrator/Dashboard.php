<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Dashboard Express Shoes';
		$data['url'] = 'Dashboard';

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/topbar');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/home/dashboard');
        $this->load->view('administrator/templates/footer');
	}
}

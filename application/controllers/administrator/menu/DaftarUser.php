<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarUser extends CI_Controller {

	public function index()
	{
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/templates/topbar');
        $this->load->view('administrator/user/daftar_user');
        $this->load->view('administrator/templates/footer');
	}
}

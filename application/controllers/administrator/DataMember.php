<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMember extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
	}

	public function index()
	{
		$data['title'] = 'Data Member';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'DataMember';

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/member/daftar_member');
        $this->load->view('administrator/templates/footer');
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['title'] = 'My Profile';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'Profile';

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/settings/profile.php');
        $this->load->view('administrator/templates/footer');
	}
}

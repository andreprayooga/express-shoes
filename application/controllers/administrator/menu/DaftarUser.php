<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarUser extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data User';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/user/daftar_user');
        $this->load->view('administrator/templates/footer');
	}
}

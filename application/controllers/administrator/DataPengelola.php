<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPengelola extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Pengelola';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'DataPengelola';

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/pengelola/daftar_pengelola');
        $this->load->view('administrator/templates/footer');
	}
}

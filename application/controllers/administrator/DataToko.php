<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataToko extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Toko Mitra';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'DataToko';

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/toko/daftar_toko');
        $this->load->view('administrator/templates/footer');
	}
}

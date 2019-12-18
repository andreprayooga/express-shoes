<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
		$this->load->model('ServiceModel');
	}

	public function index()
	{
		$data['title'] = 'Service Data';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'Service';

		$data['data'] = $this->ServiceModel->get_all_data();
		$data['data'] = $this->ServiceModel->get_name_data();

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/toko/service/service_data', $data);
        $this->load->view('administrator/templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('toko_id', 'Store Name', 'trim|required');
		$this->form_validation->set_rules('jenis_service', 'Service', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Information', 'trim|required');

		if($this->form_validation->run() == false) {
		$data['title'] = 'Insert New Service Data';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'Service';

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar', $data);
			$this->load->view('administrator/templates/topbar', $data);
			$this->load->view('administrator/toko/service/insert_service', $data);
			$this->load->view('administrator/templates/footer');
		} else {
			$this->ServiceModel->insert_data();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><b>Success!</b> Data has been added!</div>');
			redirect('administrator/service/index');
		}
	}

}

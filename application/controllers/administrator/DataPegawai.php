<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
		$this->load->model('PegawaiModel');
	}

	public function index()
	{
		$data['title'] = 'Employee Data';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'DataPegawai';

		$data['data'] = $this->PegawaiModel->get_all_pegawai();
		$data['data'] = $this->PegawaiModel->get_sub();

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/pegawai/data_pegawai', $data);
        $this->load->view('administrator/templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Insert New Employee';
			$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
			$data['url'] = 'DataPegawai';

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar', $data);
			$this->load->view('administrator/templates/topbar', $data);
			$this->load->view('administrator/pegawai/insert_pegawai', $data);
			$this->load->view('administrator/templates/footer');
		} else {
			date_default_timezone_set('Asia/Jakarta');
			$config['upload_path'] = './assets/administrator/uploads/pegawai/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = 2048;
			$config['max_width']     = 1024;
			$config['max_height']    = 1024;
			
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$upload_data = $this->upload->data();
				$this->PegawaiModel->insert_data($upload_data['file_name']);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been created!</div>');
				redirect('administrator/datapegawai');
			} else {
				echo $this->upload->display_errors();
			}
		}
	}

	public function update($id)
	{
		$data['data'] = $this->PegawaiModel->get_all_pegawai();
		$data['data'] = $this->PegawaiModel->get_id($id);

		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Form Update Employee';
			$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
			$data['url'] = 'DataToko';

			$data['data'] = $this->PegawaiModel->get_all_pegawai();
			$data['data'] = $this->PegawaiModel->get_id($id);

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar', $data);
			$this->load->view('administrator/templates/topbar', $data);
			$this->load->view('administrator/pegawai/edit_pegawai', $data);
			$this->load->view('administrator/templates/footer');

		} else {
			date_default_timezone_set('Asia/Jakarta');
			$config['upload_path'] = './assets/administrator/uploads/pegawai/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = 2048;
			$config['max_width']     = 1024;
			$config['max_height']    = 1024;
			
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$upload_data = $this->upload->data();
				$this->PegawaiModel->update_data($id, $upload_data['file_name']);

				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been changed!</div>');
				
				redirect('administrator/datapegawai');
			} else {
				echo $this->upload->display_errors();
			}

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data failed to update!</div>');
			redirect('administrator/datapegawai');

			var_dump($data);
			die;
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataUser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['title'] = 'User Data';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'DataUser';

		$data['data'] = $this->UserModel->get_all_user();

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/user/data_user');
		$this->load->view('administrator/templates/footer');
	
	}

	public function update($id)
	{
		$data['data'] = $this->UserModel->get_all_user();
		$data['data'] = $this->UserModel->get_id($id);

		$this->form_validation->set_rules('nama_user', 'Nama User', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('no_telp', 'No. Telp', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Form Update User';
			$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
			$data['url'] = 'DataUser';

			$data['data'] = $this->UserModel->get_all_user();
			$data['data'] = $this->UserModel->get_id($id);

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar', $data);
			$this->load->view('administrator/templates/topbar', $data);
			$this->load->view('administrator/user/edit_user', $data);
			$this->load->view('administrator/templates/footer');

		} else {
			date_default_timezone_set('Asia/Jakarta');
			$data['data'] = $this->UserModel->get_id($id);
			$this->UserModel->update_data($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data has been updated!</div>');
			redirect('administrator/datauser');
		}
	}

}

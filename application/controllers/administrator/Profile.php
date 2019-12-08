<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
		$this->load->model('ProfileModel');
	}

	public function index()
	{
		$data['title'] = 'My Profile';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'Profile';

		$data['data'] = $this->ProfileModel->get_sub();

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/settings/profile.php', $data);
        $this->load->view('administrator/templates/footer');
	}

	public function changePassword()
	{
		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[5]|matches[new_password1]');

		if($this->form_validation->run() == false) {

			$data['title'] = 'Dashboard Express Shoes';
			$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
			$data['url'] = 'Dashboard';

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar', $data);
			$this->load->view('administrator/templates/topbar', $data);
			$this->load->view('administrator/index', $data);
			$this->load->view('administrator/templates/footer');
		} else {
			$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
			
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');

				if(password_verify($current_password, $data['tb_admin']['password'])) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"Wrong current password!</div>');
					redirect('administrator/dashboard');
				} else {
					if($current_password == $new_password) {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"New password cannot be the same as current password!</div>');
						redirect('administrator/dashboard');
					} else {
						//password sudah ok
						$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

						$this->db->set('password', $password_hash);
						$this->db->where('email');
						$this->db->update('tb_admin');

						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"Password changed!</div>');
						redirect('administrator/dashboard');
					}
				}
		}
	}
}

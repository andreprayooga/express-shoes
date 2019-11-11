<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
        	$this->load->view('administrator/templates/auth_header', $data);
        	$this->load->view('administrator/auth/login');
        	$this->load->view('administrator/templates/auth_footer');
		} else {
			$this->session_login();
		}
	}

	private function session_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$tb_admin = $this->db->get_where('tb_admin', ['email' => $email])->row_array(); 

		if($tb_admin) {
			//jika user active
			if($tb_admin['is_active'] == 1) {
				//cek password
				if(password_verify($password, $tb_admin['password'])) {
					$data = [
						'email' => $tb_admin['email'],
						'role_id' => $tb_admin['role_id']
					];
					$this->session->set_userdata($data);
					redirect('administrator/Dashboard');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
				redirect('Auth/login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This account has not been activated!</div>');
				redirect('Auth/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This account not registered!</div>');
			redirect('Auth/login');
		}
	}

		public function registration()
	{
		$this->form_validation->set_rules('nama_admin', 'Fullname', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_admin.email]', [
			'is_unique' => 'Email alredy exist!'
		]);
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique', [
			'is_unique' => 'Username already exist!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
				'matches' => 'Password dont match!',
				'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		
		if($this->form_validation->run() == false) {
			$data['title'] = 'Registration';
        	$this->load->view('administrator/templates/auth_header', $data);
        	$this->load->view('administrator/auth/registration', $data);
        	$this->load->view('administrator/templates/auth_footer');
		} else {
			$data = [
				'nama_admin' => htmlspecialchars($this->input->post('nama_admin', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'foto' => 'default.jpg',
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'date_created' => date("Y-m-d H:i:s"),
			];

			$this->db->insert('tb_admin', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success! Your account has been created!</div>');
			redirect('Auth/login');
		}
	}

	public function logout ()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout!</div>');
		redirect('Auth/login');
	}
}

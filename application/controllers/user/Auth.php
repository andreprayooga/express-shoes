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
        	$this->load->view('user/auth/login');
        	$this->load->view('administrator/templates/auth_footer');
		} else {
			$this->session_login();
		}
	}

	private function session_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$tb_user = $this->db->get_where('tb_user', ['email' => $email])->row_array(); 

		if($tb_user) {
			//jika user active
			if($tb_user['is_active'] == 2) {
				//cek password
				if(password_verify($password, $tb_user['password'])) {
					$data = [
						'email' => $tb_user['email'],
						'role_id' => $tb_user['role_id']
					];
					$this->session->set_userdata($data);
					// redirect('administrator/Dashboard');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
				redirect('user/auth/login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This account has not been activated!</div>');
				redirect('user/auth/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This account not registered!</div>');
			redirect('user/auth/login');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('nama_user', 'Fullname', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', [
				'matches' => 'Password dont match!',
				'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('no_telp', 'No. HP', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		
		if($this->form_validation->run() == false) {
			$data['title'] = 'Registration User';
        	$this->load->view('administrator/templates/auth_header', $data);
        	$this->load->view('user/auth/registration', $data);
        	$this->load->view('administrator/templates/auth_footer');
		} else {
			$data = [
				'nama_user' => $this->input->post('nama_user'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'no_telp' => $this->input->post('no_telp'),
				'alamat' => $this->input->post('alamat'),
				'foto' => 'default.jpg',
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => date("Y-m-d H:i:s"),
			];

			$this->db->insert('tb_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success! Your account has been created!</div>');
			redirect('user/auth/login');
		}
    }
}
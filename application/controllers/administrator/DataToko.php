<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataToko extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
		$this->load->model('TokoModel');
	}

	public function index()
	{
		$data['title'] = 'Data Toko Mitra';
		$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = 'DataToko';

		$data['data'] = $this->TokoModel->get_all_data();

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/toko/data_toko', $data);
        $this->load->view('administrator/templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'No. Telp', 'trim|required');
		$this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
		$this->form_validation->set_rules('longitude', 'Longitde', 'trim|required');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Data Toko Mitra';
			$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
			$data['url'] = 'DataToko';

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar', $data);
			$this->load->view('administrator/templates/topbar', $data);
			$this->load->view('administrator/toko/insert_toko', $data);
			$this->load->view('administrator/templates/footer');
		} else {
			$nama_toko = $this->input->post('nama_toko');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$latitude = $this->input->post('latitude');
			$longitude = $this->input->post('longitude');
			$date_created = $this->input->post(date("Y-m-d H:i:s"));

			date_default_timezone_set('Asia/Jakarta');
			$config['upload_path'] = './assets/administrator/uploads/toko/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';
			
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('logo')) {
				$upload_data = $this->upload->data();
				$this->TokoModel->insert_data($upload_data['file_name']);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
				redirect('administrator/datatoko');
			} else {
				echo $this->upload->display_errors();
			}
		}
	}

	public function update($id)
	{
		$data['data'] = $this->TokoModel->get_id($id);
		$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'No. Telp', 'trim|required');
		$this->form_validation->set_rules('latitude', 'Latitude', 'trim|required');
		$this->form_validation->set_rules('longitude', 'Longitde', 'trim|required');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Data Toko Mitra';
			$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
			$data['url'] = 'DataToko';
			$data['data'] = $this->TokoModel->get_id($id);

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar', $data);
			$this->load->view('administrator/templates/topbar', $data);
			$this->load->view('administrator/toko/edit_toko', $data);
			$this->load->view('administrator/templates/footer');
		} else {
			if ($_FILES['logo']['name'] != "") {
				date_default_timezone_set('Asia/Jakarta');
				$config['upload_path'] = './assets/administrator/uploads/toko/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
			
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('logo')) {
					$upload_data = $this->upload->data();
					$this->TokoModel->update_data()($upload_data['file_name']);

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
					$data['data'] = $this->TokoModel->get_id($id);
					$this->load->view('administrator/toko/edit_toko', $data);
				} else {
					echo $this->upload->display_errors();
				}
			} else {
				$data['data'] = $this->TokoModel->get_id($id);
				$this->load->view('administrator/datatoko/edit_toko', $data);
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diupdate!</div>');
			}
		}
	}

	public function delete($id)
	{
		$this->TokoModel->delete_data($id);
	}
}

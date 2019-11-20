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
		$data['url'] = 'DataToko';

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/templates/topbar');
        $this->load->view('administrator/toko/daftar_toko', $data);
        $this->load->view('administrator/templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'No. Telp', 'required|trim');

		if($this->form_validation->run() == FALSE) {
			$data['title'] = 'Data Toko Mitra';
			$data['url'] = 'DataToko';

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar');
			$this->load->view('administrator/templates/topbar');
			$this->load->view('administrator/toko/daftar_toko', $data);
			$this->load->view('administrator/templates/footer');
		} else {
			$data = [
				'nama_toko' => $this->input->post('nama_toko'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'jam_buka' => $this->input->post('jam_buka'),
				'jam_tutup' => $this->input->post('jam_tutup'),
				'date_created' => date("Y-m-d H:i:s"),
			];

			$upload_logo = $_FILES['logo']['name'];
			if($upload_logo) {
				$config['upload_path'] = './uploads/administrator/toko/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['max_width'] = '1024';
				$config['max_height'] = '1024';

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('logo'))
                {
					 $new_logo = $this->upload->data('file_name');
					 $this->db->set('logo', $new_logo);
                }
                else
                {
					echo $this->upload->display_errors();
                }
			}

			$this->db->insert('tb_toko', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di tambahkan!</div>');
			redirect('administrator/datatoko/index');
		}
	}


}

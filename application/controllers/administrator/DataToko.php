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

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/toko/data_toko');
        $this->load->view('administrator/templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_toko', 'Nama Toko', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'No. Telp', 'trim|required');
		$this->form_validation->set_rules('jam_buka', 'Jam Buka', 'trim|required');
		$this->form_validation->set_rules('jam_tutup', 'Jam Tutup', 'trim|required');

		if($this->form_validation->run() == false) {
			$data['title'] = 'Data Toko Mitra';
			$data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
			$data['url'] = 'DataToko';

			$this->load->view('administrator/templates/header', $data);
			$this->load->view('administrator/templates/sidebar', $data);
			$this->load->view('administrator/templates/topbar', $data);
			$this->load->view('administrator/toko/insert_data');
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

			$upload_image = $_FILES['logo']['name'];

			if ($upload_image) {
				$config['upload_path'] = "./uploads/administrator/toko/";
				$config['allowed_types'] = "gif|jpg|png";
				$config['max_width'] = '2048';
				$config['max_height'] = '1024';
				$config['max_size'] = "1024";
	
				$this->load->library('upload',$config);
	
				if ($this->upload->do_upload('logo')) {
					$new_logo = $this->upload->data('file_name');
					$this->db->set('logo', $new_logo);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->insert('tb_toko');
			redirect('administrator/datatoko', 'refresh');
			// if (!$this->upload->do_upload('logo')) {
			// 	$data['error'] = $this->upload->display_errors();
			// 	$this->load->view('administrator/toko/data_toko', $data);
			// } else {
			// 	$upload_data = $this->upload->data('file_name');
			// 	#get data
			// 	$data = [
			// 		'nama_toko' => $this->input->post('nama_toko'),
			// 		'email' => $this->input->post('email'),
			// 		'alamat' => $this->input->post('alamat'),
			// 		'no_telp' => $this->input->post('no_telp'),
			// 		'logo' => $upload_data['file_name'],
			// 		'jam_buka' => $this->input->post('jam_buka'),
            // 		'jam_tutup' => $this->input->post('jam_tutup'),
            // 		'date_created' => date("Y-m-d H:i:s"),
			// 	];
				
			// 	$this->db->insert('tb_toko', $data);
			// 	redirect('administrator/datatoko', 'refresh');
			// }
		}
	}
}

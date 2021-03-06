<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('ShoesModel');
        $this->load->model('TokoModel');
    }

    public function index()
    {
        $data['title'] = 'Home Page';
		$data['tb_user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['url'] = 'Home';
        
        $data['data'] = $this->ShoesModel->get_all_data();
        $data['toko'] = $this->TokoModel->get_all_data();

        $this->load->view('home/templates/header', $data);
        $this->load->view('home/templates/topbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/templates/footer');
    }
}
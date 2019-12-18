<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shoes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->Model('ShoesModel');
    }

    public function index()
    {
        $data['title'] = 'Our Shoes';
        $data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['url'] = 'Shoes';

        $data['data'] = $this->ShoesModel->get_all_data();

        $this->load->view('administrator/templates/header', $data);
        $this->load->view('administrator/templates/sidebar', $data);
        $this->load->view('administrator/templates/topbar', $data);
        $this->load->view('administrator/home/shoes/shoes_data', $data);
        $this->load->view('administrator/templates/footer');
    }

    public function insert()
    {
        $this->form_validation->set_rules('jenis_sepatu', 'Jenis Sepatu', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Our Shoes';
            $data['tb_admin'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
            $data['url'] = 'Shoes';

            $this->load->view('administrator/templates/header', $data);
            $this->load->view('administrator/templates/sidebar', $data);
            $this->load->view('administrator/templates/topbar', $data);
            $this->load->view('administrator/home/shoes/insert', $data);
            $this->load->view('administrator/templates/footer');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $config['upload_path'] = './assets/administrator/uploads/sepatu/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '50000000000';
            $config['max_width']       = 5000000;
            $config['max_height']      = 50000000;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $this->ShoesModel->insert_data($upload_data['file_name']);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><b>Success!</b> Data has been added!</div>');
                redirect('administrator/menu/shoes');
            } else {
                echo $this->upload->display_errors();
            }
        }
    }
}

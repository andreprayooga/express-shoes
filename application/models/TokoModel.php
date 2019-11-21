<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TokoModel extends CI_Model {

	public function get_all_data()
	{
		$this->db->select('tb_toko. *');
		$this->db->order_by('nama_toko','asc');
		return $this->db->get('tb_toko')->result();
	}

	public function get_id($id)
	{
		$this->db->where('id_toko', $id)->get('tb_toko')->row(0);
	}

	public function insert()
	{
		$data = [
			'nama_toko' => $this->input->post('nama_toko'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'jam_buka' => $this->input->post('jam_buka'),
            'jam_tutup' => $this->input->post('jam_tutup'),
            'date_created' => date("Y-m-d H:i:s"),		
        ];
        
        $this->db->insert('tb_toko',$data);
	}
}

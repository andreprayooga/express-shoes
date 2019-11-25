<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TokoModel extends CI_Model {

	function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_toko');
		$this->db->order_by('id_toko');
		return $this->db->get()->result();
	}

	function get_id($id)
	{
		$this->db->select('*');
		$this->db->from('tb_toko');
	   	$this->db->where('id_toko', $id);
		return $this->db->get()->row(0);
	}

	function insert_data($logo)
	{
		$data = array (
			'nama_toko' => $this->input->post('nama_toko'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'logo' => $logo,
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'date_created' => date("Y-m-d H:i:s"),
		);

		$this->db->insert('tb_toko', $data);
	}

	function update_data($id, $logo)
	{
		$data = array (
			'nama_toko' => $this->input->post('nama_toko'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'logo' => $logo,
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'date_created' => date("Y-m-d H:i:s"),
		);

		if ($logo != null) {
			$data['logo'] = $logo;
		  }

		  $this->db->where('id_toko', $id);
		  $this->db->update('tb_toko', $data);
	}

	function delete_data($id)
	{
		$this->db->where('id_toko',$id);
		$this->db->delete('tb_toko');
	}
}

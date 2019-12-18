<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model {

		function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_service');
		$this->db->order_by('id_service');
		return $this->db->get()->result();
	}

	function get_id($id)
	{
		$this->db->select('*');
		$this->db->from('tb_service');
	   	$this->db->where('id_service', $id);
		return $this->db->get()->row(0);
	}

	function get_name_data()
	{
		$this->db->select("tb_service.*, (SELECT nama_toko FROM tb_toko WHERE 
					id_toko = tb_service.toko_id) AS nama_toko");

        return $this->db->get('tb_service')->result();
	}

	function insert_data()
	{
		$data = array (
			'toko_id' => $this->input->post('toko_id'),
			'jenis_service' => $this->input->post('jenis_service'),
			'keterangan' => $this->input->post('keterangan'),
			'date_created' => date("Y-m-d H:i:s"),
		);

		$this->db->insert('tb_service', $data);
	}

	function update_data($id)
	{
		$data = array (
			'toko_id' => $this->input->post('toko_id'),
			'jenis_service' => $this->input->post('jenis_service'),
			'keterangan' => $this->input->post('keterangan'),
			'date_edited' => date("Y-m-d H:i:s"),
		);

		  $this->db->set($data);
		  $this->db->where('id_service', $id);
		  $this->db->update('tb_service', $data);
	}

	function delete_data($id)
	{
		$this->db->where('id_service',$id);
		$this->db->delete('tb_service');
	}
}

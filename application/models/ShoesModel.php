<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoesModel extends CI_Model {
    
    function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_tipe_sepatu');
		$this->db->order_by('id_tipe');
		return $this->db->get()->result();
	}

	function get_id($id)
	{
		$this->db->select('*');
		$this->db->from('tb_tipe_sepatu');
	   	$this->db->where('id_tipe', $id);
		return $this->db->get()->row(0);
	}

	function insert_data($foto)
	{
		$data = array (
			'foto' => $foto,
			'jenis_sepatu' => $this->input->post('jenis_sepatu'),
			'keterangan' => $this->input->post('keterangan'),
			'date_created' => date("Y-m-d H:i:s"),
		);

		$this->db->insert('tb_tipe_sepatu', $data);
	}

	function update_data($id, $foto)
	{
		$data = array (
			'foto' => $foto,
			'jenis_service' => $this->input->post('jenis_service'),
			'keterangan' => $this->input->post('keterangan'),
			'date_created' => date("Y-m-d H:i:s"),
		);

		  $this->db->set($data);
		  $this->db->where('id_tipe', $id);
		  $this->db->update('tb_tipe_sepatu', $data);
	}

	function delete_data($id)
	{
		$this->db->where('id_tipe',$id);
		$this->db->delete('tb_tipe_sepatu');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiModel extends CI_Model {

	function get_all_pegawai()
	{
		$this->db->select('*');
		$this->db->from('tb_pegawai');
		$this->db->order_by('id_pegawai');
		return $this->db->get()->result();
    }

    function get_sub()
    {
        $this->db->select("tb_pegawai.*, (SELECT nama_toko FROM tb_toko WHERE 
                    id_toko = tb_pegawai.toko_id) AS nama_toko");

        return $this->db->get('tb_pegawai')->result();
    }

	function get_id($id)
	{
		$this->db->select('*');
		$this->db->from('tb_pegawai');
	   	$this->db->where('id_pegawai', $id);
		return $this->db->get()->row(0);
	}

	function insert_data($foto)
	{
		$data = array (
			'nama_pegawai' => $this->input->post('nama_pegawai'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),  
			'toko_id' => $this->input->post('toko_id'),
            'foto' => $foto,
            'role_id' => 3,
            'is_active' => 1,
            'date_created' => date("Y-m-d H:i:s"),
		);

		$this->db->insert('tb_pegawai', $data);
	}

	function update_data($id, $foto)
	{
		$data = array (
			'nama_pegawai' => $this->input->post('nama_pegawai'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),  
			'toko_id' => $this->input->post('toko_id'),
            'foto' => $foto,
            'date_created' => date("Y-m-d H:i:s"),
		);

		if ($foto != null) {
			$data['foto'] = $foto;
		  }

		  $this->db->set($data);
		  $this->db->where('id_pegawai', $id);
		  $this->db->update('tb_pegawai', $data);
	}

	function delete_data($id)
	{
		$this->db->where('id_pegawai',$id);
		$this->db->delete('tb_pegawai');
	}
}

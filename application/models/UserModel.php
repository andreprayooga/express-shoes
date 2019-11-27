<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	function get_all_user()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->order_by('id_user');
		return $this->db->get()->result();
    }
    
    function get_id($id)
    {
        $this->db->select('*');
		$this->db->from('tb_user');
	   	$this->db->where('id_user', $id);
		return $this->db->get()->row(0);
    }

    function insert_data()
    {
        $data = [
            'nama_user' => $this->input->post('nama_user'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'role_id' => 1,
            'is_active' => 1,
            'date_created' => date("Y-m-d H:i:s"),
        ];
        
    }

    function update_data($id)
    {
        $data = [
            'nama_user' => $this->input->post('nama_user'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'date_created' => date("Y-m-d H:i:s"),
        ];

        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);
    }

    function delete($id)
    {
        $this->db->where('id_user',$id);
		$this->db->delete('tb_user');
    }
}

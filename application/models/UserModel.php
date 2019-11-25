<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function get_all_user()
	{
        $this->db->select("tb_user.*");
		$this->db->order_by('id_user','desc');
		return $this->db->get('tb_user')->result();
    }
    
    public function get_id($id)
    {
        return $this->db->where('id_user',$id)->get('tb_user')->row(0);
    }

    public function insert()
    {
        $data = [
            'nama_user' => htmlspecialchars($this->input->post('nama_user', TRUE)),
            'email' => htmlspecialchars($this->input->post('email', TRUE)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'foto' => 'default.jpg',
            'role_id' => 1,
            'is_active' => 1,
            'date_created' => date("Y-m-d H:i:s"),
        ];
        
    }

    public function update($id)
    {
        $data = [
            'nama_user' => htmlspecialchars($this->input->post('nama_user', TRUE)),
            'email' => htmlspecialchars($this->input->post('email', TRUE)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'no_telp' => $this->input->post('no_telp'),
            'alamat' => $this->input->post('alamat'),
            'foto' => 'user.png',
            'toko_id' => $this->input->post('toko_id'),
            'sepatu_id' => $this->input->post('sepatu_id'),
            'is_active' => 1,
            'date_created' => date("Y-m-d H:i:s"),
        ];

        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_user',$id);
		$delete = $this->db->delete('tb_user');
    }
}

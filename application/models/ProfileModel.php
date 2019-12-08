<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileModel extends CI_Model {

function get_sub()
    {
        $this->db->select("tb_admin.*, (SELECT keterangan FROM tb_role WHERE 
					id_level = tb_admin.role_id) AS keterangan");

        return $this->db->get('tb_admin')->result();
    }
}
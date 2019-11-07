<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

	public function get_id()
	{
		$this->db->where('id_admin', $id)->get('tb_admin')->row(0);
	}
}

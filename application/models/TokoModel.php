<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TokoModel extends CI_Model {

   public function get()
   {
        $this->db->select("tb_toko.*");
        $this->db->order_by('id_toko','desc');
        return $this->db->get('tb_toko')->result();
   }

   public function get_id($id)
	{
		return $this->db->where('id_toko',$id)->get('tb_toko')->row(0);
   }
   
   public function insert($data)
   {
      $this->db->insert('tb_toko', $data);
   }
}

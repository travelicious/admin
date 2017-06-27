<?php

class Manager_model extends CI_Model
{

	public function fetch_customer()

	{

   $query = $this->db->query("select * from customer order by id desc");
   return $query;
	}
}

?>
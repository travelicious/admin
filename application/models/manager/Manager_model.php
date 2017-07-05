<?php

class Manager_model extends CI_Model
{

	public function fetch_customer()

	{

   $query = $this->db->query("select customer.*,tbl_user.name as assigned_employee_name,tbl_user.user_type as employee_user_type from customer,tbl_user where tbl_user.id = customer.assign_to order by customer.id desc");
   return $query;
	}

	
}

?>
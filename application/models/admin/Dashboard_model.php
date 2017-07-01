<?php
class Dashboard_model extends CI_Model
{
 public function fetchCounts()
	{
		$unassignedValue = $this->db->query("SELECT id FROM customer WHERE assign_to IS NULL");
		$noOfExicutive = $this->db->query("SELECT id FROM tbl_user WHERE user_type = 'exe'");
		$pendingValue = $this->db->query("SELECT id FROM customer WHERE status=0");
		$assignButNotComplete = $this->db->query("SELECT status FROM customer WHERE NOT assign_to = 'NULL' AND status = 0");
		$unassignedValue = $unassignedValue->num_rows();
		$noOfExicutive = $noOfExicutive->num_rows();
		$pendingValue = $pendingValue->num_rows();
		$assignButNotComplete =$assignButNotComplete->num_rows();
		$data = array('unassignedValue'=>$unassignedValue,'noOfExicutive'=>$noOfExicutive,'pendingValue'=>$pendingValue,'assignButNotComplete'=>$assignButNotComplete);
		return $data;
	}
	
	public function to_do_list_data(){   
         $data = $this->db->query("select to_do_list.id,to_do_list.title,to_do_list.created_date,tbl_user.name from to_do_list left join tbl_user on to_do_list.emp_id = tbl_user.id");
          $data = $data->result();
            return $data;
         }

}

?>
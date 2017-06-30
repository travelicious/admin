<?php
class Admin extends CI_Model
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
	

	public function fetch_notification()
	{
		$query =$this->db->query("select * from to_do_list order by id ");

      return $query;

	}
}

?>
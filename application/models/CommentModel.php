<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CommentModel extends CI_Model 
{
    public function __construct()
	{
	  parent::__construct();	
	}
	
	
	public function getAllComment($taskId)
	{
	  $query = "select comments.comments, comments.created_date, tbl_user.name from comments inner join tbl_user on comments.emp_id=tbl_user.id where comments.task_id=$taskId";
	  $results = $this->db->query($query);
	  if(!empty($results->result()))
	  {
		return $results->result();  
	  }
      else
      {
	    return false;	  
	  } 		  
	}
	
	
	
	public function totalNoOfComment($taskId)
	{
	  $query = "select * from comments where task_id=$taskId";
      $results = $this->db->query($query);
	  return $results->num_rows();
	}
}

?>
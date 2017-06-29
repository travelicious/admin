<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CommentModel extends CI_Model 
{
    public function __construct()
	{
	  parent::__construct();	
	}
	
	
	public function getAllComment()
	{
	  $query = "select comments.comments, comments.created_date, tbl_user.name from comments left join tbl_user on comments.emp_id=tbl_user.id";
	  $results = $this->db->query($query);
	  if(!empty($results))
	  {
		return $results->result();  
	  }
      else
      {
	    return false;	  
	  } 		  
	}
}

?>
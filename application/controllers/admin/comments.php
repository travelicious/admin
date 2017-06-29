<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends BackendController 
{
	public function __construct()
	{
		parent::__construct();
	}
	
	
	/*
	  created by shahnawaz
	*/
	/*public function comments()
	{
	  if($this->input->method == 'post')
	  {
		$formData = $this->input->post(); 
        if(!empty($formData))
		{
		  $empId = $formData['empId'];
          $taskId = $formData['taskId'];
          $comment = $formData['comment'];
          $createdDate = $formData['created_date']  		  
		}			
	  }		  
	}*/
}

?>
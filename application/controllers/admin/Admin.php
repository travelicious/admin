<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends BackendController 
{
   public function __construct()
   {
     parent::construct();	   
   }
   
   
   public function index()
   {
	   
   }
   
   
   public function createTask()
   {
     if($this->input->method == 'post')
	 {
	        	 
	 }	
	 else
	 {
	   $this->load->view('admin/createTask');	 
	 }
   }
}

?>
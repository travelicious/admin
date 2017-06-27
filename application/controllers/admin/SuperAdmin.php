<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin extends BackendController 
{
   public function __construct()
   {
     parent::__construct();	   
   }
   
   
   public function index()
   {
	   
   }
   
   
   public function createTask()
   {
     echo $this->input->method();
	 if($this->input->method() == 'post')
	 {
	   print_r($this->input->post());
	   die;
	   $createTaskModel = $this->load->model('createtask');     	 
	 }	
	 else
	 {
	   $data['page_title'] = 'Create Task';
       $data['breadcrumb'] = 'Create Task';
       $data['main_content'] = 'admin/createTask';

       $this->load->view('admin/layouts/home', $data); 
	 }
   }
}

?>
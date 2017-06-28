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
   
   /*
    Created by shahnawaz 
	This function create task or customer
   */
   public function createTask()
   {
     $flag = false; 
	 if($this->input->method() == 'post')         // Post request handling
	 {
	   $formData = $this->input->post();
	   $name = $formData['name'];
	   $email = $formData['email'];
	   $address = $formData['address'];
	   $country = $formData['country'];
	   $phone = $formData['phone'];
	   if(!empty($formData['assign']))           // Check if task assigned or not
	   {
	     if(empty($formData['managerList']) && !empty($formData['executiveList'])) 
		 {
		   $employeeId = $formData['executiveList']; 	 
		   $flag = true;
		 }	
         else if(!empty($formData['managerList']) && empty($formData['executiveList'])) 		 
		 {
			$employeeId = $formData['managerList']; 
			$flag = true;
		 }
	   }
	   if($flag == true)
	   {
         $data = ['name' => $name, 'email' => $email, 'address' => $address, 'country' => $country, 'phone' => $phone, 'assign_to' => $employeeId];
	   }
	   else
	   {
		 $data = ['name' => $name, 'email' => $email, 'address' => $address, 'country' => $country, 'phone' => $phone];
	   }
	   if($this->db->insert('customer', $data))        // Insert data in customer Table
	   {
	     $data['page_title'] = 'Create Task';
         $data['breadcrumb'] = 'Create Task';
         $data['main_content'] = 'admin/superAdmin/createTask';
         $data['successMessage'] = "Task Successfully created"; 
         //$this->load->view('admin/layouts/home', $data);
         redirect('admin/superadmin/viewTask');		 
	   }
	   else
	   {
		   
	   }
	 }	
	 else                 // Get request handling
	 {
	   $query1 = "select name, id  from tbl_user where user_type='mgr'";
	   $query2 = "select name, id  from tbl_user where user_type='exe'";
	   
	   $managerList = $this->db->query($query1);          // Get manager list from tbl_user
	   $managerList = $managerList->result();
	   if(!empty($managerList))
	   {
	     $data['managerList'] = $managerList; 	   
	   }
	   
	   $executiveList = $this->db->query($query2);
	   $executiveList = $executiveList->result();
	   if(!empty($executiveList))                       // Get executive list from tbl_user 
	   {
	     $data['executiveList'] = $executiveList; 	   
	   }
	   
	   $data['page_title'] = 'Create Task';
       $data['breadcrumb'] = 'Create Task';
       $data['main_content'] = 'admin/superAdmin/createTask';

       $this->load->view('admin/layouts/home', $data); 
	 }
   }
   
   
   
   /*
    Created by Shahnawaz
	This function display all tasks
   */
   public function viewTask()
   {
	 $data = array();
     $query = "select * from customer";                   // Fetch all tasks from customer table   
     $tasks = $this->db->query($query);	 
	 $tasks = $tasks->result();
	 if(!empty($tasks))
	 {
	   $data['tasks'] = $tasks; 	 
	 }
	 $data['page_title'] = 'View Tasks';
     $data['breadcrumb'] = 'View Tasks';
     $data['main_content'] = 'admin/superAdmin/viewTasks';

     $this->load->view('admin/layouts/home', $data); 
	}
}

?>
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
	   if(!empty($formData['id']))        // update data in customer Table
	   {
		 if($this->db->update('customer', $data, array('id' => $formData['id'])))
		 {
		   $this->session->set_flashdata('updateSuccessMessage', 'Task successfully Updated');
           redirect('admin/superadmin/viewTask');		 
	     }
	   }
	   else                           // Insert data in customer table
	   {
		 if($this->db->insert('customer', $data))   
	     {
		   redirect('admin/superadmin/viewTask');		  	 
		 }
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
	 $assign = new stdClass();
     $query = "select customer.*,tbl_user.name as assigned_employee_name, tbl_user.user_type from customer left join tbl_user on tbl_user.id = customer.assign_to order by customer.id desc";
	 $tasks = $this->db->query($query);	 
	 $tasks = $tasks->result();
	 if(!empty($tasks))
	 {
	   $data['tasks'] = $tasks; 	 
	 }
	 $data['page_title'] = 'View Tasks';
     $data['breadcrumb'] = 'View Tasks';
	 
	 if(!empty($this->session->flashdata('deleteSuccessMessage')))              // Set messages for view page
	 {
	   $data['deleteSuccessMessage'] = $this->session->flashdata('deleteSuccessMessage'); 	 
	 }
	 if(!empty($this->session->flashdata('createSuccessMessage')))
	 {
	   $data['createSuccessMessage'] = $this->session->flashdata('createSuccessMessage'); 	 
	 }
	 if(!empty($this->session->flashdata('updateSuccessMessage')))
	 {
	   $data['updateSuccessMessage'] = $this->session->flashdata('updateSuccessMessage'); 	 
	 }
	 
	 
     $data['main_content'] = 'admin/superAdmin/viewTasks';

     $this->load->view('admin/layouts/home', $data); 
	}

/*
Code----By Gourav rajput-----

add employee in tbl_user

*/

	public function add_employee()

	{

		$this->load->model('admin/Superadmin_model');
        if($this->input->post('submit'))
        {
           $this->Superadmin_model->insert();

           redirect('admin/superAdmin/add_employee');
           
        }


	 $data['page_title'] = 'Add employee';
     $data['breadcrumb'] = 'View Tasks';
	 $data['main_content'] = 'admin/superAdmin/add_employee';

		$this->load->view('admin/layouts/home', $data); 
	}



/*
Code----By suvendra singh-----

add employee in tbl_user

*/
public function view_employee()
{


	$this->load->model('admin/Superadmin_model');

     $data['page_title'] = 'view employee';
     $data['breadcrumb'] = 'View Employee';

     $data["fetch_data"]=$this->Superadmin_model->fetch_employee();



     $data['main_content'] = 'admin/superAdmin/view_employee';

		$this->load->view('admin/layouts/home', $data); 
}


 public function delete_employee($id=null)
    {

       $query = $this->db->query("delete from tbl_user where id=$id "); 

         redirect('/admin/superAdmin/view_employee');

        
    }



	
	
	
	
	/*
	  Created by Shahnawaz
	  This function delete task with given id
    */
	public function delete($id=null)
	{
	  if($id != null)
	  {
	    $query = "delete from customer where id=$id";
		if($this->db->query($query))
		{
	      $this->session->set_flashdata('deleteSuccessMessage', 'Task Succesfully Deleted'); 
          redirect('admin/superadmin/viewTask');		 
	   }
	  }		  
	}
	
	
	/*
	  Created by Shahnawaz
	  This function edit task with given id
    */
    public function edit($id=null)
	{
	  if($id != null)
	  {
	    $query = "select * from customer where id=$id";	
        $results = $this->db->query($query);
		$results = $results->result();
		foreach($results as $result)
		{
		  $results = $result;  	
		}
		if(!empty($results))
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
		   
		   $data['id'] = $results->id;                 // Get value for populate form fields
		   $data['name'] = $results->name;
		   $data['email'] = $results->email;
		   $data['address'] = $results->address;
		   $data['country'] = $results->country;
           $data['phone'] = $results->phone;

		   
		   $data['page_title'] = 'Create Task';
		   $data['breadcrumb'] = 'Create Task';
		   $data['main_content'] = 'admin/superAdmin/createTask';

		   $this->load->view('admin/layouts/home', $data);	
		}			
	  }		  
	}	
	

}


?>
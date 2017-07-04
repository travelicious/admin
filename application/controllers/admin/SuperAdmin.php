<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin extends BackendController 
{
   public function __construct()
   {
     parent::__construct();	 
     $this->load->model('admin/Admin');  
     $this->load->model('admin/Superadmin_model');
   }
   
   
   public function index()
   {
	   
   }
   
   /*
    Created by shahnawaz 
	This function create task or customer
   */
   public function create_task()
   {
	 $flag = false; 
	 if($this->input->method() == 'post')         // Post request handling
	 {
	   $formData = $this->input->post();
	   $name = $formData['name'];
	   $email = $formData['email'];
	   $country = $formData['country'];
	   $phone = $formData['phone'];
	   $destination = $formData['destination'];
	   $domain     = $formData['domain'];
	   $source     = $formData['source'];
       $customer_requirement = $formData['customer_requirement'];  
       $arrival_date = $formData['arrival_date'];  
       $duration = $formData['duration'];	   
       $no_of_adults = $formData['no_of_adults'];
	   $no_of_kids = $formData['no_of_kids'];
	   $hotel_category = $formData['hotel_category'];
	   
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
         $data = ['name' => $name, 'email' => $email, 'country' => $country, 
		          'phone' => $phone,'destination' => $destination,'domain' => $domain, 
		          'source' => $source, 'assign_to' => $employeeId, 'customer_requirement' => $customer_requirement, 
				  'arrival_date' => $arrival_date, 'duration' => $duration, 'no_of_adults' => $no_of_adults, 
				  'no_of_kids' => $no_of_kids, 'hotel_category' => $hotel_category];
	   }
	   else
	   {
		 $data = ['name' => $name, 'email' => $email, 
		          'country' => $country, 'phone' => $phone,'destination' => $destination, 
				  'domain' => $domain, 'source' => $source, 'customer_requirement' => $customer_requirement,
				  'arrival_date' => $arrival_date, 'duration' => $duration, 'no_of_adults' => $adults, 
				  'no_of_kids' => $kids, 'hotel_category' => $hotel_category];
	   }
	   if(!empty($formData['id']))        // update data in customer Table
	   {
		 if($this->db->update('customer', $data, array('id' => $formData['id'])))
		 {
		   $this->session->set_flashdata('updateSuccessMessage', 'Task successfully Updated');
           redirect('admin/superadmin/view-task');		 
	     }
	   }
	   else                           // Insert data in customer table
	   {
		 if($this->db->insert('customer', $data))   
	     {
		   redirect('admin/superadmin/view_task');		  	 
		 }
	   }
	 }	
	 else                 // Get request handling
	 {
	   $query1 = "select name, id, email from tbl_user where user_type='mgr'";
	   $query2 = "select name, id, email from tbl_user where user_type='exe'";
	   
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
       $data['main_content'] = 'admin/superAdmin/create_task';



      $data["fetch_notification"] = $this->Admin->fetch_notification();

       $this->load->view('admin/layouts/home', $data); 
	 }
   }
   
   
   
   /*
    Created by Shahnawaz
	This function display all tasks
   */


   public function view_task($flag=NULL)
   {
	 $data = array();
     
     if($flag == 'deleted')    // Make query for view only deleted task
	 {
	   $query = "select customer.*, tbl_user.name as assigned_employee_name, tbl_user.user_type from customer left join tbl_user on customer.assign_to = tbl_user.id where customer.flag =0";
	   $data['retrievedTask'] = true;
	 }
	 else        // Make query for view all tasks
	 {
	   $query = "select customer.*, tbl_user.name as assigned_employee_name, tbl_user.user_type from customer left join tbl_user on customer.assign_to = tbl_user.id where customer.flag =1";

	   
	 }

	 $tasks = $this->db->query($query);	 
	 $tasks = $tasks->result();
	 if(!empty($tasks))
	 {
	   $data['tasks'] = $tasks; 	 
	 }
	 
	 //print_r($tasks);
	 //die;
	  
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
	 if(!empty($this->session->flashdata('retrieveSuccessMessage')))
	 {
	   $data['retrieveSuccessMessage'] = $this->session->flashdata('retrieveSuccessMessage'); 	 
	 }
	 
	 
     
     $data['main_content'] = 'admin/superAdmin/view_task';

     $data["fetch_notification"] = $this->Admin->fetch_notification();


     $this->load->view('admin/layouts/home', $data); 
	}
	
	
	

/*
Code----By Gourav rajput-----

add employee in tbl_user

*/

	public function add_employee()

	{

	
        if($this->input->post('submit'))
        {
           $this->Superadmin_model->insert();

           redirect('admin/superAdmin/add_employee');
           
        }


	 $data['page_title'] = 'Add employee';
     $data['breadcrumb'] = 'View Tasks';
	 $data['main_content'] = 'admin/superAdmin/add_employee';

	 $data["fetch_notification"] = $this->Admin->fetch_notification();

		$this->load->view('admin/layouts/home', $data); 
	}


	
	

/*
Code----By suvendra singh-----

add employee in tbl_user

*/
public function view_employee()
{



     $data['page_title'] = 'view employee';
     $data['breadcrumb'] = 'View Employee';

     $data["fetch_data"]=$this->Superadmin_model->fetch_employee();



     $data['main_content'] = 'admin/superAdmin/view_employee';


     $data["fetch_notification"] = $this->Admin->fetch_notification();

		$this->load->view('admin/layouts/home', $data); 
}


 public function edit_employee($id)


    {

     $data['page_title'] = 'view employee';
     $data['breadcrumb'] = 'View Employee';

       
        $data['fetch_employee_edit']= $this->Superadmin_model->fetch_employee_edit($id);

        $data['main_content'] = 'admin/superAdmin/edit_employee';
         $data["fetch_notification"] = $this->Admin->fetch_notification();
        
     $this->load->view('admin/layouts/home', $data); 
       

         
}



 public function delete_employee($id=null)
    {

       $query = $this->db->query("delete from tbl_user where id=$id "); 

         redirect('/admin/superAdmin/view_employee');

        
    }




public function employee_detail($id) {

        $data['detail'] = $this->Superadmin_model->fetch_employee_detail($id);
        
        $data['page_title'] = 'Employee Details';
        $data['breadcrumb'] = 'Employee Details';
        $data['main_content'] = 'admin/superAdmin/employee_detail';
        
        $data["fetch_notification"] = $this->Admin->fetch_notification();
        $this->load->view('admin/layouts/home', $data);
    }






        public function save_employee()
    {
        $id = $_POST['id'];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
       // $password = $_POST["password"];
        $usertype = $_POST["user_type"];
        $address = $_POST["address"];
       
       if ($usertype =="") {
        echo "string";exit;
          $this->db->query("UPDATE tbl_user SET name = '$name' , email = '$email' , contact = '$contact' , address = '$address'  where id = '".$id."'");
          }else{
       $queryUpdate = $this->db->query("UPDATE tbl_user SET name = '$name' , email = '$email' , contact = '$contact' , user_type = '$usertype' , address = '$address'  where id = '".$id."'");
   }
        redirect('admin/superAdmin/view_employee');
    }



	
	/*
	  Created by Shahnawaz
	  This function delete task with given id
    */
	public function delete_task($id=null)
	{
	  if($id != null)
	  {
	    $query = "update customer set flag = 0 where id=$id";
		if($this->db->query($query))
		{
	      $this->session->set_flashdata('deleteSuccessMessage', 'Task Succesfully Deleted'); 
          redirect('admin/superadmin/view-task');		 
	   }
	  }		  
	}
	
	
	/*
	  Created by Shahnawaz
	  This function edit task with given id
    */
    public function edit_task($id=null)
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
		   $query1 = "select name, id, email from tbl_user where user_type='mgr'";
		   $query2 = "select name, id, email from tbl_user where user_type='exe'";
		   
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
		   $data['domain'] = $results->domain;
		   $data['country'] = $results->country;
           $data['phone'] = $results->phone;
           $data['destination'] = $results->destination;
           $data['source'] = $results->source;
		   $data['customer_requirement'] = $results->customer_requirement;
		   $data['domain'] = $results->domain;
           $data['arrival_date'] = $results->arrival_date;
           $data['duration'] = $results->duration;
           $data['no_of_adults'] = $results->no_of_adults;
           $data['no_of_kids'] = $results->no_of_kids;
           $data['hotel_category'] = $results->hotel_category;
              
		   
		   $data['page_title'] = 'Create Task';
		   $data['breadcrumb'] = 'Create Task';
		   $data['edit_task'] = true;
		   $data['main_content'] = 'admin/superAdmin/create_task';
		   $data["fetch_notification"] = $this->Admin->fetch_notification();

		   $this->load->view('admin/layouts/home', $data);	
		}			
	  }		  
	}

    /*
	  Created by Shahnawaz
	*/
   
    public function retrieve_task($id=null)
	{
	  if($id != null)
	  {
		$query = "update customer set flag = 1 where id=$id";; 
        if($this->db->query($query))
		{
		  $this->session->set_flashdata('retrieveSuccessMessage', 'Task Succesfully Retrieved'); 
          redirect('admin/superadmin/view-task');		  	
		}			
	  }		  
	}





    /*
	  Created by Shahnawaz
	*/
    public function customer_by_date_list($date_str) {
        $this->load->helper('date');
        $today_date = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $seven_days = date('Y-m-d', strtotime("-7 days"));
        $fifteen_days = date('Y-m-d', strtotime("-15 days"));

        $uid = $_SESSION['logged_in']['id'];
        if ($date_str == 'today') {
            $data['today_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$today_date' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            
			$this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'yesterday') {
            $data['yesterday_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$yesterday' and and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();

            $this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'svn_days') {
            $data['svn_days_list'] = $this->db->query("select * from customer where created_date between '$seven_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'fiftn_days') {
            $data['fiftn_days_list'] = $this->db->query("select * from customer where created_date between '$fifteen_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();

            $this->load->view('admin/executive/date_wise_customer_list', $data);
        }
    }

    public function whatsapp_loader() {
        $data['page_title'] = 'WhatsAPP';
        $data['breadcrumb'] = 'WhatsAPP';
        $data['main_content'] = 'admin/executive/whatsapp';
        $data["fetch_notification"] = $this->Admin->fetch_notification();

        $this->load->view('admin/layouts/home', $data);
    }

	
	/*
	  Created by Shahnawaz
	*/
    public function customer_by_date() {

        if ($this->input->post('date_to') != "" || $this->input->post('date_from') != "") {
            $data['list_between_date_range'] = $this->db->query("select * from customer where created_date between '" . $this->input->post('date_from') . "'  and '" . $this->input->post('date_to') . "' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            $this->load->view('admin/executive/date_wise_customer_list', $data);
        }
    }
	
	
	
	/*
	  Created by Shahnawaz
	*/
     public function date_wise_followup($follow_up) {
        $this->load->helper('date');
        $today_date = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $seven_days = date('Y-m-d', strtotime("-7 days"));
        $fifteen_days = date('Y-m-d', strtotime("-15 days"));
        $next_seven_days = date('Y-m-d', strtotime("+7 days"));
        $next_fifteen_days = date('Y-m-d', strtotime("+15 days"));
        $next_thirty_days = date('Y-m-d', strtotime("+30 days"));

        $uid = $_SESSION['logged_in']['id'];
        if ($follow_up == 'today_followup') {
            $data['today_followup'] = $this->db->query("select * from customer where Date(`next_followup`) = '$today_date'and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'yesterday_followup') {
            $data['yesterday_followup'] = $this->db->query("select * from customer where Date(`next_followup`) = '$yesterday'and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'svn_days_followup') {
            $data['svn_days_followup'] = $this->db->query("select * from customer where next_followup between '$seven_days' and '$today_date' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'fiftn_days_followup') {
            $data['fiftn_days_followup'] = $this->db->query("select * from customer where next_followup between '$fifteen_days' and '$today_date' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_svn_days_followup') {
            $data['next_svn_days_followup'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_seven_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_fiftn_days_followup') {
            $data['next_fiftn_days_followup'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_fifteen_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_thirty_days_followup') {
            $data['next_thirty_days_followup'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_thirty_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        }
    }
    
	
	
	

	/*__________________________ notification query Alamgir ____________________ */

    public function notification()
    {
      $this->load->model('admin/Superadmin_model');

      $data['fetch_notification_query']= $this->Superadmin_model->notification_query();

      echo json_encode($data['fetch_notification_query']->result());

    }

    /*__________________________ notification query end ____________________ */

}


?>
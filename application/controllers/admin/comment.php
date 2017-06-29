<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends BackendController {

    public function __construct() {
        parent::__construct();
		
        $this->load->model('admin/Comments_model');
    }


    //Created by shahnawaz
	public function showCommentBox($id) {
        $data['indv_custmr'] = $this->Comments_model->fetch_customer_by_id($id);
        $this->load->model('commentModel');
		$results = $this->commentModel->getAllComment();
		if(!empty($results))
		{
		  $data['allComment'] = $results;	
		}
		$data['page_title'] = 'Customer Details';
        $data['breadcrumb'] = 'Customer Details';
        $data['main_content'] = 'admin/comment/show_comment_box';
        $this->load->view('admin/layouts/home', $data);
    }
	
	
	
	
	//Created by shahnawaz   	  
    public function saveComment()
	{
	  $uid = $_SESSION['logged_in']['id'];
	  if($this->input->method() == 'post')
	  {
	    $formData = $this->input->post();	 
        if(!empty($formData) && !empty($formData['task_id']) && !empty($formData['comment']) && !empty($uid))
		{	
		  $this->load->helper('date');
		  $date = date('d-m-Y');
		  $taskId = $formData['task_id'];
		  $empId = $uid;
		  $comment = $formData['comment'];
		  
		  $sql = "insert into comments (task_id, comments, emp_id)
		          values($taskId, '$comment', $empId)";
				  
	      if($this->db->query($sql))
		  {
		    $this->showCommentBox($taskId);   
		  }			  
		}			
	  }
    }

}

?>
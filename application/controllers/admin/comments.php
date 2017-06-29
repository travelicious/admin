<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends BackendController {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Comments_model');
    }

    public function showCommentBox($id) {
        $data['indv_custmr'] = $this->Comments_model->fetch_customer_by_id($id);
        $data['page_title'] = 'Customer Details';
        $data['breadcrumb'] = 'Customer Details';
        $data['main_content'] = 'admin/comments/Customer_details';
        $this->load->view('admin/layouts/home', $data);
    }

    public function add_next_followup() {

        $dates = $this->input->post('followup');
        $followup_comment = array(
        'task_id' => $this->input->post('task_id'),
        'comments' => 'Next follow-up date:'. $dates,
        'emp_id ' => $uid = $_SESSION['logged_in']['id'],
        );
       
       $insrt_ok =  $this->db->insert('comments',$followup_comment);
       $updt_ok  = $this->db->query("update customer set  next_followup = '$dates' where id = ".$followup_comment['task_id']."");
       $this->showCommentBox($followup_comment['task_id']);
        
        
    }

}

?>
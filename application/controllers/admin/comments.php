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
//        $followup_comment = array(
//        'task_id' =>,
//        'comments'=>,
//        'emp_id' =>,
//        );
    }

}

?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends BackendController {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Comments_model');
        $this->load->model('admin/Admin');
    }

    public function showCommentBox($id) 
	{

        $data['indv_custmr'] = $this->Comments_model->fetch_customer_by_id($id);
        $allPvtComment = $this->Comments_model->getAllPvtComment($id);
        $allComment = $this->Comments_model->getAllComment($id);
        $noOfComment = $this->Comments_model->totalNoOfComment($id);
        if (!empty($allComment) && !empty($noOfComment)) {
            $data['allComment'] = $allComment;
            $data['noOfComment'] = $noOfComment;
        }
        if (!empty($allPvtComment)) {
            $data['allPvtComment'] = $allPvtComment;
        }
        $data['page_title'] = 'Customer Details';
        $data['breadcrumb'] = 'Customer Details';
        $data['main_content'] = 'admin/comment/show_comment_box';

        $data["fetch_notification"] = $this->Admin->fetch_notification();
        $this->load->view('admin/layouts/home', $data);
    }

//Created by shahnawaz      
    public function saveComment() {
        $uid = $_SESSION['logged_in']['id'];
        if ($this->input->method() == 'post') {
            $formData = $this->input->post();
            if (!empty($formData) && !empty($formData['task_id']) && !empty($formData['comment']) && !empty($uid)) {
                $this->load->helper('date');
                $date = date('d-m-Y');
                $taskId = $formData['task_id'];
                $empId = $uid;
                $comment = $formData['comment'];

                $sql = "insert into comments(task_id, comments, emp_id) values($taskId, '$comment', $empId)";

                if ($this->db->query($sql)) {
                    redirect("admin/comment/showCommentBox/" . $taskId);
                }
            }
        }
    }

    function add_next_followup() {

        $dates = $this->input->post('followup');
        $followup_comment = array(
            'task_id' => $this->input->post('task_id'),
            'comments' => 'Next follow-up date:' . $dates,
            'emp_id ' => $uid = $_SESSION['logged_in']['id'],
        );

        $insrt_ok = $this->db->insert('comments', $followup_comment);
        $updt_ok = $this->db->query("update customer set  next_followup = '$dates' where id = " . $followup_comment['task_id'] . "");
        redirect("admin/comment/showCommentBox/" . $followup_comment['task_id']);
    }

    public function save_finished_comment_Form() {
        $id = $this->input->post('id_comment');
        $comment = $this->input->post('finished_comment');
        $uid = $_SESSION['logged_in']['id'];

        $update_finished = $this->db->query("update customer set  complete_status  = 1 where id = $id");

        $finished_comment = array(
        'task_id' =>$id,
        'comments'=>$comment,
        'emp_id'=>$uid,
        );
        $finished_comment_status = $this->db->insert('comments', $finished_comment);
        if($finished_comment_status){
            redirect("admin/executive");
        }
    }
    
    public function save_postponed_comment_Form() {
        $id = $this->input->post('id_comment');
        $comment = $this->input->post('postpond_comment');
        $uid = $_SESSION['logged_in']['id'];

        $update_finished = $this->db->query("update customer set   postpond_status   = 1 where id = $id");

        $finished_comment = array(
        'task_id' =>$id,
        'comments'=>$comment,
        'emp_id'=>$uid,
        );
        $finished_comment_status = $this->db->insert('comments', $finished_comment);
        if($finished_comment_status){
            redirect("admin/executive");
        }
    }
    public function save_cancel_comment_Form() {
        $id = $this->input->post('id_comment');
        $comment = $this->input->post('cancel_comment');
        $uid = $_SESSION['logged_in']['id'];

        $update_finished = $this->db->query("update customer set  cancel_status  = 1 where id = $id");

        $finished_comment = array(
        'task_id' =>$id,
        'comments'=>$comment,
        'emp_id'=>$uid,
        );
        $finished_comment_status = $this->db->insert('comments', $finished_comment);
        if($finished_comment_status){
            redirect("admin/executive");
        }
    }

    function add_pvt_next_followup() {

        $dates = $this->input->post('pvt_followup');
        $followup_comment = array(
            'task_id' => $this->input->post('task_id'),
            'comments' => 'Next follow-up date:' . $dates,
            'emp_id ' => $uid = $_SESSION['logged_in']['id'],
        );

        $insrt_ok = $this->db->insert('pvt_comments', $followup_comment);
        $updt_ok = $this->db->query("update customer set  next_followup_pvt = '$dates' where id = " . $followup_comment['task_id'] . "");
        redirect("admin/comment/showCommentBox/" . $followup_comment['task_id']);
    }

    //Created by Saket
    public function savePvtComment() {
        $uid = $_SESSION['logged_in']['id'];
        if ($this->input->method() == 'post') {
            $formData = $this->input->post();
            if (!empty($formData) && !empty($formData['task_id']) && !empty($formData['comment']) && !empty($uid)) {
                $this->load->helper('date');
                $date = date('d-m-Y');
                $taskId = $formData['task_id'];
                $empId = $uid;
                $comment = $formData['comment'];

                $sql = "insert into pvt_comments(task_id, comments, emp_id) values($taskId, '$comment', $empId)";

                if ($this->db->query($sql)) {
                    redirect("admin/comment/showCommentBox/" . $taskId);
                }
            }
        }
    }

}

?>
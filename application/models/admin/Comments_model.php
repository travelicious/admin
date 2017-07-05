<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

    function fetch_customer_by_id($id) {
        $customer_query = $this->db->query("select * from customer where id = $id")->first_row();
        return $customer_query;
    }

    public function getAllComment($taskId) {
        $query = "select comments.comments, comments.created_date, tbl_user.name from comments inner join tbl_user on comments.emp_id=tbl_user.id where comments.task_id=$taskId order by comments.created_date ASC ";
        $results = $this->db->query($query);
        if (!empty($results->result())) {
            return $results->result();
        } else {
            return false;
        }
    }

    public function getAllPvtComment($taskId) {
        $query = "select pvt_comments.comments, pvt_comments.created_date, tbl_user.name from pvt_comments inner join tbl_user on pvt_comments.emp_id=tbl_user.id where pvt_comments.task_id=$taskId order by pvt_comments.created_date ASC ";
        $results = $this->db->query($query);
        if (!empty($results->result())) {
            return $results->result();
        } else {
            return false;
        }
    }

    public function totalNoOfComment($taskId) {
        $query = "select * from comments where task_id=$taskId";
        $results = $this->db->query($query);
        return $results->num_rows();
    }

    

   

}

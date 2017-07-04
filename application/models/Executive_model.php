<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Executive_model extends CI_Model {

    function fetch_customer($uid) {
        $query = $this->db->query("select * from customer where assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
        return $query;
    }

    function customer_completed_list($uid) {

//        Note 
//        1 = TASK COMPLETE STATUS
//        0 = TASK NOT COMPLETE 

        $query = $this->db->query("select * from customer where assign_to = $uid and  complete_status = 1 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
        return $query;
    }

    function customer_postponed_list($uid) {
        //        Note 
//        1 = TASK POSTPONED STATUS
//        0 = TASK NOT POSTPONED  

        $query = $this->db->query("select * from customer where assign_to = $uid and   postpond_status = 1  and   flag = 1 order by id desc")->result();
        return $query;
    }

    function customer_cancel_list($uid) {
        //        Note 
//        1 = TASK CANCEL STATUS
//        0 = TASK NOT CANCEL 

        $query = $this->db->query("select * from customer where assign_to = $uid and  cancel_status = 1 and   flag = 1 order by id desc")->result();
        return $query;
    }

}

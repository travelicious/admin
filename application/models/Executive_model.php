<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Executive_model extends CI_Model {

     function fetch_customer($uid) {
        $query = $this->db->query("select * from customer where assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
        return $query;
        
    }
   
    

}

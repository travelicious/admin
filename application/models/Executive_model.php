<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Executive_model extends CI_Model {

     function fetch_customer($uid) {
        $query = $this->db->query("select * from customer where assign_to = $uid order by id desc")->result();
        return $query;
        
    }
    

}

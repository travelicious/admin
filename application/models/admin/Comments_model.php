<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

     function fetch_customer_by_id($id){
        $customer_query = $this->db->query("select * from customer where id = $id")->first_row();
        return $customer_query;
    }

}

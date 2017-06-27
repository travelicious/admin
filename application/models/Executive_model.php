<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Executive_model extends CI_Model {

    public function fetch_customer() {
        $query = $this->db->query("select * from customer order by id desc")->result();
        
        return $query;
        
    }

}

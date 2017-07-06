<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function login_check($username, $password) {
        $pass = md5($password);
        $user_data = $this->db->query("select * from tbl_user where email = '$username' and password  = '$pass'")->first_row();
        return $user_data;
    }

}

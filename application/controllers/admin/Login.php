<?php

/**
 * Created by PhpStorm.
 * User: Saket
 * Date: 6/19/2017
 * Time: 3:54 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends BackendController {
    function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function authenticate() {
       if ($this->input->post('username') != "" && $this->input->post('password')) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $result = $this->Login_model->login_check($username, $password);
            if($result){
                $sess = array(
                    'name'=>$result->name,
                    'uid'=>$result->user_type,
                    'email'=>$result->email,
                );
                $this->session->set_userdata('logged_in', $sess);
                redirect('admin/dashboard');
            }else{
                 $this->session->set_flashdata('msg', 'Your Username/Password is wrong. Please try again.');
                 redirect('admin/welcome');
            }
       }
    }

}

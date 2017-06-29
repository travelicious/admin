<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    private $user_id;
    private $user_type;
   
  
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
                    'id'=>$result->id,
                );
                $this->session->set_userdata('logged_in', $sess);
                
                $this->user_id = $sess['id'];
                
                
                redirect('admin/dashboard');
            }else{
                 $this->session->set_flashdata('msg', 'Your Username/Password is wrong. Please try again.');
                 redirect('admin/welcome');
            }
       }
    }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Executive extends BackendController {
    function __construct() {
        parent::__construct();
        $this->load->model('Executive_model');
    }

    public function index() {
        $data['customer_list']=$this->Executive_model->fetch_customer();
        $data['page_title'] = 'View Customer';
        $data['breadcrumb'] = 'View Customer';
        $data['main_content'] = 'admin/executive/view_customer';
        $this->load->view('admin/layouts/home',$data);
      
    }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends BackendController {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Comments_model');
    }

    public function customer_details($id) {
        $data['indv_custmr'] = $this->Comments_model->fetch_customer_by_id($id);
        $data['page_title'] = 'Customer Details';
        $data['breadcrumb'] = 'Customer Details';
        $data['main_content'] = 'admin/executive/Customer_details';
        $this->load->view('admin/layouts/home', $data);
    }

}

?>
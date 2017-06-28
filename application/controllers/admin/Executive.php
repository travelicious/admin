<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Executive extends BackendController {

    function __construct() {
        parent::__construct();
        $this->load->model('Executive_model');
    }

    public function index() {
        if (!isset($this->session->userdata['logged_in'])) {
            $this->session->set_flashdata('no_user', 'Please Login');
            redirect('admin/welcome');
        }

        $uid = $_SESSION['logged_in']['id'];
        $data['customer_list'] = $this->Executive_model->fetch_customer($uid);
        $data['page_title'] = 'View Customer';
        $data['breadcrumb'] = 'View Customer';
        $data['main_content'] = 'admin/executive/view_customer';
        $this->load->view('admin/layouts/home', $data);
    }
    public function customer_details($id) {
        $data['indv_custmr'] = $this->Executive_model->fetch_customer_by_id($id);
        $data['page_title'] = 'Customer Details';
        $data['breadcrumb'] = 'Customer Details';
        $data['main_content'] = 'admin/executive/Customer Details';
        $this->load->view('admin/layouts/home', $data);
        
    }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Executive extends BackendController {

    function __construct() 
    {
        parent::__construct();
       $this->load->model('Executive_model');
       $this->load->model('admin/Admin');
         
    }

    public function index()
     {
        if (!isset($this->session->userdata['logged_in'])) {
            $this->session->set_flashdata('no_user', 'Please Login');
            redirect('admin/welcome');
        }


        $uid = $_SESSION['logged_in']['id'];


       

        $data['customer_list'] = $this->Executive_model->fetch_customer($uid);
        $data['page_title'] = 'View Customer';
        $data['breadcrumb'] = 'View Customer';
        $data['main_content'] = 'admin/executive/view_customer';


        $data["fetch_notification"] = $this->Admin->fetch_notification();

        $this->load->view('admin/layouts/home', $data);
    }

    public function customer_by_date() {
        $uid = $_SESSION['logged_in']['id'];

        if ($this->input->post('date_to') != "" || $this->input->post('date_from') != "") {
            $data['list_between_date_range'] = $this->db->query("select * from customer where created_date between '" . $this->input->post('date_from') . "'  and '" . $this->input->post('date_to') . "' and assign_to = $uid ")->result();
            $this->load->view('admin/executive/date_wise_customer_list', $data);
        }
    }

}

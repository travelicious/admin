<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Executive extends BackendController {

    function __construct() {
        parent::__construct();
        $this->load->model('Executive_model');
        $this->load->model('admin/Admin');
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

    public function customer_by_date_list($date_str) {
        $this->load->helper('date');
        $today_date = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $seven_days = date('Y-m-d', strtotime("-7 days"));
        $fifteen_days = date('Y-m-d', strtotime("-15 days"));

        $uid = $_SESSION['logged_in']['id'];
        if ($date_str == 'today') {
            $data['today_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$today_date' and assign_to = $uid  ")->result();
            $this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'yesterday') {
            $data['yesterday_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$yesterday' and assign_to = $uid  ")->result();

            $this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'svn_days') {
            $data['svn_days_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$seven_days' and assign_to = $uid  ")->result();

            $this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'fiftn_days') {
            $data['fiftn_days_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$fifteen_days' and assign_to = $uid  ")->result();

            $this->load->view('admin/executive/date_wise_customer_list', $data);
        }
    }

    public function whatsapp_loader() {
        $data['page_title'] = 'WhatsAPP';
        $data['breadcrumb'] = 'WhatsAPP';
        $data['main_content'] = 'admin/executive/whatsapp';
        $data["fetch_notification"] = $this->Admin->fetch_notification();

        $this->load->view('admin/layouts/home', $data);
    }

}

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
            $data['list_between_date_range'] = $this->db->query("select * from customer where created_date between '" . $this->input->post('date_from') . "'  and '" . $this->input->post('date_to') . "' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
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
            $data['today_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$today_date' and assign_to = $uid  and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            $this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'yesterday') {
            $data['yesterday_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$yesterday' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();

            $this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'svn_days') {
            $data['svn_days_list'] = $this->db->query("select * from customer where created_date between '$seven_days' and '$today_date' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list', $data);
        } else if ($date_str == 'fiftn_days') {
            $data['fiftn_days_list'] = $this->db->query("select * from customer where created_date between '$fifteen_days' and '$today_date' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();

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

    public function date_wise_followup($follow_up) {
        $this->load->helper('date');
        $today_date = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $seven_days = date('Y-m-d', strtotime("-7 days"));
        $fifteen_days = date('Y-m-d', strtotime("-15 days"));
        $next_seven_days = date('Y-m-d', strtotime("+7 days"));
        $next_fifteen_days = date('Y-m-d', strtotime("+15 days"));
        $next_thirty_days = date('Y-m-d', strtotime("+30 days"));

        $uid = $_SESSION['logged_in']['id'];
        if ($follow_up == 'today_followup') {
            $data['today_followup'] = $this->db->query("select * from customer where Date(`next_followup`) = '$today_date' and assign_to = $uid  and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'yesterday_followup') {
            $data['yesterday_followup'] = $this->db->query("select * from customer where Date(`next_followup`) = '$yesterday' and assign_to = $uid  and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'svn_days_followup') {
            $data['svn_days_followup'] = $this->db->query("select * from customer where next_followup between '$seven_days' and '$today_date' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'fiftn_days_followup') {
            $data['fiftn_days_followup'] = $this->db->query("select * from customer where next_followup between '$fifteen_days' and '$today_date' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_svn_days_followup') {
            $data['next_svn_days_followup'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_seven_days' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_fiftn_days_followup') {
            $data['next_fiftn_days_followup'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_fifteen_days' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_thirty_days_followup') {
            $data['next_thirty_days_followup'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_thirty_days' and assign_to = $uid and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        }
    }

    public function completed_task() {
        $uid = $_SESSION['logged_in']['id'];

        $data['customer_completed_list'] = $this->Executive_model->customer_completed_list($uid);
        $data['page_title'] = 'Completed Task';
        $data['breadcrumb'] = 'Completed Task';
        $data['main_content'] = 'admin/executive/completed_task';


        $data["fetch_notification"] = $this->Admin->fetch_notification();

        $this->load->view('admin/layouts/home', $data);
    }

    public function postpond_task() {
        $uid = $_SESSION['logged_in']['id'];

        $data['customer_postponed_list'] = $this->Executive_model->customer_postponed_list($uid);
        $data['page_title'] = 'Postponed Task';
        $data['breadcrumb'] = 'Postponed Task';
        $data['main_content'] = 'admin/executive/customer_postponed_list';


        $data["fetch_notification"] = $this->Admin->fetch_notification();

        $this->load->view('admin/layouts/home', $data);
    }
    public function customer_cancel_list() {
        $uid = $_SESSION['logged_in']['id'];

        $data['customer_cancel_list'] = $this->Executive_model->customer_cancel_list($uid);
        $data['page_title'] = 'Postponed Task';
        $data['breadcrumb'] = 'Postponed Task';
        $data['main_content'] = 'admin/executive/customer_cancel_list';


        $data["fetch_notification"] = $this->Admin->fetch_notification();

        $this->load->view('admin/layouts/home', $data);
    }

}

<?php

defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Manager extends BackendController
{
    public function __construct()
   {
     parent::__construct();  
     $this->load->model('admin/Admin');  
   }


    public function index()
     {


     	$this->load->model('manager/Manager_model'); 

        $data['page_title'] = 'View Customer';
        $data['breadcrumb'] = 'View Customer';

        $data['fetch_data'] = $this->Manager_model->fetch_customer();
    

        $data['main_content'] = 'admin/manager/view_customer';

        $data["fetch_notification"] = $this->Admin->fetch_notification();
        $this->load->view('admin/layouts/home',$data);

}


    public function assign_work()
     {
     	$this->load->model('manager/Manager_model');

        $data['page_title'] = 'Assign Work';
        $data['breadcrumb'] = 'Assign Work';
    
        $data['main_content'] = 'admin/manager/assign_work';

           $data["fetch_notification"] = $this->Admin->fetch_notification();
        $this->load->view('admin/layouts/home',$data);

}


public function customer_by_date_list($date_str) {
        $this->load->helper('date');
        $today_date = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime("-1 days"));
        $seven_days = date('Y-m-d', strtotime("-7 days"));
        $fifteen_days = date('Y-m-d', strtotime("-15 days"));

        $uid = $_SESSION['logged_in']['id'];
        if ($date_str == 'today') {
           // echo $uid;exit;
            $data['customer_added_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$today_date' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
        //print_r($data) ;exit;
            $this->load->view('admin/manager/date_wise_customer_list', $data);
        } else if ($date_str == 'yesterday') {

            $data['customer_added_list'] = $this->db->query("select * from customer where Date(`created_date`) = '$yesterday' and complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();

            $this->load->view('admin/manager/date_wise_customer_list', $data);
        } else if ($date_str == 'svn_days') {
            $data['customer_added_list'] = $this->db->query("select * from customer where created_date between '$seven_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            //print_r($data);exit;
            $this->load->view('admin/manager/date_wise_customer_list', $data);
        } else if ($date_str == 'fiftn_days') {
            $data['customer_added_list'] = $this->db->query("select * from customer where created_date between '$fifteen_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();

            $this->load->view('admin/manager/date_wise_customer_list', $data);
        }
    }


    public function customer_by_date() {

        if ($this->input->post('date_to') != "" || $this->input->post('date_from') != "") {
            $data['customer_added_list'] = $this->db->query("select * from customer where created_date between '" . $this->input->post('date_from') . "'  and '" . $this->input->post('date_to') . "' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();

            $this->load->view('admin/manager/date_wise_customer_list', $data);
        }
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
            $data['fllow_up_date_list'] = $this->db->query("select * from customer where Date(`next_followup`) = '$today_date'and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'yesterday_followup') {
            $data['fllow_up_date_list'] = $this->db->query("select * from customer where Date(`next_followup`) = '$yesterday'and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'svn_days_followup') {
            $data['fllow_up_date_list'] = $this->db->query("select * from customer where next_followup between '$seven_days' and '$today_date' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'fiftn_days_followup') {
            $data['fllow_up_date_list'] = $this->db->query("select * from customer where next_followup between '$fifteen_days' and '$today_date' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_svn_days_followup') {
            $data['fllow_up_date_list'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_seven_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_fiftn_days_followup') {
            $data['fllow_up_date_list'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_fifteen_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        } else if ($follow_up == 'next_thirty_days_followup') {
            $data['fllow_up_date_list'] = $this->db->query("select * from customer where next_followup between '$today_date' and '$next_thirty_days' and  complete_status = 0 and  postpond_status = 0 and  cancel_status = 0 and   flag = 1 order by id desc ")->result();
            $this->load->view('admin/executive/date_wise_customer_list_for_next_followup', $data);
        }
    }


}

?>
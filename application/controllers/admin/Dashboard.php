<?php

/**
 * Created by PhpStorm.
 * User: Saket
 * Date: 6/19/2017
 * Time: 3:54 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends BackendController {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/Admin');
         
    }

    public function index()
    {
        if(!isset($this->session->userdata['logged_in'])){
        $this->session->set_flashdata('no_user', 'Please Login');
        redirect('admin/welcome');
        }
        $data['page_title'] = 'Dashboard';
        $data['breadcrumb'] = 'Dashboard';
        $data['main_content'] = 'admin/dashboard';
        $this->load->model("admin/Dashboard_model");
	    $data['dashboardData'] = $this->Dashboard_model->fetchCounts();
        $data['toDoDashboardData'] = $this->Dashboard_model->to_do_list_data();
        $data['tbl_user_data'] = $this->Dashboard_model->tbl_user_data();
        $data["fetch_notification"]=$this->Admin->fetch_notification();

        $this->load->view('admin/layouts/home', $data);
	}

    public function delete($id=null)
    {
        if(!isset($this->session->userdata['logged_in']))
        {
          $this->session->set_flashdata('no_user', 'Please Login');
          redirect('admin/welcome');
        }
        if($id != null)
        {
          $this->db->query("update to_do_list set flag = '0' where id='$id'");
          redirect('/admin/dashboard');
        }

    }

     public function markAsComplete ($id=null)
    {
        if(!isset($this->session->userdata['logged_in']))
        {
          $this->session->set_flashdata('no_user', 'Please Login');
          redirect('admin/welcome');
        }
        if($id != null)
        {
          $this->db->query("update to_do_list set status ='1' where id='$id'");
          redirect('/admin/dashboard');
        }

    }
}
?>
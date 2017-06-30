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
        $this->load->view('admin/layouts/home', $data);
	}

    public function delete($id=null){
        if(!isset($this->session->userdata['logged_in'])){
          $this->session->set_flashdata('no_user', 'Please Login');
          redirect('admin/welcome');
        }
        if($id != null){
          $this->db->query("delete from to_do_list where id='$id'");
          redirect('/admin/dashboard');
        }

    }
  
}

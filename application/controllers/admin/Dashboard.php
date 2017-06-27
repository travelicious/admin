<?php

/**
 * Created by PhpStorm.
 * User: Saket
 * Date: 6/19/2017
 * Time: 3:54 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends BackendController {

 
    public function index() {
        if(!isset($this->session->userdata['logged_in'])){
            $this->session->set_flashdata('no_user', 'Please Login');
                 redirect('admin/welcome');
        }


        $data['page_title'] = 'Dashboard';
        $data['breadcrumb'] = 'Dashboard';
        $data['main_content'] = 'admin/dashboard';

        $this->load->view('admin/layouts/home', $data);
    }

}

<?php

/**
 * Created by PhpStorm.
 * User: Saket
 * Date: 6/19/2017
 * Time: 3:54 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends BackendController {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
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

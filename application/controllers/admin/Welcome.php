<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends BackendController {

    public function index() {
        $this->load->view('admin/layouts/css');
        $this->load->view('admin/login');
        $this->load->view('admin/layouts/js');

        if (isset($_SESSION['logged_in'])) {
    		redirect('admin/dashboard');
		}
    }

}

<?php

/**
 * Created by PhpStorm.
 * User: Saket
 * Date: 6/19/2017
 * Time: 3:54 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends BackendController {

    public function index() {
        $this->load->view('admin/layouts/css');
        $this->load->view('admin/login');
        $this->load->view('admin/layouts/js');
    }

}

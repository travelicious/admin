<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signout extends BackendController {

    public function index() {
        $this->load->view('admin/signout');
        redirect('admin/welcome');
    }

}

?>
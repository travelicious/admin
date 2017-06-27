<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Executive extends BackendController {

    public function index() {
        $data['page_title'] = 'View Customer';
        $data['breadcrumb'] = 'View Customer';
        $data['main_content'] = 'admin/view_customer';
        $this->load->view('admin/layouts/home',$data);
      
    }

}

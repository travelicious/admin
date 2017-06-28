<?php

defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Manager extends BackendController
{


    public function index()
     {
     	$this->load->model('manager/Manager_model');   
        $data['page_title'] = 'View Customer';
        $data['breadcrumb'] = 'View Customer';

        $data['fetch_data'] = $this->Manager_model->fetch_customer();
    

        $data['main_content'] = 'admin/manager/view_customer';
        $this->load->view('admin/layouts/home',$data);

}

}

?>
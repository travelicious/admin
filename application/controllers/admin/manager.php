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


}

?>
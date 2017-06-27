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
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {

        /* User Name is coming from its Parent Class Backend Controller */
        $data['user_name'] = $this->site_data['user_name'];
        $data['user_reg_date'] = $this->site_data['user_reg_date'];
        $data['page_title'] = 'Dashboard';
        $data['breadcrumb'] = 'Dashboard';
        $data['main_content'] = 'admin/dashboard';

        /* These data as $data are bieng sent to view */
        $this->load->view('admin/layouts/home',$data);
    }
}


<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class CommonController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

class FrontendController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
    }
}

class BackendController extends CommonController
{
    protected $site_data;


    public function __construct()
    {
        parent::__construct();
        $this->site_data = array(
            'user_name' => 'Saket Anand',
            'user_reg_date' => 'Dec 2013'
        );
    }
}

<?php

class Superadmin_model extends CI_Model
{

 public function insert()
    {

        $insert_data = Array (

            'name'          => $this->input->post('name'),

            'email'         => $this->input->post('email'),

            'contact'       => $this->input->post('contact'),

            'password'      => md5($this->input->post('password')),

            'user_type'     => $this->input->post('user_type'),

            'address'       => $this->input->post('address')
        );
  
        $this->db->insert('tbl_user',$insert_data);
    }

    public function fetch_employee()
    {

       $query = $this->db->query("select * from tbl_user order by id desc"); 
         return $query; 

        
    }
    public function fetch_employee_edit($id)
    {
      // echo $id;exit;
       $query = $this->db->query("select * from tbl_user where id = '$id'  order by id desc "); 
         return $query; 

    }

/*__________________________ notification query ____________________ */

    public function notification_query()
    {
      // echo $id;exit;
       $query = $this->db->query("select id,name from customer where status = '0' "); 
         return $query; 

    }

    /*__________________________ notification query end ____________________ */

   
}

?>
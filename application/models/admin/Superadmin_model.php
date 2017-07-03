
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



    function fetch_employee_detail($id) {


        $query = $this->db->query("select tbl_user.*, customer.name,customer.id as cst_id,customer.email as cst_email, customer.phone as cst_contact , customer.country as cst_country, customer.created_date as cst_created_at from tbl_user, customer where tbl_user.id = $id and customer.assign_to = $id ");

        return $query;
    }

   
}

?>
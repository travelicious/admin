
<?php

class Superadmin_model extends CI_Model
{

 public function insert()
    {

        $insert_data = Array (

            'name'          => $this->input->post('name'),

            'email'         => $this->input->post('email'),

            'contact'       => $this->input->post('contact'),

            'password'      => $this->input->post('password'),

            'user_type'     => $this->input->post('user_type'),

            'address'       => $this->input->post('address')
        );
  
        $this->db->insert('tbl_user',$insert_data);
    }
}

?>
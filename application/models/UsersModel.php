<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {
    public function get_users()
    {
        $query = $this->db->get("users");
        return $query->result();
    }

    public function insert_user()
    {
        $data = array(
        'first_name' => $this->input->post('firstname'),
        'last_name' => $this->input->post('lastname'),
        'position' => $this->input->post('position'),
        'created_date' => date('Y-m-d')
        );
        
        return $this->db->insert('users', $data);
    }

    public function update_user($id)
    {
        $data=array(
            'first_name'=>$this->input->post('firstname'),
            'last_name'=>$this->input->post('lastname'),
            'position'=>$this->input->post('position')
        );
        if(empty($id)){
            return $this->db->insert('users', $data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('users', $data);
        }
    }

}
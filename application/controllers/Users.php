<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 * 
 */
class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel');
    }

    public function index()
    {
        $users = new UsersModel;
        $data['users'] = $users->get_users();
        $this->load->view('users/list',$data);
    }

    public function create()
    {
        $this->load->view('users/create');
    }

    public function store()
    {
        $users = new UsersModel;
        $users->insert_user();
        redirect(base_url('users'));
    }

    public function edit($id)
    {
        $user = $this->db->get_where('users',array('id'=>$id))->row();
        $this->load->view('users/edit',array('user' => $user));
    }

    public function update($id)
    {
        $users = new UsersModel;
        $users->update_user($id);
        redirect(base_url('users'));
    }

    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('users');
        redirect(base_url('users'));
    }
}
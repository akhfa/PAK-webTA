<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($_username, $_email, $_password)
    {
        $this->db->select('username');
        $this->db->from('users');
        $this->db->where('username', $_username);
        $this->db->limit(1);

        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
            return false;
        }
        else
        {
            $data = array(
                'username'  => $_username,
                'email'     => $_email,
                'password'  => $_password
            );
            $this->db->insert('users', $data);
            return true;
        }
    }
}
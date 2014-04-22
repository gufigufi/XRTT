<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function get_info($tetle)
    {
        $this->db->where('page',$tetle);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    function check_login($username)
    {
        $this->db->where('username',$username);
        $this->db->select('username');
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    function check_pswd($pswd,$user)
    {
        $this->db->where('password',$pswd);
        $this->db->where('username',$user);
        $this->db->select('username');
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    function register ($new)
    {
        $this->db->insert('users',$new);
    }

    function login($user,$pswd)
    {
        $this->db->where('username',$user);
        $this->db->where('password',$pswd);
        $this->db->select('username');
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    function user_info($user)
    {
        $this->db->where('username',$user);
        $query = $this->db->get('users');
        return $query->row_array();
    }

    function update_pswd($login,$new)
    {
        $this->db->where('username',$login);
        $this->db->update('users',$new);
    }

}

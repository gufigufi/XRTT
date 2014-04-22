<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    function check_admin($user,$pswd)
    {
        $this->db->where('username',$user);
        $this->db->where('password',$pswd);
        $query = $this->db->get('users');
        if($query->num_rows() >0)
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

    function add ($page,$add)
    {
        $this->db->insert($page,$add);
    }

    function get_editlist_main($page)
    {
        $this->db->order_by('id');
        $query = $this->db->get($page);
        return $query->result_array();
    }

    function get_editlist($page,$status)
    {
        $this->db->where('status',$status);
        $this->db->order_by('id');
        $query = $this->db->get($page);
        return $query->result_array();
    }

    function get_editlist_admin()
    {
        $this->db->select('users.username, users.id , admins.title')->from('users')->join('u967380007_xrtt.admins', 'users.status=admins.id','lheft')->order_by('users.status');
        $query = $this->db->get();
        return $query->result_array();
    }


    function get_info($page,$id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get($page);
        return $query->row_array();
    }

    function get_admin_status()
    {
        $query = $this->db->get('admins');
        return $query->result_array();
    }

    function edit($page,$edit,$id)
    {
        $this->db->where('id',$id);
        $this->db->update($page,$edit);
    }

    function userslist()
    {
        $this->db->order_by('id','desc');
        $query = $this->db->get('users');
        return $query->result_array();
    }

    function del($page,$id)
    {
        $this->db->where('id',$id);
        $this->db->delete($page);
    }

}

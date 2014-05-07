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

    function add_albom($add)
    {
        $this->db->insert('albom',$add);
    }

    function add_photo($file,$id)
    {
        foreach($file as $item):
            $data['id_albom'] = $id;
            $data['img'] = $item['data'];
            $this->db->insert('galery',$data);
        endforeach;
    }

    function get_albom_info($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('albom');
        return $query->row_array();
    }

    function get_editlist_main($page)
    {
        $this->db->order_by('id','desc');
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

    function get_editlist_photo($id)
    {
        $this->db->select('albom.title_en, galery.id , galery.img')->from('galery')->join('u967380007_xrtt.albom', 'galery.id_albom=albom.id','lheft')->where('galery.id_albom',$id);
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

    function del_albom($id)
    {
        $this->db->query("DELETE FROM albom WHERE id = $id");
        $this->db->query("DELETE FROM galery WHERE id_albom = $id");
    }

}

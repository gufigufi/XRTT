<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles_model extends CI_Model {

    public function get_all_articles($num,$offset)
    {
        $this->db->order_by('id','desc');
        $query = $this->db->get('articles',$num,$offset);
        return $query->result_array();
    }

    public function get_cat_articles($cat)
    {
        $this->db->where('category',$cat);
        $this->db->order_by('id','desc');
        $query = $this->db->get('articles');
        return $query->result_array();
    }

    function get_article($title)
    {
        $this->db->where('title_en',$title);
        $query = $this->db->get('articles');
        return $query->row_array();
    }

    function add_comment($add)
    {
        $this->db->insert('comments',$add);
    }

    function get_comments ($title)
    {
        $this->db->order_by('id','desc');
        $this->db->where('note_id',$title);
        $query = $this->db->get('comments');
        return $query->result_array();
    }
}

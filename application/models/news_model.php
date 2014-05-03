<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

    function get_info($tetle)
    {
        $this->db->where('page',$tetle);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    function get_news($num, $offset)
    {
        //$query = $this->db->get('news',$num, $offset);
        if(!$offset) $offset = 0;
        $query = $this->db->query("SELECT id, text, title, DATE_FORMAT(date,'%d.%m.%Y %h:%i:%s') AS date FROM news ORDER BY date DESC  LIMIT $offset,$num");
        return $query->result_array();
    }

    function get_news_left()
    {
        $this->db->select('title')->from('news')->order_by('date','desc')->limit(5);
        $query = $this->db->get();
        return $query->result_array();
    }

}

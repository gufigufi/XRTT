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
        $query = $this->db->query("SELECT id, text, title, DATE_FORMAT(data_date,'%d.%m.%Y %H:%i:%s') AS data_date FROM news ORDER BY data_date DESC  LIMIT $offset,$num");
        return $query->result_array();
    }

    function get_news_left()
    {
        $this->db->select('title')->from('news')->order_by('data_date','desc')->limit(4);
        $query = $this->db->get();
        return $query->result_array();
    }

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

    function get_info($tetle)
    {
        $this->db->where('page',$tetle);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    public function get_news()
    {
        $query = $this->db->query("SELECT id, text, title, DATE_FORMAT(date,'%d.%m.%Y %h:%i:%s') AS date FROM news");
        return $query->result_array();
    }

}

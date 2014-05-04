<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galery_model extends CI_Model {

    function get_info($tetle)
    {
        $this->db->where('page',$tetle);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    function get_galery($num, $offset)
    {
        //$query = $this->db->get('news',$num, $offset);
        if(!$offset) $offset = 0;
        $query = $this->db->query("SELECT * AS date FROM news ORDER BY date DESC  LIMIT $offset,$num");
        return $query->result_array();
    }

    function get_photo()
    {
        $query = $this->db->get('galery');
        return $query->result_array();
    }

}

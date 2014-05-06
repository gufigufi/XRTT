<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galery_model extends CI_Model {

    function get_info($tetle)
    {
        $this->db->where('page',$tetle);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    function get_albom($num, $offset)
    {
        $query = $this->db->get('albom',$num, $offset);
        return $query->result_array();
    }

    function get_photo()
    {
        $query = $this->db->get('galery');
        return $query->result_array();
    }

}

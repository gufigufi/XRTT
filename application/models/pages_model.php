<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model {

    function get_pages_info($title)
    {
        $this->db->where('title_en', $title);
        $query = $this->db->get('page');
        return $query->row_array();
    }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model {

    function get_pages_info($title)
    {
        $query = $this->db->query("SELECT id, text, title, title_en, DATE_FORMAT(data_date,'%d.%m.%Y %H:%i:%s') AS data_date FROM page WHERE title_en='$title'");
        return $query->row_array();
    }
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Best_model extends CI_Model {

    function get_info($tetle)
    {
        $this->db->where('page',$tetle);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    public function get_best()
    {
        $query = $this->db->get('best_students');
        return $query->result_array();
    }

    public function get_stependiat()
    {
        $query = $this->db->get('registered_fellows');
        return $query->result_array();
    }

}

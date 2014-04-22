<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rukovodstvo_model extends CI_Model {

    function get_info($tetle)
    {
        $this->db->where('page',$tetle);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    public function get_rukovodstvo()
    {
        $this->db->order_by('id');
        $query = $this->db->get('rukovodstvo');
        return $query->result_array();
    }

}

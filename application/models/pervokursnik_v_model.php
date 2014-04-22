<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pervokursnik_v_model extends CI_Model {

    function get_info($tetle)
    {
        $this->db->where('page',$tetle);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    public function get_pervokursnik()
    {
        $query = $this->db->get('pervokursnik');
        return $query->result_array();
    }

    public function get_pervokursnik_full($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('pervokursnik');
        return $query->row_array();
    }

    public function get_vipusknik()
    {
        $query = $this->db->get('vipusknik');
        return $query->result_array();
    }

    public function get_vipusknik_full($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('vipusknik');
        return $query->row_array();
    }

}

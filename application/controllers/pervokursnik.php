<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pervokursnik extends CI_Controller {

    public function index()
    {
        $this->load->model('pervokursnik_v_model');
        $data['pages_info'] = $this->pervokursnik_v_model->get_info('pervokursnik_v');
        $data['pervokursnik'] = $this->pervokursnik_v_model->get_pervokursnik();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'pervokursnik';
        $this->template->page_view($data,$name);
    }

    public function pervokursnik_full($id='')
    {
        $this->load->model('pervokursnik_v_model');
        $data['pages_info'] = $this->pervokursnik_v_model->get_info('pervokursnik_v');
        $data['pervokursnik'] = $this->pervokursnik_v_model->get_pervokursnik_full($id);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'pervokursnik_full';
        $this->template->page_view($data,$name);
    }
}

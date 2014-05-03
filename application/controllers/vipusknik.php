<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vipusknik extends CI_Controller {

    public function index()
    {
        $this->load->model('news_model');
        $data['news_left'] = $this->news_model->get_news_left();
        $this->load->model('pervokursnik_v_model');
        $data['pages_info'] = $this->pervokursnik_v_model->get_info('vipusknik_v');
        $data['vipusknik'] = $this->pervokursnik_v_model->get_vipusknik();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'vipusknik';
        $this->template->page_view($data,$name);
    }

    public function vipusknik_full($id='')
    {
        $this->load->model('news_model');
        $data['news_left'] = $this->news_model->get_news_left();
        $this->load->model('pervokursnik_v_model');
        $data['pages_info'] = $this->pervokursnik_v_model->get_info('vipusknik_v');
        $data['vipusknik'] = $this->pervokursnik_v_model->get_vipusknik_full($id);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'vipusknik_full';
        $this->template->page_view($data,$name);
    }
}

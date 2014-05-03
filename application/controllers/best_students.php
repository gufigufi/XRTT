<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Best_students extends CI_Controller {

    public function index()
    {
        $this->load->model('news_model');
        $data['news_left'] = $this->news_model->get_news_left();
        $this->load->model('best_model');
        $data['pages_info'] = $this->best_model->get_info('best_students');
        $data['best'] = $this->best_model->get_best();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'best_students';
        $this->template->page_view($data,$name);
    }

    public function registered_fellows()
    {
        $this->load->model('news_model');
        $data['news_left'] = $this->news_model->get_news_left();
        $this->load->model('best_model');
        $data['pages_info'] = $this->best_model->get_info('registered_fellows');
        $data['stependiat'] = $this->best_model->get_stependiat();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'registered_fellows';
        $this->template->page_view($data,$name);
    }
}

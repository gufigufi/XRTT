<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

    public function index()
    {
        $this->load->model('news_model');
        $data['pages_info'] = $this->news_model->get_info('news');
        $data['news'] = $this->news_model->get_news();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'news';
        $this->template->page_view($data,$name);
    }
}

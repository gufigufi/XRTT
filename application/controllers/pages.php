<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
        redirect(base_url());
	}

    function page($title)
    {
        $this->load->model('news_model');
        $data['news_left'] = $this->news_model->get_news_left();
        $data['pages_info'] = $this->pages_model->get_pages_info($title);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['page'] = $title;
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'pages';
        $this->template->page_view($data,$name);
    }
}
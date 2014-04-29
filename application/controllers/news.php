<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

    public function index()
    {
        $config['base_url'] = base_url().'index.php/news/index';
        $config['total_rows'] = $this->db->count_all('news');
        $config['per_page'] = '2';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $config['first_link'] = 'Перша';
        $config['last_link'] = 'Остання';

        $this->pagination->initialize($config);

        $this->load->model('news_model');
        $data['pages_info'] = $this->news_model->get_info('news');
        $data['news'] = $this->news_model->get_news($config['per_page'],$this->uri->segment(3));
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'news';
        $this->template->page_view($data,$name);
    }
}

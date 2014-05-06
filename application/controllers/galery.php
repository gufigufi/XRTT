<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galery extends CI_Controller {

    public function index()
    {
        $this->load->model('news_model');
        $data['news_left'] = $this->news_model->get_news_left();

        $config['base_url'] = base_url().'index.php/galery/index';
        $config['total_rows'] = $this->db->count_all('albom');
        $config['per_page'] = '4';
        $config['full_tag_open'] = '<p class="pagination">';
        $config['full_tag_close'] = '</p>';
        $config['first_link'] = 'Перша';
        $config['last_link'] = 'Остання';

        $this->pagination->initialize($config);

        $this->load->model('galery_model');
        $data['pages_info'] = $this->galery_model->get_info('galery');
        $data['albom'] = $this->galery_model->get_albom($config['per_page'],$this->uri->segment(3));
        $data['photo'] = $this->galery_model->get_photo();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'galery';
        $this->template->page_view($data,$name);
    }
}

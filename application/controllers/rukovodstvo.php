<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rukovodstvo extends CI_Controller {

    public function index()
    {
        $this->load->model('rukovodstvo_model');
        $data['pages_info'] = $this->rukovodstvo_model->get_info('rukovodstvo');
        $data['rukovodstvo'] = $this->rukovodstvo_model->get_rukovodstvo();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'rukovodstvo';
        $this->template->page_view($data,$name);
    }
}
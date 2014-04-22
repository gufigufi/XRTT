<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

    function view ($title)
    {
        $this->load->library('form_validation');
        $this->load->model('articles_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->articles_model->get_article($title);
        $data['categories'] = $this->pages_model->get_cat();
        $data['last_article'] = $this->pages_model->get_latest_articles();
        $data['comments'] = $this->articles_model->get_comments($title);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';
        if(empty($data['pages_info']))
            redirect(base_url());
        $name = 'article';
        if($this->input->post('add'))
        {
            $this->form_validation->set_rules($this->rules_model->comments_rules);
            if($this->form_validation->run())
            {
                $captcha = $this->input->post('captcha');
                if($captcha == $this->session->userdata['captcha'])
                {
                    $comment_data['author'] = $this->input->post('author');
                    $comment_data['comment'] = $this->input->post('comment_text');
                    $comment_data['avatar'] = $this->input->post('avatar');
                    $comment_data['note_id'] = $this->input->post('note_id');
                    $comment_data['date'] = date('Y-m-d');
                    $t = date('H')-'2'.':'.date('i');
                    $comment_data['time'] =  $t;
                    $comment_data['category'] = $this->input->post('cat');

                    $this->articles_model->add_comment($comment_data);
                    redirect(base_url().'index.php/article/'.$title.'#c');
                }
                else
                {
                    $data['error'] = 'Символы с картинки введены не верно';
                    $data['captcha'] = $this->captcha->get_captcha();
                    $this->template->page_view($data,$name);
                }
            }
            else
            {
                $data['captcha'] = $this->captcha->get_captcha();
                $this->template->page_view($data,$name);
            }
        }
        else
        {
            $data['captcha'] = $this->captcha->get_captcha();
            $this->template->page_view($data,$name);
        }
    }
}
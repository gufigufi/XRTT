<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

    function password()
    {
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->login_model->get_info('password');
        $data['categories'] = $this->pages_model->get_cat();
        $data['last_article'] = $this->pages_model->get_latest_articles();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';

        if(!empty($data['user']))
        {
            $this->form_validation->set_rules($this->rules_model->change_pswd_rules);
            $chack = $this->form_validation->run();
            if($chack == TRUE && $this->input->post('change_password'))
            {
                $this->load->model('profile_model');
                $old_pswd = $this->input->post('old_pswd');
                $old_pswd = sha1(md5($old_pswd));
                $new_pswd = $this->input->post('new_pswd');
                $new_pswd2 = $this->input->post('new_pswd2');

                $chack_old_pswd = $this->profile_model->old_pswd_check($data['user']);

                if($chack_old_pswd != $old_pswd)
                {
                    $info_msg = 'Старый пароль не верен!';
                }
                if($new_pswd != $new_pswd2)
                {
                    $info_msg = 'Пароли не совпадают';
                }
                if($chack_old_pswd == $old_pswd && $new_pswd == $new_pswd2)
                {
                    $new_pswd = sha1(md5($new_pswd));
                    $change['password'] = $new_pswd;

                    $this->profile_model->change_pswd($data['user'], $change);

                    $info_msg = 'Пароль успешно сменен';

                }
                else
                {
                    $data['error'] = $info_msg;
                    $name = 'pswd';
                    $this->template->page_view($data,$name);
                }
            }
            else
            {
                $name = 'pswd';
                $this->template->page_view($data,$name);
            }
        }
        else
        {
            $data['error'] = 'Войдите в свой Личный кабинет';
            $name = 'info';
            $this->template->page_view($data,$name);

        }
    }
}
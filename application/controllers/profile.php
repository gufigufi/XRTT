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
            if($this->form_validation->run() && $this->input->post('change_password'))
            {
                $this->load->model('profile_model');
                $old_pswd = $this->input->post('old_pswd');
                $old_pswd = sha1(md5($old_pswd));
                $new_pswd = $this->input->post('new_pswd');
                $new_pswd2 = $this->input->post('new_pswd2');

                $check_old_pswd = $this->profile_model->old_pswd_check($data['user']);

                if($check_old_pswd['password'] != $old_pswd)
                {
                    $info_msg = 'Старый пароль не верен!';
                }
                if($new_pswd != $new_pswd2)
                {
                    $info_msg = 'Пароли не совпадают';
                }
                if($check_old_pswd['password'] == $old_pswd && $new_pswd == $new_pswd2)
                {
                    $new_pswd = sha1(md5($new_pswd));
                    $change['password'] = $new_pswd;

                    $this->profile_model->change_pswd($data['user'], $change);

                    $info_msg = 'Пароль успешно сменен';
                    $data['error'] = $info_msg;
                    $name = 'info';
                    $this->template->page_view($data,$name);

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

    function email ()
    {
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->login_model->get_info('email');
        $data['categories'] = $this->pages_model->get_cat();
        $data['last_article'] = $this->pages_model->get_latest_articles();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';

        if(!empty($data['user']))
        {
            $this->form_validation->set_rules($this->rules_model->change_email_rules);
            if($this->form_validation->run() && $this->input->post('change_email'))
            {
                $this->load->model('profile_model');
                $old_email = $this->input->post('old_email');
                $check_email = $this->profile_model->check_old_email($data['user'],$old_email);
                if($check_email == FALSE)
                {
                    $data['error']  = 'Старый E-mail введен не верно';
                    $name = 'email';
                    $this->template->page_view($data,$name);
                }
                else
                {
                    $update['email'] = $this->input->post('new_email');
                    $this->profile_model->update_email($data['user'],$update);
                    $data['error'] = 'E-mail успешно сменен';
                    $name = 'info';
                    $this->template->page_view($data,$name);
                }
            }
            else
            {
                $name = 'email';
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

    function avatar ()
    {
        $this->load->library('form_validation');
        $this->load->model('login_model');
        $data['pages'] = $this->pages_model->get_pages();
        $data['pages_info'] = $this->login_model->get_info('avatar');
        $data['categories'] = $this->pages_model->get_cat();
        $data['last_article'] = $this->pages_model->get_latest_articles();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['error'] = '';

        if(!empty($data['user']))
        {
            if($this->input->post('change_avatar'))
            {
                $config['upload_path'] = './img/avatars/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '1000';
                $config['encrypt_name']  = TRUE;
                $config['remove_spaces']  = TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                    $data['error'] = $this->upload->display_errors();
                    $name = 'avatar';
                    $this->template->page_view($data,$name);
                }
                else
                {
                    $this->load->model('profile_model');
                    $upload_data = $this->upload->data();
                    $avatar['avatar'] = $upload_data['file_name'];
                    $this->profile_model->update_avatar($data['user'],$avatar);
                    $data['user_info'] = $this->login_model->user_info($data['user']);
                    $ses_data = array (
                        'avatar' => $data['user_info']['avatar']
                    );

                    $config['source_image'] = $upload_data['full_path'];
                    $config['new_image'] = APPPATH.'../img/avatars/thumbs';
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 80;
                    $config['height'] = 80;

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();

                    $this->session->set_userdata($ses_data);
                    $data['error'] = 'Аватар успешно сменен';
                    $name = 'info';
                    $this->template->page_view($data,$name);
                }
            }
            else
            {
                $name = 'avatar';
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
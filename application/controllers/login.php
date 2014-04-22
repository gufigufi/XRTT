<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function index()
    {
        $this->load->model('login_model');
        $data['pages_info'] = $this->login_model->get_info('register');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['error'] = '';
        $name = 'info';
        if($this->input->post('enter') && $this->input->post('login') && $this->input->post('password'))
        {
            $username = $this->input->post('login');
            $password = $this->input->post('password');
            $password = sha1(md5($password));
            $login = $this->login_model->login($username,$password);
            if($login)
            {
                $data['user_info'] = $this->login_model->user_info($username);
                $ses_data = array(
                    'user' => $username,
                    'status' => $data['user_info']['status']
                );
                $this->session->set_userdata($ses_data);
                redirect(base_url());
            }
            else $data['error'] = 'Логін та пароль не співпадають';
        }
        else $data['error'] = 'Ви звернулися до сторінки без параметрів';
        $this->template->page_view($data,$name);
    }

    function edit_pswd()
    {
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $data['pages_info'] = $this->login_model->get_info('users');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['error'] = '';
        $name = 'pswd';
        if(!empty($data['user']))
        {
            $this->form_validation->set_rules($this->rules_model->change_pswd_rules);
            if($this->form_validation->run() && $this->input->post('change_password'))
            {
                $old_pswd = $this->input->post('old_pswd');
                $new_pswd = $this->input->post('new_pswd');
                $new_pswd2 = $this->input->post('new_pswd2');
                $old_pswd = sha1(md5($old_pswd));
                $pswd_check = $this->login_model->check_pswd($old_pswd,$data['user']);
                $captcha = $this->input->post('captcha');
                if(!$pswd_check)
                {
                    $info_msg = 'Старий пароль введений невірно';
                }
                if($new_pswd != $new_pswd2)
                {
                    $info_msg = 'Паролі не співпадають';

                }
                if($captcha != $this->session->userdata['captcha'])
                {
                    $info_msg = 'Символи с картинки введені невірно';
                }

                if($pswd_check == true && $new_pswd == $new_pswd2 && $captcha == $this->session->userdata['captcha'])
                {
                    $new['password'] = sha1(md5($new_pswd));

                    $this->login_model->update_pswd($data['user'], $new);

                    redirect(base_url());
                }

                $data['error'] = $info_msg;
                $data['captcha'] = $this->captcha->get_captcha();
                $this->template->page_view($data,$name);
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


    function logout()
    {
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('status');
        redirect(base_url());
    }


}
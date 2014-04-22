<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $this->load->model('login_model');
        $data['page_info'] = $this->login_model->get_info('admin_main');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        if(empty($data['user']))
        {
            if($this->input->post('enter'))
            {
                $login = $this->input->post('login');
                $pswd = $this->input->post('password');
                $pswd = sha1(md5($pswd));
                $check = $this->admin_model->check_admin($login,$pswd);
                if($check == TRUE)
                {
                    $data['user_info'] = $this->admin_model->user_info($login);
                    $ses_data = array(
                        'user' => $login,
                        'status' => $data['user_info']['status']
                    );
                    $this->session->set_userdata($ses_data);
                    redirect(base_url().'index.php/admin');
                }
                else
                {
                    $data['info'] = 'Вы не облодаете правами админестратора. Либл ввели не верные денные!';
                }
            }
            $this->load->view('admin/login_view',$data);
        }
        else
        {
            $name_main = 'main';
            $this->template->admin_view($data,$name_main);
        }
	}

    function add($page)
    {
        $this->load->model('login_model');
        $data['page_info'] = $this->login_model->get_info($page);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        $data['error'] = '';
        if(!empty($data['user']))
        {
            $this->form_validation->set_rules($this->rules_model->$page);
            if($this->input->post('add') && $this->form_validation->run())
            {
                if($page == 'rukovodstvo')
                {
                    $config['upload_path'] = './images/management/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }
                if($page == 'best_students')
                {
                    $config['upload_path'] = './images/best_students/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }
                if($page == 'registered_fellows')
                {
                    $config['upload_path'] = './images/reg_fel/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }
                if($page == 'pervokursnik')
                {
                    $config['upload_path'] = './images/first_course/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }
                if($page == 'vipusknik')
                {
                    $config['upload_path'] = './images/vipusknik/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }

                if($page != 'news')
                {
                    $this->load->library('upload', $config);

                    if ( ! $this->upload->do_upload())
                    {
                        $data['error'] = $this->upload->display_errors();

                        $name = 'add/'.$page;
                        $this->template->admin_view($data,$name);
                    }
                    else
                    {
                        $upload_data = $this->upload->data();
                    }
                }

                if(!empty($upload_data['file_name']))
                {
                    $add['img'] = $upload_data['file_name'];
                }
                $add['dolgnost'] = $this->input->post('dolgnost');
                $add['fio'] = $this->input->post('fio');
                $add['info'] = $this->input->post('info');
                $add['kontact'] = $this->input->post('kontact');
                $add['vopros'] = $this->input->post('vopros');

                $add['familia'] = $this->input->post('familia');
                $add['name'] = $this->input->post('name');
                $add['group'] = $this->input->post('group');

                $add['otdelenie'] = $this->input->post('otdelenie');
                $add['spetsialnost'] = $this->input->post('spetsialnost');
                $add['date_v'] = $this->input->post('date_v');
                $add['date_o'] = $this->input->post('date_o');
                $add['zasluga'] = $this->input->post('zasluga');

                $add['otdelenie'] = $this->input->post('otdelenie');
                $add['spetsialnost'] = $this->input->post('spetsialnost');
                $add['kl_rukovod'] = $this->input->post('kl_rukovod');
                $add['date'] = $this->input->post('date');
                $add['spisok'] = $this->input->post('spisok');

                $add['title'] = $this->input->post('title');
                $add['text'] = $this->input->post('text');






                foreach ($add as $key=>$val)
                {
                    if(!$add[$key])
                    {
                        unset($add[$key]);
                    }
                }



                if(isset($add['img']) || $page == 'news')
                {
                    $this->admin_model->add($page,$add);
                    $data['info'] = 'Операція пройшла успішно.';
                    $name = 'info';
                    $this->template->admin_view($data,$name);
                }

            }
            else
            {
                $name = 'add/'.$page;
                $this->template->admin_view($data,$name);
            }
        }
        else
        {
            redirect(base_url().'index.php/admin');
        }
    }

    function editlist($page)
    {
        $this->load->model('login_model');
        $data['page_info'] = $this->login_model->get_info($page);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        if(!empty($data['user']))
        {

            $data['page'] = $page;
            if($data['user_info']['status'] != 1 && $page == 'page')
                $data['edit'] = $this->admin_model->get_editlist($page,$data['user_info']['status']);
            elseif($page == 'users')
                $data['edit'] = $this->admin_model->get_editlist_admin();
            else
                $data['edit'] = $this->admin_model->get_editlist_main($page);

                $name = 'edit/editlist_'.$page;


            $this->template->admin_view($data,$name);
        }
        else
        {
            redirect(base_url().'index.php/admin');
        }
    }

    function edit($page,$id='')
    {
        $this->load->model('login_model');
        $data['page_info'] = $this->login_model->get_info($page);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['pages_info'] = $this->admin_model->get_info($page,$id);
        $data['info'] = '';
        $data['error'] = '';
        if(!empty($data['user']))
        {
            $this->form_validation->set_rules($this->rules_model->$page);
            if($this->form_validation->run() && $this->input->post('edit'))
            {
                if($page == 'rukovodstvo')
                {
                    $config['upload_path'] = './images/management/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }
                if($page == 'best_students')
                {
                    $config['upload_path'] = './images/best_students/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }
                if($page == 'registered_fellows')
                {
                    $config['upload_path'] = './images/reg_fel/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }
                if($page == 'pervokursnik')
                {
                    $config['upload_path'] = './images/first_course/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }
                if($page == 'vipusknik')
                {
                    $config['upload_path'] = './images/vipusknik/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '5000';
                    $config['remove_spaces']  = TRUE;
                }

                if($page != 'page' && $page != 'users' && $page != 'news')
                {
                    $this->load->library('upload', $config);
                    if ( ! $this->upload->do_upload() && empty($data['pages_info']['img']))
                    {
                        $data['error'] = $this->upload->display_errors();

                        $name = 'edit/'.$page;
                        $this->template->admin_view($data,$name);

                    }
                    else
                    {
                        $upload_data = $this->upload->data();
                    }
                }




                if(!empty($upload_data['file_name'])){
                    $edit['img'] = $upload_data['file_name'];
                    if($page == 'rukovodstvo')
                        unlink('./images/management/'.$data['pages_info']['img']);

                    if($page == 'best_students')
                        unlink('./images/best_students/'.$data['pages_info']['img']);
                    
                    if($page == 'registered_fellows')
                        unlink('./images/reg_fel/'.$data['pages_info']['img']);

                    if($page == 'pervokursnik')
                        unlink('./images/first_course/'.$data['pages_info']['img']);

                    if($page == 'vipusknik')
                        unlink('./images/vipusknik/'.$data['pages_info']['img']);
                }
                elseif(!empty($data['pages_info']['img']) && isset($data['pages_info']['img'])){
                    $edit['img'] = $data['pages_info']['img'];
                }
                $edit['dolgnost'] = $this->input->post('dolgnost');
                $edit['fio'] = $this->input->post('fio');
                $edit['info'] = $this->input->post('info');
                $edit['kontact'] = $this->input->post('kontact');
                $edit['vopros'] = $this->input->post('vopros');

                $edit['familia'] = $this->input->post('familia');
                $edit['name'] = $this->input->post('name');
                $edit['group'] = $this->input->post('group');

                $edit['text'] = $this->input->post('text');

                $edit['otdelenie'] = $this->input->post('otdelenie');
                $edit['spetsialnost'] = $this->input->post('spetsialnost');
                $edit['date_v'] = $this->input->post('date_v');
                $edit['date_o'] = $this->input->post('date_o');
                $edit['zasluga'] = $this->input->post('zasluga');

                $edit['username'] = $this->input->post('username');
                $edit['status'] = $this->input->post('status');

                $edit['otdelenie'] = $this->input->post('otdelenie');
                $edit['spetsialnost'] = $this->input->post('spetsialnost');
                $edit['kl_rukovod'] = $this->input->post('kl_rukovod');
                $edit['date'] = $this->input->post('date');
                $edit['spisok'] = $this->input->post('spisok');

                $edit['title'] = $this->input->post('title');

                foreach ($edit as $key=>$val)
                {
                    if(!$edit[$key])
                    {
                        unset($edit[$key]);
                    }
                }

                    $this->admin_model->edit($page,$edit,$id);
                    $data['info'] = 'Операция прошла успешно';
                    $name = 'info';
                    $this->template->admin_view($data,$name);
            }
            else
            {
                $name = 'edit/'.$page;
                $this->template->admin_view($data,$name);
            }
        }
        else
        {
            redirect(base_url().'index.php/admin');
        }
    }

    function del($page)
    {
        $this->load->model('login_model');
        $data['page_info'] = $this->login_model->get_info($page);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['info'] = '';
        if(!empty($data['user']))
        {
            if($page == 'users')
                $data['del'] = $this->admin_model->get_editlist_admin();
            else
                $data['del'] = $this->admin_model->get_editlist_main($page);
            if($this->input->post('del_hid') == 1)
            {
                $id = $this->input->post('id');
                $data['pages_info'] = $this->admin_model->get_info($page,$id);
                if(!empty($data['pages_info']['img']))
                {
                    if($page == 'rukovodstvo')
                        unlink('./images/management/'.$data['pages_info']['img']);

                    if($page == 'best_students')
                        unlink('./images/best_students/'.$data['pages_info']['img']);

                    if($page == 'registered_fellows')
                        unlink('./images/reg_fel/'.$data['pages_info']['img']);

                    if($page == 'pervokursnik')
                        unlink('./images/first_course/'.$data['pages_info']['img']);

                    if($page == 'vipusknik')
                        unlink('./images/vipusknik/'.$data['pages_info']['img']);

                }
                $this->admin_model->del($page,$id);

                $data['info'] = 'Операция прошла успешно';
                $name = 'info';
                $this->template->admin_view($data,$name);
            }
            else
            {
                $name = 'del/'.$page;
                $this->template->admin_view($data,$name);
            }
        }
        else
        {
            redirect(base_url().'index.php/admin');
        }
    }


    function edit_admin($id='')
    {
        $this->load->model('login_model');
        $data['page_info'] = $this->login_model->get_info('users');
        $data['pages_info'] = $this->admin_model->get_info('users',$id);
        $data['admins'] = $this->admin_model->get_admin_status();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['error'] = '';
        $name = 'edit/users';
        if(!empty($data['user']))
        {
            $this->form_validation->set_rules($this->rules_model->users);
            if($this->form_validation->run() && $this->input->post('edit'))
            {
                $username = $this->input->post('username');
                $login_check = $this->login_model->check_login($username);
                if(!$login_check)
                {
                    $info_msg = 'Пользователь с данным логином уже зарегистрирован';
                }

                if($login_check == TRUE)
                {
                    $edit['username'] = $this->input->post('username');
                    $edit['status'] = $this->input->post('status');

                    foreach ($edit as $key=>$val)
                    {
                        if(!$edit[$key])
                        {
                            unset($edit[$key]);
                        }
                    }

                    $this->admin_model->edit('users',$edit,$id);
                    $data['info'] = 'Операция прошла успешно';
                    $name = 'info';
                    $this->template->admin_view($data,$name);
                }
                else{

                    $data['error'] = $info_msg;
                    $this->template->admin_view($data,$name);
                }
            }
            else
            {
                $this->template->admin_view($data,$name);
            }

        }
        else
        {
            $this->template->admin_view($data,$name);
        }
    }


    function register()
    {
        $this->load->model('login_model');
        $data['page_info'] = $this->login_model->get_info('register');
        $data['admins'] = $this->admin_model->get_admin_status();
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['error'] = '';
        $name = 'register';
        if(!empty($data['user']))
        {
            $this->form_validation->set_rules($this->rules_model->reg_rules);
            if($this->form_validation->run() && $this->input->post('register'))
            {
                $username = $this->input->post('username');
                $password = $this->input->post('pswd');
                $password_again = $this->input->post('pswd2');
                $captcha = $this->input->post('captcha');
                $login_check = $this->login_model->check_login($username);
                if($password != $password_again)
                {
                    $info_msg = 'Пароли не совподают';

                }
                if($captcha != $this->session->userdata['captcha'])
                {
                    $info_msg = 'Символы с картинки введены не верно';
                }
                if(!$login_check)
                {
                    $info_msg = 'Пользователь с данным логином уже зарегистрирован';
                }

                if($login_check == TRUE && $password == $password_again && $captcha == $this->session->userdata['captcha'])
                {
                    $new['username'] = $username;
                    $new['status'] = $this->input->post('status');
                    $new['password'] = sha1(md5($password));

                    $this->login_model->register($new);

                    $data['info'] = 'Операция прошла успешно';
                    $name = 'info';
                    $this->template->admin_view($data,$name);
                }
                else{

                    $data['error'] = $info_msg;
                    $data['captcha'] = $this->captcha->get_captcha();
                    $this->template->admin_view($data,$name);
                }
            }
            else
            {
                $data['captcha'] = $this->captcha->get_captcha();
                $this->template->admin_view($data,$name);
            }

        }
        else
        {
            $data['captcha'] = $this->captcha->get_captcha();
            $this->template->admin_view($data,$name);
        }
    }
}

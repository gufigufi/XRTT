<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту');

class Template {

    function page_view($data,$name)
    {
        $CI =& get_instance();
        $CI->load->view('blocks/scripts_view',$data);
        $CI->load->view('blocks/header_view');
        $CI->load->view('blocks/menu_view',$data);
        if(empty($data['user']))
        {
            $CI->load->view('blocks/autorization_view',$data);
        }
        else
        {
            $CI->load->view('blocks/cabinet_view',$data);
        }
        $CI->load->view('blocks/leftblok_view', $data);
        $CI->load->view($name.'_view', $data);
        $CI->load->view('blocks/footer_view');
    }

    function admin_view($data,$name)
    {
        $CI =& get_instance();
        $CI->load->view('admin/blocks/scripts_view',$data);
        $CI->load->view('admin/blocks/header_view');
        $CI->load->view('admin/blocks/menu_view',$data);
        if($data['user_info']['status'] == 1)
        {
            $CI->load->view('admin/blocks/left/main_view', $data);
        }
        elseif($data['user_info']['status'] == 2 || $data['user_info']['status'] == 3 || $data['user_info']['status'] == 4 || $data['user_info']['status'] == 5 || $data['user_info']['status'] == 8 || $data['user_info']['status'] == 9)
        {
            $CI->load->view('admin/blocks/left/page_view', $data);
        }
        elseif($data['user_info']['status'] == 6)
        {
            $CI->load->view('admin/blocks/left/saltanova_view', $data);
        }
        elseif($data['user_info']['status'] == 7)
        {
            $CI->load->view('admin/blocks/left/zamena_view', $data);
        }

        $CI->load->view('admin/'.$name.'_view', $data);
        $CI->load->view('admin/blocks/footer_view');
    }
}

?>
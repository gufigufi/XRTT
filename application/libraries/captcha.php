<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту');

class Captcha {

    function get_captcha()
    {
        $CI =& get_instance();
        $CI->load->helper('captcha');
        $CI->load->helper('string');

        $string = random_string('numeric',5);

        $ses_captcha['captcha'] = $string;

        $CI->session->set_userdata($ses_captcha);

        $vals = array(
            'word'	 => $string,
            'img_path'	 => './images/captcha/',
            'img_url'	 => base_url().'images/captcha/',
            'font_path'	 => './system/fonts/texb.ttf',
            'img_width'	 => '120',
            'img_height' => 30,
            'expiration' => 20
        );

        $cap = create_captcha($vals);
        return $cap['image'];
    }

}

?>
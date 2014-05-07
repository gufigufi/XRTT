<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rules_model extends CI_Model {
    public $change_pswd_rules = array(
        array(
            'field' => 'old_pswd',
            'label' => 'Старый пароль',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        ),array(
            'field' => 'new_pswd',
            'label' => 'Новый пароль',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        ),array(
            'field' => 'new_pswd2',
            'label' => 'Новый пароль еще раз',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        ),array(
            'field' => 'captcha',
            'label' => 'Цифри з картинки:',
            'rules' => 'required|xss_clean|exact_length[5]|numeric'
        )
    );




    public $reg_rules = array(
        array(
            'field' => 'username',
            'label' => 'Логін',
            'rules' => 'required|xss_clean|min_length[4]|max_length[16]|alpha_dash'
        ),array(
            'field' => 'pswd',
            'label' => 'Пароль',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        ),array(
            'field' => 'pswd2',
            'label' => 'Підтвердження паролю',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        ),array(
            'field' => 'captcha',
            'label' => 'Цифри з картинки:',
            'rules' => 'required|xss_clean|exact_length[5]|numeric'
        )
    );

    public $rukovodstvo = array(
        array(
            'field' => 'dolgnost',
            'label' => 'Посада',
            'rules' => 'required'
        ),
        array(
            'field' => 'fio',
            'label' => 'ФІО',
            'rules' => 'required'
        ),
        array(
            'field' => 'info',
            'label' => 'Загальна інформація',
            'rules' => 'required'
        ),
        array(
            'field' => 'kontact',
            'label' => 'Контакна інформація',
            'rules' => 'required'
        ),
        array(
            'field' => 'vopros',
            'label' => 'Прийом',
            'rules' => 'required'
        )
    );


    public $best_students = array(
        array(
            'field' => 'familia',
            'label' => 'Прізвище',
            'rules' => 'required'
        ),
        array(
            'field' => 'name',
            'label' => 'Ім\'я',
            'rules' => 'required'
        ),
        array(
            'field' => 'group',
            'label' => 'Група',
            'rules' => 'required'
        )
    );

    public $registered_fellows = array(
        array(
            'field' => 'fio',
            'label' => 'ФІО',
            'rules' => 'required'
        ),
        array(
            'field' => 'zasluga',
            'label' => 'Досягнення',
            'rules' => 'required'
        ),
        array(
            'field' => 'otdelenie',
            'label' => 'Відділення',
            'rules' => 'required'
        ),
        array(
            'field' => 'spetsialnost',
            'label' => 'Спеціальність',
            'rules' => 'required'
        ),
        array(
            'field' => 'spetsialnost',
            'label' => 'Спеціальність',
            'rules' => 'required'
        ),
        array(
            'field' => 'date_v',
            'label' => 'Рік вступу',
            'rules' => 'required|exact_length[4]'
        ),
        array(
            'field' => 'date_o',
            'label' => 'Рік закінчення',
            'rules' => 'required|exact_length[4]'
        ),
        array(
            'field' => 'group',
            'label' => 'Група',
            'rules' => 'required'
        ),
        array(
            'field' => 'info',
            'label' => 'Інформація',
            'rules' => 'required'
        )
    );

    public $page = array(
        array(
            'field' => 'text',
            'label' => 'Загальна інформація',
            'rules' => 'required'
        )
    );

    public $albom = array(
        array(
            'field' => 'title',
            'label' => 'Назва альбому',
            'rules' => 'required'
        )
    );

    public $pervokursnik = array(
        array(
            'field' => 'otdelenie',
            'label' => 'Відділення',
            'rules' => 'required'
        ),
        array(
            'field' => 'spetsialnost',
            'label' => 'Спеціальність',
            'rules' => 'required'
        ),
        array(
            'field' => 'group',
            'label' => 'Група',
            'rules' => 'required'
        ),
        array(
            'field' => 'kl_rukovod',
            'label' => 'Класний керівние',
            'rules' => 'required'
        ),
        array(
            'field' => 'data_date',
            'label' => 'Рік вступу',
            'rules' => 'required'
        ),
        array(
            'field' => 'spisok',
            'label' => 'Перечінь студентів',
            'rules' => 'required'
        )
    );

    public $vipusknik = array(
        array(
            'field' => 'otdelenie',
            'label' => 'Відділення',
            'rules' => 'required'
        ),
        array(
            'field' => 'spetsialnost',
            'label' => 'Спеціальність',
            'rules' => 'required'
        ),
        array(
            'field' => 'group',
            'label' => 'Група',
            'rules' => 'required'
        ),
        array(
            'field' => 'kl_rukovod',
            'label' => 'Класний керівние',
            'rules' => 'required'
        ),
        array(
            'field' => 'data_date',
            'label' => 'Рік випуску',
            'rules' => 'required'
        ),
        array(
            'field' => 'spisok',
            'label' => 'Перечінь студентів',
            'rules' => 'required'
        )
    );

    public $news = array(
        array(
            'field' => 'title',
            'label' => 'Заголовок',
            'rules' => 'required'
        ),
        array(
            'field' => 'text',
            'label' => 'Інформація',
            'rules' => 'required'
        )
    );

    public $users = array(
        array(
            'field' => 'username',
            'label' => 'Загальна інформація',
            'rules' => 'required'
        )
    );

}

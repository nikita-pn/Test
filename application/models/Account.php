<?php

namespace application\models;

use application\core\Model;

class account extends Model
{

    public function loginAction()
    {
        $this->view->render('Вход');
    }

    public function registerAction()
    {
        $this->view->render('Регистрация');
    }


    public function recoveryAction()
    {
        $this->view->render('Восстановить пароль ');
    }
}

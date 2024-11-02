<?php

namespace app\controllers;

use app\core\BaseController;
use app\models\UserModel;

class UserController extends BaseController
{
    public function readUser()
    {
        $model = new UserModel();
        $model->email = 'luka.tasic.22@singimail.rs';
        $model->firstName = 'Luka';
        $model->lastName = 'Tasic';

        $this->view->render('getUser', 'main', $model);
    }
}
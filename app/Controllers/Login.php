<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $this->data['css_file_array'][] = "public/resources/css/login.css";
        $this->data['logo'] = "public/resources/img/logo.png";
            

        return $this->buildViews("login_view", $this->data);
    }
}

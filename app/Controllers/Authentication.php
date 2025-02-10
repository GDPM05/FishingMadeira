<?php

namespace App\Controllers;

class Authentication extends BaseController
{
    public function index(): string
    {
        $this->data['title'] = "Fishing Madeira - Login";
        return $this->buildViews("login_view");
    }
}

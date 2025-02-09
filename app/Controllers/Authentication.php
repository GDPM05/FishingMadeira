<?php

namespace App\Controllers;

class Authentication extends BaseController
{
    public function index(): string
    {
        return $this->buildViews("login_view");
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $this->data['css_file_array'][] = "public/resources/css/homepagefooter.css";
        $this->data['js_file_array'][] = "";

        return view("common/header", $this->data)
        .view("HomePage")
        .view("common/footerHomePage");
    }
}

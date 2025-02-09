<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $this->data['css_file_array'][] = "public/resources/css/homepagefooter.css";
        $this->data['css_file_array'][] = "public/resources/css/homepage.css";
        $this->data['js_file_array'][] = "";
        $this->data['right_side_image'] = "public/resources/img/pexels-olof-nyman-366625-988622.jpg";

        return view("common/header", $this->data)
        .view("home_view")
        .view("common/footerHomePage");
    }
}

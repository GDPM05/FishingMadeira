<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

abstract class BaseController extends Controller {
    protected $request;
    protected $helpers = [];
    protected $session;
    protected $data;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) {
        parent::initController($request, $response, $logger);

        $this->session = service('session');
        $this->data = [
            "environment" => getenv("CI_ENVIRONMENT"),
            "title" => "Fishing Madeira",
            "css_file_array" => [
                "public/resources/css/default.css"
                // "public/resources/css/-----.css"
            ],
            "js_file_array" => [
                // "public/resources/js/-----.js"
            ]
        ];
    }

    public function buildViews($main_view) {
        return view("common/header", $this->data)
            .view("common/navbar")
            .view($main_view)
            .view("common/footer");
    }
}

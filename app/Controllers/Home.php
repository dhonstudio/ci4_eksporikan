<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Home extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
    }

    public function index()
    {
        $this->data['css'] = '
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/bootstrap.min.css">
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/font-awesome.min.css">
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/aos.css">
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/owl.carousel.min.css">
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/owl.theme.default.min.css">

            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/templatemo-digital-trend.css">
        ';

        return view('home', $this->data);
    }
}

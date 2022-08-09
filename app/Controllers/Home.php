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
        $pageKey = "z0pW3U1NjBdRIYhKvktzAMm4iQsF8TfR";

        $content = $this->dhonrequest->get("landingpagecontent/getAllByKey?pageKey={$pageKey}")['data'];

        $this->data['content']  = $content;
        $this->data['pageKey']  = $pageKey;
        $this->data['title']    = $content[array_search('Title', array_column($content, 'contentName'))]['contentValue'];

        return view('home', $this->data);
    }

    public function project()
    {
        $basePageKey = "z0pW3U1NjBdRIYhKvktzAMm4iQsF8TfR";
        $pageKey = "pRpW3U1NjBdRIYhKvPRzAMm4iQsF8TfR";

        $baseContent = $this->dhonrequest->get("landingpagecontent/getAllByKey?pageKey={$basePageKey}")['data'];
        $content = $this->dhonrequest->get("landingpagecontent/getAllByKey?pageKey={$pageKey}")['data'];

        $this->data['baseContent'] = $baseContent;
        $this->data['content']  = $content;
        $this->data['pageKey']  = $pageKey;
        $this->data['title']    = $content[array_search('Title', array_column($content, 'contentName'))]['contentValue'];
        $this->data['css']      = '
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_520_highway/css/bootstrap.min.css">
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_520_highway/css/bootstrap-theme.min.css">
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_520_highway/css/fontAwesome.css">
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_520_highway/css/light-box.css">
            <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_520_highway/css/templatemo-style.css">

            <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

            <script src="' . $this->assets . 'vendor/templatemo_520_highway/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        ';

        return view('project', $this->data);
    }

    public function contact()
    {
        $this->data['content'] = $this->dhonrequest->get("landingpagecontent/getAllByKey?webKey={$this->webKey}")['data'];

        return view('contact', $this->data);
    }
}

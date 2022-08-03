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
        $content = $this->dhonrequest->get("landingpagecontent/getAllByKey?webKey={$this->webKey}")['data'];

        $this->data['content']  = $content;
        $this->data['title']    = $content[array_search('Title', array_column($content, 'contentName'))]['contentValue'];

        return view('home', $this->data);
    }

    public function contact()
    {
        $this->data['content'] = $this->dhonrequest->get("landingpagecontent/getAllByKey?webKey={$this->webKey}")['data'];

        return view('contact', $this->data);
    }
}

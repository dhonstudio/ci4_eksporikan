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

    public function contact()
    {
        $this->data['content'] = $this->dhonrequest->get("landingpagecontent/getAllByKey?webKey={$this->webKey}")['data'];

        return view('contact', $this->data);
    }
}

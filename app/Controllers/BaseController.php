<?php

namespace App\Controllers;

use Assets\Ci4_libraries\DhonHit;
use Assets\Ci4_libraries\DhonRequest;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Assets path.
     *
     * @var string
     */
    protected $assets = 'http://localhost/assets/';

    /**
     * Git assets path.
     *
     * @var string
     */
    protected $git_assets = '/../../../assets/';

    /**
     * API URL.
     *
     * @var string
     */
    protected $api_url = 'http://localhost/ci4_api2/';

    /**
     * API auth if use basic auth.
     *
     * @var string[]
     */
    protected $api_auth = ['admin', 'admin'];

    /**
     * Key for identifying Landing Page.
     *
     * @var string
     */
    protected $webKey = 'q2pW3U1NjB5eIYhKvktzAMm4iQsF8Tb0';

    /**
     * Enabler page hit traffic.
     *
     * @var boolean
     */
    protected $hit_traffic = true;

    /**
     * Dhon Studio library for connect API.
     * Run `git clone https://github.com/dhonstudio/ci4_libraries.git` in your git assets path.
     *
     * @var DhonRequest
     */
    protected $dhonrequest;

    /**
     * Dhon Studio library for create page hit traffic.
     * Run `git clone https://github.com/dhonstudio/ci4_libraries.git` in your git assets path.
     *
     * @var DhonHit
     */
    protected $dhonhit;

    /**
     * Default data for Views.
     *
     * @var mixed
     */
    protected $data;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $this->_initLibraries([
            'dhonrequest_version'   => "1.0.0",
            'dhonhit_version'       => "1.0.0",
        ]);

        $this->data = [
            'lang'      => null, // default is `en`
            'meta'      => [
                'keywords'      => 'dhon studio, dhonstudio, dhonstudio.com',
                'author'        => null,
                'generator'     => null,
                'ogimage'       => $this->assets . 'img/ogimg.jpg',
                'description'   => 'This landing page built base on Dhon Studio repository on Github.',
            ],
            'favicon'   => $this->assets . "img/icon.ico",
            'title'     => 'My Landing Page by Dhon Studio', // default is `Home`

            'email'         => 'admin@dhonstudio.com',
            'whatsapp'      => '62 877 00 8899 13',
            'whatsapp_link' => 'https://wa.me/6287700889913',
            'github'        => 'https://github.com/dhonstudio',
            'instagram'     => 'https://instagram.com/dhonstudio',

            'css'   => '
                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/bootstrap.min.css">
                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/font-awesome.min.css">
                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/aos.css">
                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/owl.carousel.min.css">
                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/owl.theme.default.min.css">

                <link rel="stylesheet" href="' . $this->assets . 'vendor/templatemo_538_digital_trend/css/templatemo-digital-trend.css">
            ',
        ];

        $this->_initData();
    }

    /**
     * Initialize additional libraries.
     */
    private function _initLibraries($params)
    {
        require __DIR__ . $this->git_assets . 'ci4_libraries/DhonRequest-' . $params['dhonrequest_version'] . '.php';
        $this->dhonrequest = new DhonRequest([
            'api_url'   => $this->api_url,
            'api_auth'  => $this->api_auth,
        ]);

        if ($this->hit_traffic) {
            require __DIR__ . $this->git_assets . 'ci4_libraries/DhonHit-' . $params['dhonhit_version'] . '.php';
            $this->dhonhit = new DhonHit();

            $this->dhonhit->dhonrequest = $this->dhonrequest;
            $this->dhonhit->collect();
        }
    }

    /**
     * Initialize additional data.
     */
    private function _initData()
    {
        $this->data['assets']       = $this->assets;
        $this->data['git_assets']   = $this->git_assets;
    }
}

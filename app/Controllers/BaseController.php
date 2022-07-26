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
     * ==================================== MUST BE SET ====================================
     * Base URL.
     *
     * @var string
     */
    protected $base_url =
    ENVIRONMENT == 'development' ? 'http://localhost/ci4_eksporikan'
        : (ENVIRONMENT == 'testing' ? 'http://dev.dhonstudio.com/ci4/eksporikan'
            : (ENVIRONMENT == 'production' ? 'https://domain.com/ci4/...' : ''));

    /**
     * ==================================== MUST BE SET ====================================
     * Assets path.
     *
     * @var string
     */
    protected $assets =
    ENVIRONMENT == 'development' ? 'http://localhost/assets/' // for development assets
        : 'https://dhonstudio.com/assets/'; // for testing and production assets in cloud

    /**
     * ==================================== MUST BE SET ====================================
     * Git assets path.
     *
     * @var string
     */
    protected $git_assets =
    ENVIRONMENT == 'development' ? '/../../../assets/'
        : (ENVIRONMENT == 'testing' ? '/../../../../../assets/'
            : (ENVIRONMENT == 'production' ? '/../../../../assets/' : ''));

    /**
     * ==================================== MUST BE SET ====================================
     * Enabler/disabler page hit traffic.
     *
     * @var boolean
     */
    protected $hit_traffic = true;

    /**
     * ==================================== MUST BE RUN ====================================
     * Dhon Studio library for create page hit traffic.
     * Run `git clone https://github.com/dhonstudio/ci4_libraries.git` in your git assets path.
     *
     * @var DhonHit
     */
    protected $dhonhit;

    /**
     * ==================================== MUST BE RUN ====================================
     * Dhon Studio library for connect API.
     * Run `git clone https://github.com/dhonstudio/ci4_libraries.git` in your git assets path.
     *
     * @var DhonRequest
     */
    protected $dhonrequest;

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

        $this->data = [
            'base_url'  => $this->base_url,
            'assets'    => $this->assets,

            // ==================================== MUST BE SET ====================================
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

            // ==================================== MUST BE SET ====================================
            'email'         => 'admin@dhonstudio.com',
            'whatsapp'      => '62 877 00 8899 13',
            'whatsapp_link' => 'https://wa.me/6287700889913',
            'github'        => 'https://github.com/dhonstudio',
            'instagram'     => 'https://instagram.com/dhonstudio',
        ];

        if ($this->hit_traffic) {
            require __DIR__ . $this->git_assets . 'ci4_libraries/DhonHit.php';

            // ==================================== MUST BE SET ====================================
            // If API has basic auth.
            $auth = ENVIRONMENT == 'production' ? ['prod_username', 'prod_password'] : ['dev_username', 'dev_password'];

            // ==================================== MUST BE SET ====================================
            $this->dhonhit = new DhonHit([
                'api_url'   => [
                    'development'   => 'http://localhost/ci4_api2/',
                    'testing'       => 'http://dev.dhonstudio.com/ci4/api2/',
                    'production'    => 'https://domain.com/ci4/service/',
                ],
                'auth'      => $auth,
            ]);
            $this->dhonhit->base_url = $this->base_url;
            $this->dhonhit->collect();

            $this->dhonrequest = $this->dhonhit->dhonrequest;
        } else {
            require __DIR__ . $this->git_assets . 'ci4_libraries/DhonRequest.php';
            $this->dhonrequest = new DhonRequest();
        }
    }
}

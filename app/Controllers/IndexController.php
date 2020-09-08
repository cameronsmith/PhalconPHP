<?php namespace CameronSmith\PhalconPHP\Controllers;

use Phalcon\Mvc\Controller;

/**
 * Class IndexController
 *
 * @package CameronSmith\PhalconPHP\Controllers
 */
class IndexController extends Controller
{
    /**
     * @route /index
     */
    public function indexAction()
    {
        // render: views/index/index.phtml
    }
}

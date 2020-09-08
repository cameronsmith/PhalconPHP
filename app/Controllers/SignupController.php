<?php namespace CameronSmith\PhalconPHP\Controllers;

use Phalcon\Mvc\Controller;

/**
 * Class SignupController
 *
 * @package CameronSmith\PhalconPHP\Controllers
 */
class SignupController extends Controller
{

    /**
     * @route /signup
     */
    public function indexAction()
    {
        // render: views/signup/index
    }

    /**
     * @route /signup/register
     */
    public function registerAction()
    {
        // render: views/signup/register
    }
}

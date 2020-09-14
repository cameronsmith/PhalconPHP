<?php namespace CameronSmith\PhalconPHP\Controllers;

use CameronSmith\PhalconPHP\Models\Users;
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
        $this->view->disable();

        $user = new Users();
        $request_params = $this->request->getPost();
        $user->name = trim($request_params['name']);
        $user->email = trim($request_params['email']);

        if ($user->save()) {
            echo 'Thanks for registering';
            return;
        }

        echo 'Sorry, the following problems were generated: ';

        $messages = $user->getMessages();
        foreach ($messages as $message) {
            echo $message->getMessage() . '<br>';
        }
    }
}

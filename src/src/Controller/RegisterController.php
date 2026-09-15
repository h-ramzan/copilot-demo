<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Routing\Router;

/**
 * Displays the registration page.
 */
class RegisterController extends AppController
{
    /**
     * Displays the visual-only registration form.
     *
     * @return void
     */
    public function index(): void
    {
        $page_title = 'Create your account';
        $form_action = '';
        $submit_label = 'Sign up';
        $terms_url = '#terms';
        $login_url = Router::url(['controller' => 'Login', 'action' => 'index']);

        $this->set(compact(
            'page_title',
            'form_action',
            'submit_label',
            'terms_url',
            'login_url'
        ));
    }
}

<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Displays the registration page.
 */
class RegistrationController extends AppController
{
    /**
     * Displays the registration form.
     *
     * @return void
     */
    public function index(): void
    {
        $page_title = 'Create an Account';
        $form_heading = 'Get Started';
        $welcome_message = 'Enter your details to create your account.';
        $button_text = 'Register';
        $login_url = '/login/login.php';

        $this->set(compact(
            'page_title',
            'form_heading',
            'welcome_message',
            'button_text',
            'login_url',
        ));

        $this->viewBuilder()->setTemplatePath('Register');
    }
}

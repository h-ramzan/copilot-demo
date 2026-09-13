<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Displays the login page.
 */
class LoginController extends AppController
{
    /**
     * Displays the visual-only login form.
     *
     * @return void
     */
    public function index(): void
    {
        // Variables passed to the view via set() are available in the template.
        $this->set('siteName', 'CakePHP');
        $this->set('pageTitle', 'Sign in to your account');
    }
}

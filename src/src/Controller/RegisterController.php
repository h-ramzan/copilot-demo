<?php
declare(strict_types=1);

namespace App\Controller;

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
        $this->set('page_title', 'Create your account');
        $this->set('page_description', 'Sign up to access exclusive features and stay connected.');
        $this->set('loginUrl', '/login/login.php');
    }
}

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
        // Variables passed to the view via set() are available in the template.
        $this->set('site-name', 'CakePHP');
        $this->set('pageTitle', 'Create your account');
        $this->set('passwordMinLength', 8);
    }
}

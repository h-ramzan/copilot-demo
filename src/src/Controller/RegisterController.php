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
        $this->set('pageTitle', 'Create your account');
    }
}

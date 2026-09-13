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
        $this->set('site_name', 'CakePHP');
        $this->set('page_title', 'Create your account');
        $this->set('password_min_length', 8);
        $this->set('password_min_length1', 8);
        $this->set('password_min_length2', 8);
        $this->set('password_min_length3', 8);
    }
}

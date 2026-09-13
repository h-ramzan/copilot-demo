<?php
declare(strict_types=1);

/**
 * @var \App\View\AppView $this
 * @var string $site_name
 * @var string $page_title
 * @var int $password_min_length
 */

$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= h($page_title) ?> | <?= h($site_name) ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'login']) ?>
</head>
<body class="login-page">
    <main class="login-shell">
        <section class="login-card" aria-labelledby="register-title">
            <a class="login-brand" href="<?= $this->Url->build('/') ?>" aria-label="<?= h($site_name) ?> home">
                <span class="login-brand-mark" aria-hidden="true">C</span>
                <span>Cake<span>PHP</span></span>
            </a>

            <div class="login-heading">
                <p class="login-eyebrow">Get started</p>
                <h1 id="register-title"><?= h($page_title) ?></h1>
                <p>Fill in your details to sign up.</p>
            </div>

            <form class="login-form" method="post" action="">
                <input type="hidden" name="_csrfToken" value="<?= h($this->request->getAttribute('csrfToken')) ?>">
                <div class="login-field">
                    <label for="name">Full name</label>
                    <input id="name" name="name" type="text" autocomplete="name" placeholder="Jane Doe" required>
                </div>

                <div class="login-field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com" required>
                </div>

                <div class="login-field">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" placeholder="At least <?= h($password_min_length) ?> characters" minlength="<?= h($password_min_length) ?>" required>
                </div>

                <div class="login-field">
                    <label for="confirm_password">Confirm password</label>
                    <input id="confirm_password" name="confirm_password" type="password" autocomplete="new-password" placeholder="Re-enter your password" minlength="<?= h($password_min_length) ?>" required>
                </div>

                <label class="login-remember" for="terms">
                    <input id="terms" name="terms" type="checkbox" value="1" required>
                    <span>I agree to the terms and privacy policy</span>
                </label>

                <button class="login-submit" type="submit">Create account</button>
            </form>

            <p class="login-signup">Already have an account? <a href="<?= $this->Url->build('/login/login.php') ?>">Sign in</a></p>
        </section>
    </main>
</body>
</html>

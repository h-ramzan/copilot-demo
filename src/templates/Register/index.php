<?php
declare(strict_types=1);

/**
 * @var \App\View\AppView $this
 * @var string $page_title
 * @var string $form_action
 * @var string $submit_label
 * @var string $terms_url
 * @var string $login_url
 */

$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= h($page_title) ?> | CakePHP</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'login']) ?>
</head>
<body class="login-page">
    <main class="login-shell">
        <section class="login-card" aria-labelledby="register-title">
            <a class="login-brand" href="<?= $this->Url->build('/') ?>" aria-label="CakePHP home">
                <span class="login-brand-mark" aria-hidden="true">C</span>
                <span>Cake<span>PHP</span></span>
            </a>

            <div class="login-heading">
                <p class="login-eyebrow">Get started</p>
                <h1 id="register-title"><?= h($page_title) ?></h1>
                <p>Fill in your details to create an account.</p>
            </div>

            <form class="login-form" method="post" action="<?= h($form_action) ?>">
                <div class="login-field">
                    <label for="name">Full name</label>
                    <input id="name" name="name" type="text" autocomplete="name" placeholder="Your full name" required>
                </div>

                <div class="login-field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com" required>
                </div>

                <div class="login-field">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" placeholder="Create a password" required>
                </div>

                <div class="login-field">
                    <label for="confirm_password">Confirm password</label>
                    <input id="confirm_password" name="confirm_password" type="password" autocomplete="new-password" placeholder="Re-enter your password" required>
                </div>

                <label class="login-remember" for="terms">
                    <input id="terms" name="terms" type="checkbox" value="1" required>
                    <span>I agree to the <a href="<?= h($terms_url) ?>">terms &amp; conditions</a></span>
                </label>

                <button class="login-submit" type="submit"><?= h($submit_label) ?></button>
            </form>

            <p class="login-signup">Already have an account? <a href="<?= h($login_url) ?>">Sign in</a></p>
        </section>
    </main>
</body>
</html>

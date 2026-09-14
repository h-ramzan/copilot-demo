<?php
declare(strict_types=1);

/**
 * @var \App\View\AppView $this
 * @var string $page_title
 * @var string $form_heading
 * @var string $welcome_message
 * @var string $button_text
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
                <p class="login-eyebrow"><?= h($form_heading) ?></p>
                <h1 id="register-title"><?= h($page_title) ?></h1>
                <p><?= h($welcome_message) ?></p>
            </div>

            <form class="login-form" method="post" action="">
                <div class="login-field">
                    <label for="username">Username</label>
                    <input id="username" name="username" type="text" autocomplete="username" placeholder="Choose a username" required>
                </div>

                <div class="login-field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com" required>
                </div>

                <div class="login-field">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" autocomplete="new-password" placeholder="Enter your password" required>
                </div>

                <div class="login-field">
                    <label for="confirm-password">Confirm Password</label>
                    <input id="confirm-password" name="confirm_password" type="password" autocomplete="new-password" placeholder="Confirm your password" required>
                </div>

                <button class="login-submit" type="submit"><?= h($button_text) ?></button>
            </form>

            <p class="login-signup">Already have an account? <a href="<?= h($login_url) ?>">Sign in</a></p>
        </section>
    </main>
</body>
</html>

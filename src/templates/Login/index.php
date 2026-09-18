<?php
declare(strict_types=1);

/**
 * @var \App\View\AppView $this
 */

$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in | CakePHP</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'login']) ?>
</head>
<body class="login-page">
    <main class="login-shell">
        <section class="login-card" aria-labelledby="login-title">
            <a class="login-brand" href="<?= $this->Url->build('/') ?>" aria-label="CakePHP home">
                <span class="login-brand-mark" aria-hidden="true">C</span>
                <span>Cake<span>PHP</span></span>
            </a>

            <div class="login-heading">
                <p class="login-eyebrow">Welcome back</p>
                <h1 id="login-title">Sign in to your account</h1>
                <p>Enter your details to continue.</p>
            </div>

            <form class="login-form" method="post" action="">
                <div class="login-field">
                    <label for="email">Email address</label>
                    <input id="email" name="email" type="email" autocomplete="email" placeholder="you@example.com" required>
                </div>

                <div class="login-field">
                    <div class="login-label-row">
                        <label for="password">Password</label>
                        <a href="#forgot-password">Forgot password?</a>
                    </div>
                    <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Enter your password" required>
                </div>

                <label class="login-remember" for="remember">
                    <input id="remember" name="remember" type="checkbox" value="1">
                    <span>Remember me</span>
                </label>

                <button class="login-submit" type="submit">Sign in</button>
            </form>

            <p class="login-signup">Don’t have an account? <a href="<?= $this->Url->build(['controller' => 'Register', 'action' => 'index']) ?>">Create one</a></p>
        </section>
    </main>
</body>
</html>

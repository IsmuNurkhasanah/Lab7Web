<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Login' ?></title>
    <link rel="stylesheet" href="<?= base_url('style_login.css'); ?>">
</head>
<?php
/** @var CodeIgniter\View\View $this */
?>

<body>
    <div id="container">
        <h1>Sign In</h1>
        <?php if (session()->getFlashdata('flash_msg')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="InputForEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
            </div>
            <div class="mb-3">
                <label for="InputForPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword">
            </div>
            <button type="submit" class="btn btn-primary d-flex">Login</button><br>
            <a href="<?= base_url('/artikel'); ?>">Back</a>
        </form>
    </div>
</body>

</html>
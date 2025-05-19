<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<div>>
    <form action="<?= base_url('adminlogin'); ?>" method="POST">
        <h1>Log In</h1>
        <input type="text" name="username" id="username" placeholder="Username">
        <div class="input-wrapper">
            <input type="password" name="password" id="password" placeholder="Password">
            <i id="eyePassword" class="fa-solid fa-eye-slash toggle-icon" onclick="togglePassword('password', 'eyePassword')"></i>
        </div>


        <button type="submit" id="sign-in-btn">Log In</button>
    </form>
</div>
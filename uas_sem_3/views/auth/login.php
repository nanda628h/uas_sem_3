<?php ob_start(); ?>
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card p-4">
<h4 class="text-center mb-3">Login Sistem</h4>
<form method="post">
<input class="form-control mb-2" name="username" placeholder="Username">
<input class="form-control mb-3" type="password" name="password" placeholder="Password">
<button class="btn btn-primary w-100">Login</button>
</form>
<small class="text-danger"><?= $error ?? '' ?></small>
</div>
</div>
</div>
<?php $content = ob_get_clean(); require 'views/layouts/main.php'; ?>

<?php if (session()->has('error')) : ?>
    <div class="alert alert-warning mt-3 alert-dismissible fade show" role="alert">
        <p><?= session('error') ?></p>
    </div>
<?php endif ?>
<?php if (session()->has('success')) : ?>
    <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
        <p><?= session('success') ?></p>
    </div>
<?php endif ?>
<?php $this->extend('base')?>

<?php $this->section('title')?>
    <title>Se connecter</title>
<?php $this->endSection()?>

<?php $this->section('main')?>
<?= view('App\Views\components\alerts') ?>
<form action="<?= base_url('auth/login')?>" class="my-10" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Renseigner votre adresse email" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" placeholder="Votre mot de passe" name="password" id="password">
    </div>
    <button class="btn btn-success">Connexion</button>
    <a href="<?= base_url('auth/register')?>" class="btn btn-primary">S'enregistrer</a>
</form>
<?php $this->endSection()?>
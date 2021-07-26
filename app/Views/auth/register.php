<?php $this->extend('base')?>

<?php $this->section('title')?>
    <title>Création de compte</title>
<?php $this->endSection()?>

<?php $this->section('main')?>
<?= view('App\Views\components\alerts') ?>
<form action="<?= base_url('auth/register/save')?>" class="my-10" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" placeholder="Renseigner votre Nom" name="name" id="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Renseigner votre adresse email" name="email" id="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" placeholder="Votre mot de passe" name="password" id="password" required>
    </div>
    <div class="mb-3">
        <label for="repeatPassword" class="form-label">Confirmation du Mot de passe</label>
        <input type="password" class="form-control" placeholder="Confirmer Votre mot de passe" name="repeat-password" id="repeatPassword" required>
    </div>
    <button class="btn btn-primary">S'enregistrer</button>
</form>
<?php $this->endSection()?>
<?php $this->extend('base')?>

<?php $this->section('title')?>
    <title>Ajouter un liens</title>
<?php $this->endSection()?>

<?php $this->section('main')?>
<h1 class="mt-5 mb-4">Ajouter un lien</h1>
<?= view('App\Views\components\alerts') ?>
<form action="<?= base_url('link/save')?>" class="my-10" method="post">
    <div class="mb-3">
        <label for="link" class="form-label">Lien</label>
        <input type="text" class="form-control" placeholder="Renseigner le lien" name="link" id="link" required>
    </div>
    <button class="btn btn-primary">Ajouter le lien</button>
</form>
<?php $this->endSection()?>

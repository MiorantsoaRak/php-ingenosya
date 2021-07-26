<?php $this->extend('base')?>

<?php $this->section('title')?>
    <title>Liste de liens</title>
<?php $this->endSection()?>

<?php $this->section('main')?>
<h1 class="mt-5 mb-4">Tableau des liens</h1>
<?= view('App\Views\components\alerts') ?>
<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>Scheme</th>
        <th>Host</th>
        <th>Path</th>
        <th>Parameters</th>
        <th>Original link</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($links as $link) {?>
        <tr>
            <td><?= $link['id']?></td>
            <td><?= $link['scheme']?></td>
            <td><?= $link['host']?></td>
            <td><?= $link['path']?></td>
            <td><?= $link['params']?></td>
            <td><?= $link['original_link']?></td>
        </tr>
    <?php }?>
    </tbody>
</table>

<a href="<?=base_url('link/add')?>" class="btn btn-primary w-auto px-5 mt-4">Ajouter un lien</a>
<?php $this->endSection()?>


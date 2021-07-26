<?php $this->extend('base')?>

<?php $this->section('title')?>
    <title>Liste de liens</title>
<?php $this->endSection()?>

<?php $this->section('main')?>
<h1 class="mt-5 mb-4">Tableau des liens</h1>
<?= view('App\Views\components\alerts') ?>
<div class="table-responsive-sm">
    <table class="table table-striped w-auto">
        <thead>
        <tr>
            <th scope="col">Scheme</th>
            <th scope="col">Host</th>
            <th scope="col">Path</th>
            <th scope="col">Parameters</th>
            <th scope="col">Original link</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($links as $link) {?>
            <tr>
                <td><?= $link['scheme']?></td>
                <td><?= $link['host']?></td>
                <td><?= $link['path']?></td>
                <td><?= $link['params']?></td>
                <td><?= $link['original_link']?></td>
                <td><a href="<?= base_url('link/delete/'.$link['id'])?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>

<a href="<?=base_url('link/add')?>" class="btn btn-primary w-auto px-5 mt-4 mb-4">Ajouter un lien</a>
<?php $this->endSection()?>


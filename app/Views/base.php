<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->renderSection('title')?>

    <link rel="stylesheet" href="<?= base_url('css/app.css')?>">
    <?php $this->renderSection('styles')?>
    <?php $this->renderSection('scripts1')?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<?php if(session('isLoggedIn')){ ?>
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/')?>">Accueil</a>
            <div class="collapse navbar-collapse">
                <!--<ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">l</a>
                    </li>
                </ul>-->
                <a href="<?= base_url('auth/logout')?>" class="link-light">Se déconnecter</a>
            </div>
        </div>
    </nav>
<?php }?>
    <main role="main" class="container">
        <div class="row main-row justify-content-lg-center">
            <div class="col-lg rounded">
                <div class="row">
                    <?php $this->renderSection('main')?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <?= $this->renderSection('scripts2') ?>
</body>
</html>
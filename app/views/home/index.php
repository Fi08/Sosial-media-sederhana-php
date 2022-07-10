<?php if (isset($_SESSION['flash'])) { ?>
    <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
            <?= Flasher::flash() ?>
        </div>
    </div>
<?php } ?>

<div class="jumbotron">
    <h1 class="display-4">Selamat Datang Di Twirrer</h1>
    <p class="lead">Jelajahi dunia virtual dan kamu menemukannya!</p>
    <hr class="my-4">
    <p>hanya untuk local dan untuk pemahaman MVC sederhana</p>
    <p class="lead">
    <p class="lead">Hasta la vista baby</p>
    </p>
</div>
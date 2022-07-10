<div class="row justify-content-center mb-3">
    <div class="col-auto">
        <i class="text-gray-300"><img src="<?= BASE ?>/img/<?= $data['users']['img'] ?>" alt="" width="100px" height="120px"></i>
    </div>
    <div class="card">

        <div class="card-body">
            <input type="text" hidden name="id" value="<?= $data['users']['id'] ?>">
            <p class="lead">nama : <?= $data['users']['nama'] ?></p>
            <p class="lead">email : <?= $data['users']['email'] ?></p>
        </div>
    </div>
</div>



<?php $arraylike = []; ?>

<?php foreach ($data['likes'] as $like) : ?>
    <?php
    array_push($arraylike, $like['id_post']);
    ?>
<?php endforeach; ?>

<div class="jumbotron">
    <div class="row">
        <?php foreach ($data['posts'] as $user) : ?>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3"><?= $data['users']['nama'] ?></div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <?= $user['content'] ?>
                                </div>
                            </div>

                            <?php if (in_array($user['id'], $arraylike)) { ?>
                                <button class="btn btn-circle btn-danger btn-sm tombolsuka" id='tombolsuka' data-tombolsuka='<?= $user['id'] ?>' data-iduser='<?= $_SESSION['id'] ?>'>
                                    <i class="fa-solid fa-heart"></i>
                                </button>

                            <?php } else { ?>

                                <button class="btn btn-circle btn-light btn-sm tombolsuka aktif" id='tombolsuka' data-tombolsuka='<?= $user['id'] ?>' data-iduser='<?= $_SESSION['id'] ?>'>
                                    <i class="fa-solid fa-heart"></i>
                                </button>
                            <?php } ?>

                        </div>
                    </div>
                </div>

            </div>

        <?php endforeach; ?>
    </div>
</div>
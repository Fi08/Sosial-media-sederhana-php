<div class="jumbotron">
    <div class="row">
        <?php foreach ($data['users'] as $user) : ?>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">
                                    <a href=" <?= BASE ?>/users/pengguna/<?= $user['id']  ?> "> <?= $user['nama'] ?></a>
                                </div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    <?= $user['email'] ?>
                                </div>
                            </div>
                            <img src="<?= BASE . '/img/' . $user['img'] ?>" alt="" width="20%">

                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
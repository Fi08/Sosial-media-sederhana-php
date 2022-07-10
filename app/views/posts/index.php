<button type="button" href="#" class="btn btn-success btn-icon-split mb-2 ml-2" data-toggle="modal" data-target="#posting">
    <span class="icon text-white-50">
        <i class="fas fa-arrow-right"></i>
    </span>
    <span class="text">Bagikan Pikiran Mu!</span>
</button>

<?php if (isset($_SESSION['flash'])) { ?>
    <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
            <?= Flasher::flash() ?>
        </div>
    </div>
<?php } ?>


<?php $arraylike = []; ?>

<?php foreach ($data['likes'] as $like) : ?>
    <?php
    array_push($arraylike, $like['id_post']);
    ?>
<?php endforeach; ?>

<div class="jumbotron">
    <div class="row">
        <?php foreach ($data['users'] as $user) : ?>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800 mb-3">
                                    <a href=" <?= BASE ?>/users/pengguna/<?= $user['user_id']  ?> "> <?= $user['nama'] ?> </a>
                                </div>
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
                            <a href="<?= BASE ?>/posts/singlepost/<?= $user['id'] ?>" class="btn btn-circle btn-light btn-sm ml-2">
                                <i class="fa-solid fa-comment"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        <?php endforeach; ?>
    </div>
</div>
<!-- <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav> -->


<div class="modal fade" id="posting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tulis aja dulu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASE ?>/posts/tambah" method="post">
                <div class="modal-body">
                    <div class="input-group">
                        <textarea class="form-control" name="postingan" aria-label="With textarea" maxlength="40"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Posting</button>
                </div>
            </form>
        </div>
    </div>
</div>
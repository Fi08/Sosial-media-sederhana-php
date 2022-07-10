<?php if (isset($_SESSION['flash'])) { ?>
    <div class="row">
        <div class="col-xl-12 col-md-6 mb-4">
            <?= Flasher::flash() ?>
        </div>
    </div>
<?php } ?>

<div class="row justify-content-center mb-3">
    <div class="col-auto">
        <i class="text-gray-300"><img src="<?= BASE ?>/img/<?= $data['user']['img'] ?>" alt="" width="100px"></i>
    </div>
    <form action="<?= BASE ?>/user/profiledit/<?= $data['user']['id'] ?>" method="post">
        <div class="card">

            <div class="card-body">
                <input type="text" hidden name="id" value="<?= $data['user']['id'] ?>">
                <p class="lead">nama : <?= $data['user']['nama'] ?></p>
                <p class="lead">email : <?= $data['user']['email'] ?></p>
            </div>
            <button type="submit" class="btn btn-info  ">Edit</button>
        </div>
    </form>
</div>


<div class=" card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Content</th>
                        <th class="col-3">Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($data['post'] as $postingan) { ?>
                    <tbody>
                        <tr>
                            <td><?= $postingan['content'] ?></td>

                            <td>
                                <a href="<?= BASE ?>/posts/ubahpost/<?= $postingan['id'] ?>" class="btn btn-info btn-circle btn-sm tampilUbah" data-idlaa="<?= $postingan['id'] ?>" data-toggle="modal" data-target="#posting">
                                    <i class="fas fa-info-circle"></i>
                                </a>

                                <a href="<?= BASE ?>/posts/hapus/<?= $postingan['id'] ?>" class="btn btn-danger btn-circle btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>


<!-- id="edituser" class="btn btn-info edituser"  -->
<div class="modal fade" id="posting" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Postingan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= BASE ?>/posts/ubahpost" method="post">
                <div class="modal-body">
                    <input hidden type="text" name="id" id="idposting">
                    <div class="input-group">
                        <textarea class="form-control" id="postingan" name="postingan" aria-label="With textarea"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
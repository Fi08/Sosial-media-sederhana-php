<div class="row justify-content-center mb-3 text-center">
    <div class="card shadow mb-4 " style=" width: 23rem;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $data['content']; ?></h6>

        </div>

        <form action="<?= BASE ?>/comment/addkomen" method="post">
            <input type="text" value="<?= $data['id'] ?>" name="post" hidden>
            <input type="text" value="<?= $_SESSION['id'] ?>" name="user" hidden>


            <div class="form-group pr-2 pl-2">
                <label for="exampleFormControlTextarea1">Kometar Anda</label>
                <textarea name="comment" maxlength="80" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                <button type="submit" href="#" class="btn btn-success btn-icon-split mt-2">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Kirim</span>
                </button>
            </div>
        </form>


        <div class="card-body">
            <?php foreach ($dataDua as $commen) : ?>
                <p class="border-bottom  border-success"><span class="text-primary"> <?= $commen['nama'] ?></span> -> <?= $commen['isi_commen'] ?></p>

            <?php endforeach; ?>
        </div>

    </div>
</div>
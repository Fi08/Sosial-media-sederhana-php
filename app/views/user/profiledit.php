<div class="row justify-content-center mb-3 text-center">
    <div class="col-auto">
        <i class="text-gray-300"><img src="<?= BASE ?>/img/<?= $data['user']['img'] ?>" alt="" width="200px"></i>
    </div>
    <form action="<?= BASE ?>/user/ubah/<?= $data['user']['id'] ?>" method="post" enctype="multipart/form-data">

        <input hidden value="<?= $data['user']['id'] ?>" type="text" class="form-control" name="id" id="id" placeholder="Apartment, studio, or floor">
        <input hidden value="<?= $data['user']['img'] ?>" type="text" class="form-control" name="gambarlama" id="inputAddress2" placeholder="Apartment, studio, or floor">


        <div class="form-group">
            <label for="inputAddress2">Nama</label>
            <input value="<?= $data['user']['nama'] ?>" type="text" class="form-control" name="nama" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input value="<?= $data['user']['email'] ?>" type="email" class="form-control" name="email" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input value="<?= $data['user']['pass'] ?>" type="password" class="form-control" name="password" id="inputPassword4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Foto</label>
            <input value="<?= $data['user']['img'] ?>" type="file" class="form-control" name="gambar" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <button type="submit" class="btn btn-primary">Perbaharui</button>

    </form>
</div>
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
</div>
<div class="jumbotron">


    <form class="user p-5" action="<?= BASE ?>/login/masuk" method="post">

        <?php if (isset($_SESSION['flash'])) { ?>
            <div class="row">
                <div class="col-xl-12 col-md-6 mb-4">
                    <?= Flasher::flash() ?>
                </div>
            </div>
        <?php } ?>

        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary btn-user btn-block">
            Login
        </button>

    </form>
</div>
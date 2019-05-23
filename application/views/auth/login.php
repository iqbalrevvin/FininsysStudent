<form action="<?php echo site_url('Authentication/loginAction')?>" method="post">
    <label class="form-group has-float-label mb-4">
        <input class="form-control" type="text" id="username" name="username" placeholder="Masukan Nama Pengguna Terdaftar" />
        <span>Nama Pengguna</span>
    </label>

    <label class="form-group has-float-label mb-4">
        <input class="form-control" type="password" id="password" name="password" placeholder="Mauskan Kata Sandi Terdaftar" />
        <span>Kata Sandi</span>
    </label>
    <div class="d-flex justify-content-between align-items-center">
        <a href="#">Lupa Kata Sandi?</a>
        <button class="btn btn-primary btn-lg btn-shadow" type="submit">
          Masuk <span id="btnLoading"></span>
        </button>
    </div>
</form>



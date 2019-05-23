
<div class="user d-inline-block">
    <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <span class="name"><?= $this->session->userdata('username'); ?></span>
        <span>
            <img alt="Profile Picture" src="<?= base_url('assets/img/foto_pd/') ?>" />
        </span>
    </button>

    <div class="dropdown-menu dropdown-menu-right mt-3">
        <!-- <a class="dropdown-item" href="#">Account</a>
        <a class="dropdown-item" href="#">Features</a>
        <a class="dropdown-item" href="#">History</a>
        <a class="dropdown-item" href="#">Support</a> -->
        <a class="dropdown-item" href="<?= base_url('Authentication/logout') ?>">
            <i class="simple-icon-logout"></i> Keluar
        </a>
    </div>
</div>
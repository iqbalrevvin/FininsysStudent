<div class="row">

    <div class="col-lg-12 col-xl-7">
        <div class="icon-cards-row">
            <div class="owl-container">
                <div class="owl-carousel dashboard-numbers">
	            	<a href="#" class="card">
	                    <div class="card-body text-center">
	                        <i class="simple-icon-trophy"></i>
	                        <p class="card-text mb-0">Peringkat Saat Ini</p>
	                        <p class="lead text-center">25</p>
	                    </div>
                    </a>
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="simple-icon-organization"></i>
                            <p class="card-text mb-0">Tingkat</p>
                            <p class="lead text-center"><?= grade($user->tahun_angkatan, $user->jumlah_semester) ?></p>
                        </div>
                    </a>
                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="simple-icon-organization"></i>
                            <p class="card-text mb-0">Semester</p>
                            <p class="lead text-center"><?= semester($user->tahun_angkatan, $user->jumlah_semester) ?></p>
                        </div>
                    </a>

                    <a href="#" class="card">
                        <div class="card-body text-center">
                            <i class="iconsmind-Home-5"></i>
                            <p class="card-text mb-0">Kelas</p>
                            <p class="lead text-center"><?= $user->nama_kelas ?></p>
                        </div>
                    </a>

 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="position-absolute card-top-buttons">
                        <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="simple-icon-refresh"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right mt-3">
                            <a class="dropdown-item" href="#">Sales</a>
                            <a class="dropdown-item" href="#">Orders</a>
                            <a class="dropdown-item" href="#">Refunds</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Quick Post</h5>
                        <div class="dashboard-quick-post">
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Content</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <label class="w-100">
                                            <select class="form-control select2-single">
                                                <option label="&nbsp;">&nbsp;</option>
                                                <option>Cakes</option>
                                                <option>Cupcakes</option>
                                                <option>Desserts</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="col-xl-5 col-lg-12 mb-4">
	    <div class="card h-100">
	        <div class="card-body">
	            <h5 class="card-title">Data <b><?= $user->nama_pd ?></b></h5>
	            <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
	            <!--     <thead>
	                    <tr>
	                        <th>Name</th>
	                        <th>Views</th>
	                    </tr>
	                </thead> -->
	                <tbody>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">Nama</p>
	                        </td>
	                        <td>
	                            <p class="text-bold">: <?= $user->nama_pd ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">Tingkat</p>
	                        </td>
	                        <td>
	                            <p class="text">: <?= grade($user->tahun_angkatan, $user->jumlah_semester) ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">Semester</p>
	                        </td>
	                        <td>
	                            <p class="text">: <?= semester($user->tahun_angkatan, $user->jumlah_semester) ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">NIK</p>
	                        </td>
	                        <td>
	                            <p class="text">: <?= $user->NIK_pd ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">NIPD</p>
	                        </td>
	                        <td>
	                            <p class="text">: <?= $user->nipd ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">NISN</p>
	                        </td>
	                        <td>
	                            <p class="text">: <?= $user->nisn ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">TTL</p>
	                        </td>
	                        <td>
	                            <p class="text">: <?= $user->tempat_lahir_pd ?>, <?= date_indo($user->tanggal_lahir_pd) ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">Agama</p>
	                        </td>
	                        <td>
	                            <p class="text-muted">1100</p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">test</p>
	                        </td>
	                        <td>
	                            <p class="text-muted">1003</p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">test</p>
	                        </td>
	                        <td>
	                            <p class="text-muted">952</p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">test</p>
	                        </td>
	                        <td>
	                            <p class="text-muted">924</p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">test</p>
	                        </td>
	                        <td>
	                            <p class="text-muted">842</p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">test</p>
	                        </td>
	                        <td>
	                            <p class="text-muted">810</p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">test</p>
	                        </td>
	                        <td>
	                            <p class="text-muted">605</p>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>
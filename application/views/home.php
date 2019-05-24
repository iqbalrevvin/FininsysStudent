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
                        <h5 class="card-title">Data Nilai</h5>
                        <table id="table" class="data-table table table-striped responsive" 
                        	data-order="[[ 2, &quot;desc&quot; ]]" width="750px">
                            <thead>
                                <tr>
                                    <th style="width:600px">Mata Pelajaran</th>
                                    <th>Smt</th>
                                    <th>Pengetahuan</th>
                                    <th>Keterampilan</th>
                                    <th>Sikap</th>
                                    <th>Sosial</th>
                     				<th>Spritual</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php foreach ($nilai as $nilai): ?>
	                                <tr>
	                                    <td >
	                                    	<small><b><?= $nilai->nama_mata_pelajaran ?></small></b>
	                                    </td>
	                                    <td><?= $nilai->semester ?></td>
	                                    <td><?= $nilai->nilai_pengetahuan ?></td>
	                                    <td><?= $nilai->nilai_keterampilan ?></td>
	                                    <td><?= $nilai->nilai_sikap ?></td>
	                                    <td><?= $nilai->nilai_sosial ?></td>
	                          			<td><?= $nilai->nilai_spritual ?></td>
	                                </tr>
 								<?php endforeach; ?>
                            </tbody>
                        </table>
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
	                            <p class="text">: <?= $user->agama ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">Provinsi</p>
	                        </td>
	                        <td>
	                            <p class="text">: <?= value($user->nama_provinsi) ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td><p class="list-item-heading">Kabupaten</p></td>
	                        <td>
	                            <p class="text">: <?= value($user->nama_kabupaten) ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">Kecamatan</p>
	                        </td>
	                        <td>
	                            <p class="text">: <?= value($user->nama_kecamatan) ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td><p class="list-item-heading">Kelurahan</p></td>
	                        <td>
	                            <p class="text">: <?= value($user->nama_kelurahan) ?></p>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                            <p class="list-item-heading">Status</p>
	                        </td>
	                        <td>
	                            <p class="text-muted">: <?= $user->status_pd ?></p>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>

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
                <h5 class="card-title">Data Nilai <?= $user->nama_pd ?></h5>
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
                                	<?= $nilai->nama_mata_pelajaran ?>
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
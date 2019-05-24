<div class="icon-cards-row">
    <div class="owl-container">
        <div class="owl-carousel dashboard-numbers">
            <?php $idMasterLeger = $nilaiRow->idMaster_leger ?>
            <?php $NIK = $user->NIK_pd ?>
            <?php $sumNilaiKelas = $this->Nilai_m->sumNilaiKelas($idMasterLeger); ?>
            <?php foreach ($sumNilaiKelas as $data): ?>
                <?php $sumNilaiPengetahuan = $data->nilai_pengetahuan ?>
                <?php $sumNilaiKeterampilan = $data->nilai_keterampilan ?>
                <?php $nilaiKelas[] = $sumNilaiPengetahuan+$sumNilaiKeterampilan ?>
            <?php endforeach; ?>
            <?php $jmlNilaiPengetahuan  = $this->Nilai_m->sumNilaiPengetahuan($idMasterLeger, $username); ?>
            <?php $jmlNilaiKeterampilan = $this->Nilai_m->sumNilaiKeterampilan($idMasterLeger, $username); ?>
            <?php $nilaiAkhir           = $jmlNilaiPengetahuan->nilai_pengetahuan+$jmlNilaiKeterampilan->nilai_keterampilan; ?>
            <?php $valueArray = implode(',',$nilaiKelas); ?>
            <?php $rank = $this->Nilai_m->rankSystem($nilaiAkhir, "'$valueArray'");  ?>
            
            <a href="#" class="card">
                <div class="card-body text-center">
                    <i class="simple-icon-trophy"></i>
                    <p class="card-text mb-0">Peringkat Saat Ini</p>
                    <p class="lead text-center"><?= $rank->rank ?></p>
                </div>
            </a>
            <a href="#" class="card">
                <div class="card-body text-center">
                    <i class="simple-icon-people"></i>
                    <p class="card-text mb-0">Jumlah Peserta Kelas</p>
                    <p class="lead text-center"><?= count($nilaiKelas); ?></p>
                </div>
            </a>
            <a href="#" class="card">
                <div class="card-body text-center">
                    <i class="simple-icon-organization"></i>
                    <p class="card-text mb-0">Tingkat Saat Ini</p>
                    <p class="lead text-center"><?= grade($user->tahun_angkatan, $user->jumlah_semester) ?></p>
                </div>
            </a>
            <a href="#" class="card">
                <div class="card-body text-center">
                    <i class="simple-icon-tag"></i>
                    <p class="card-text mb-0">Semester Saat Ini</p>
                    <p class="lead text-center"><?= semester($user->tahun_angkatan, $user->jumlah_semester) ?></p>
                </div>
            </a>

            <a href="#" class="card">
                <div class="card-body text-center">
                    <i class="iconsmind-Home-5"></i>
                    <p class="card-text mb-0">Kelas Saat Ini</p>
                    <p class="lead text-center"><?= $user->nama_kelas ?></p>
                </div>
            </a>
        </div>
    </div>
</div>
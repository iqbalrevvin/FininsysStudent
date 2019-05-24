<div class="card h-100">
    <div class="card-body">
        <h5 class="card-title">Identitas <b><?= $user->nama_pd ?></b></h5>
        <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
            <thead>
                <tr>
                    <th colspan="2" rowspan="" headers="" scope="">Data Utama</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="list-item-heading">Nama</p>
                    </td>
                    <td>
                        <p class="text-bold">: <?= value($user->nama_pd) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">NIK</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->NIK_pd) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">NIPD</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->nipd) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">NISN</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->nisn) ?></p>
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
                        <p class="text">: <?= $user->status_pd ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
            <thead>
                <tr>
                    <th colspan="2" rowspan="" headers="" scope="">Data Orang Tua</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="list-item-heading">Nama Ayah</p>
                    </td>
                    <td>
                        <p class="text-bold">: <?= value($user->nama_ayah) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Pendidikan Ayah</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->pendidikan_ayah) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Pekerjaan Ayah</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->pekerjaan_ayah) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Nama Ibu</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->nama_ibu) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Pendidikan Ibu</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->pendidikan_ibu) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Pekerjaan Ibu</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->pekerjaan_ibu) ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
            <thead>
                <tr>
                    <th colspan="2" rowspan="" headers="" scope="">Data Kontak</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p class="list-item-heading">No. Hp</p>
                    </td>
                    <td>
                        <p class="text-bold">: <?= value($user->no_telp_pd) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">E-Mail</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->email_pd) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Link Facebook</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->facebook) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Link Instagram</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->instagram) ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="list-item-heading">Link Twitter</p>
                    </td>
                    <td>
                        <p class="text">: <?= value($user->twitter) ?></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
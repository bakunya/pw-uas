<tr>
    <td class="py-3 px-0" colspan="4">
        <table class="table table-bordered border-dark">
            <thead>
                <tr>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Tugas / Aktivitas</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Kemampuan Akhir Yang Diharapkan Atau Dievaluasi</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Waktu</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Bobot</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Kriteria Penilaian</span>
                    </th>
                    <th class="bg-primary-subtle" colspan="2">
                        <span class="fw-normal">Indikator Penilaian</span>
                    </th>
                </tr>
            </thead>
            <?php foreach ($rps_tugas_aktivitas as $k => $v) : ?>
                <tr>
                    <td rowspan="<?= ($v['count_child'] ?? 0) + 1 ?>">
                        <span class="fw-normal"><?= $v['tugas_aktivitas'] ?></span>
                    </td>
                    <td rowspan="<?= ($v['count_child'] ?? 0) + 1 ?>">
                        <span class="fw-normal"><?= $v['kemampuan_akhir'] ?></span>
                    </td>
                    <td rowspan="<?= ($v['count_child'] ?? 0) + 1 ?>">
                        <span class="fw-normal"><?= $v['waktu'] ?></span>
                    </td>
                    <td rowspan="<?= ($v['count_child'] ?? 0) + 1 ?>">
                        <span class="fw-normal"><?= $v['bobot'] ?></span>
                    </td>
                    <td rowspan="<?= ($v['count_child'] ?? 0) + 1 ?>">
                        <span class="fw-normal"><?= $v['kriteria_penilaian'] ?></span>
                    </td>
                    <td rowspan="<?= ($v['count_child'] ?? 0) + 1 ?>">
                        <span class="fw-normal"><?= $v['indikator_penilaian'] ?></span>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </td>
</tr>
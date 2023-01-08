<tr>
    <td class="py-3 px-0" colspan="4">
        <table class="table table-bordered border-dark">
            <thead>
                <tr>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Kemampuan Akhir yang Diharapkan</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Indikator</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Bahan Kajian</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Metode Pembelajaran</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Waktu</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Metode Penilaian</span>
                    </th>
                    <th class="bg-primary-subtle">
                        <span class="fw-normal">Bahan Ajar</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rencana_pelaksanaan_pembelajaran as $k => $v) : ?>
                    <tr>
                        <td>
                            <span class="fw-normal"><?= $v['minggu'] ?? '.' ?></span>
                        </td>
                        <td>
                            <span class="fw-normal"><?= $v['kemampuan_akhir'] ?? '.' ?></span>
                        </td>
                        <td>
                            <span class="fw-normal"><?= $v['indikator'] ?? '.' ?></span>
                        </td>
                        <td>
                            <span class="fw-normal"><?= $v['topik'] ?? '.' ?></span>
                        </td>
                        <td>
                            <span class="fw-normal"><?= $v['strategi_belajar'] ?? '.' ?></span>
                        </td>
                        <td>
                            <span class="fw-normal"><?= $v['waktu'] ?? '.' ?></span>
                        </td>
                        <td>
                            <span class="fw-normal"><?= $v['penilaian'] ?? '.' ?></span>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </td>
</tr>
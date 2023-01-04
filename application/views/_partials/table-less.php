<?php if (isset($data) && !empty($data) && count($data) > 0) : ?>
    <table class="table table-borderless mt-5 align-middle">
        <thead>
            <tr>
                <?php foreach ($data[0] as $key => $value) : ?>
                    <?php if (!str_contains($key, 'id')) : ?>
                        <th class="py-3 px-0 text-capitalize"><small><?= snakecase_to_titlecase($key) ?></small></th>
                    <?php endif ?>
                <?php endforeach ?>
                <th class="py-3 px-0"><small>Action</small></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $k => $v) : ?>
                <tr>
                    <?php foreach ($v as $key => $value) : ?>
                        <?php if (!str_contains($key, 'id')) : ?>
                            <td class="py-3 px-0 text-capitalize"><small><?= $value ?></small></td>
                        <?php endif ?>
                    <?php endforeach ?>
                    <td class="py-3 px-0 d-flex">
                        <?php if ($types === 'RpsTugasAktivitas') :  ?>
                            <a href="<?= base_url("dashboard/update_tugas_aktivitas_bobot_kriteria?curr_id=" . $v['id']) ?>" class="btn btn-primary"><small><strong>Update</strong></small></a>
                        <?php elseif ($types === 'RpsTugasAktivitasBobotKriteria') :  ?>
                            <a href="<?= base_url("dashboard/update_tugas_aktivitas_bobot_kriteria_indikator_penilaian?curr_id=" . $v['id']) ?>" class="btn btn-primary"><small><strong>Update</strong></small></a>
                        <?php else : ?>
                            <a href="<?= base_url("formviews/update?types=" . $types . '&curr_id=' . $v['id']) ?>" class="btn btn-primary"><small><strong>Update</strong></small></a>
                        <?php endif ?>
                        <form class="ms-2 w-fit" action="<?= base_url("formactions/delete?types=" . $types . '&curr_id=' . $v['id']) ?>" method="post">
                            <button type="submit" class="btn btn-danger w-fit"><small><strong>Delete</strong></small></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else : ?>
    <p class="text-center mt-5"><strong><small>Not found.</small></strong></p>
<?php endif ?>
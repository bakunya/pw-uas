<table class="table table-borderless mt-5 align-middle">
    <thead>
        <th class="py-3 px-0">Kode Mata Kuliah</th>
        <th class="py-3 px-0">Mata Kuliah</th>
        <th class="py-3 px-0">Action</th>
    </thead>
    <tbody>
        <?php foreach ($rps as $k => $v) : ?>
            <tr>
                <td class="py-3 px-0"><?= $v['kode_matkul'] ?></td>
                <td class="py-3 px-0 text-capitalize"><?= $v['matkul'] ?></td>
                <td class="py-3 px-0 d-flex">
                    <a href="#" class="btn btn-success"><small><strong>Lihat RPS</strong></small></a>
                    <a href="<?= base_url('dashboard/update_rps?curr_id=' . $v['id']) ?>" class="ms-2 btn btn-primary"><small><strong>Update</strong></small></a>
                    <form class="ms-2 w-fit" action="<?= base_url("formactions/delete?types=Rps&curr_id=" . $v['id']) ?>" method="post">
                        <button type="submit" class="btn btn-danger w-fit"><small><strong>Delete</strong></small></button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
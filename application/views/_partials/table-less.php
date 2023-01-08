<?php if (isset($data) && !empty($data) && count($data) > 0) : ?>
    <div class="table-responsive">
        <table class="table table-borderless mt-5 align-middle">
            <thead>
                <tr>
                    <?php foreach ($data[0] as $key => $value) : ?>
                        <?php if (!str_contains($key, 'id')) : ?>
                            <th class="w-200 py-3 px-0 text-capitalize"><small><?= snakecase_to_titlecase($key) ?></small></th>
                        <?php endif ?>
                    <?php endforeach ?>
                    <th class="w-200 py-3 px-0"><small>Action</small></th>
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
                            <a href="<?= base_url("formviews/update?types=" . $types . '&curr_id=' . $v['id']) ?>" class="btn btn-primary"><small><strong>Update</strong></small></a>
                            <form class="ms-2 w-fit" action="<?= base_url("formactions/delete?types=" . $types . '&curr_id=' . $v['id']) ?>" method="post">
                                <button type="submit" class="btn btn-danger w-fit"><small><strong>Delete</strong></small></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
<?php else : ?>
    <p class="text-center mt-5"><strong><small>Not found.</small></strong></p>
<?php endif ?>
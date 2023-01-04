<div class="row items-center mt-5 pt-5">
    <div class="col-12 col-md-6">
        <h1 class="h6"><strong><small><?= $title ?></small></strong></h1>
    </div>
    <div class="col-12 col-md-6 d-flex">
        <a href="<?= base_url('formviews/store?types=' . $types . '&ref=' . $ref) ?>" class="btn btn-success d-block w-fit ms-auto"><small><strong>Create</strong></small></a>
        <?php if (isset($parent_update_url)) : ?>
            <a href="<?= $parent_update_url ?>" class="btn btn-warning d-block w-fit ms-2"><small><strong>Update parent</strong></small></a>
        <?php endif ?>
    </div>
</div>
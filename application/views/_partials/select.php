<fieldset class="mt-4 row">
    <div class="col-12">
        <label for="<?= $name ?>"><?= $title ?></label>
    </div>
    <div class="col-12">
        <div class="input-group mt-2 flex-nowrap">
            <select class="p-2 form-select" aria-label="Default select example" name="<?= $name ?>" id="<?= $name ?>">
                <?php foreach ($values as $k => $v) : ?>
                    <?php if ($v['id'] == $selected_id) : ?>
                        <option selected value="<?= $v['id'] ?>"><?= $v['nama'] ?></option>
                    <?php else : ?>
                        <option value="<?= $v['id'] ?>"><?= $v['nama'] ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select>
        </div>
    </div>
</fieldset>
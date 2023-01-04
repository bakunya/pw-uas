<nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <strong>RPS</strong>
        </a>
        <a href="<?= base_url('formviews/update_rps?curr_id=') . ($_GET['curr_id'] ?? '') ?>" class="btn btn-success">Update RPS</a>
    </div>
</nav>
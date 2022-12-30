<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= public_file('bs.min.css') ?>">
    <?php if (isset($css)) : ?>
        <?php foreach ($css as $c) : ?>
            <link rel="stylesheet" href="<?= public_file($c) ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    <title><?= $title ?? 'Miku-chan' ?></title>
</head>

<body>
    <?php if (null !== ($this->session->flashdata('message'))) : ?>
        <script>
            alert('<?= $this->session->flashdata('message') ?>');
        </script>
    <?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php if(isset($css)): ?>
        <?php foreach($css as $c): ?>
            <link rel="stylesheet" href="<?= base_url($c) ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    <title><?= $title ?? 'Miku-chan' ?></title>
</head>
<body>
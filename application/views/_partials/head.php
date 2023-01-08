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
    <style>
        .fs-xs {
            font-size: 10px;
        }

        .w-fit {
            width: fit-content;
            width: -moz-fit-content;
        }

        .w-200 {
            min-width: 200px;
        }

        .w-a4-landscape {
            width: 1123px !important;
            padding: 10px;
            margin: auto;
        }

        @media print {
            #print {
                display: none !important;
            }

            .pagebreak {
                clear: both;
                page-break-after: always;
            }

            * {
                page-break-inside: avoid;
            }

            html,
            body {
                height: auto;
                margin: 0;
            }

            table {
                page-break-after: auto;
                border-collapse: collapse;
            }

            tr {
                page-break-inside: avoid;
                page-break-after: auto
            }

            td {
                page-break-inside: avoid;
                page-break-after: auto
            }

            thead {
                display: table-header-group
            }
        }
    </style>
    <title><?= $title ?? 'Miku-chan' ?></title>
</head>

<body>
    <?php if (null !== ($this->session->flashdata('message'))) : ?>
        <script>
            alert('<?= $this->session->flashdata('message') ?>');
        </script>
    <?php endif; ?>
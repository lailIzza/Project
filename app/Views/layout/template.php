<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('asset/css/nav_fot.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/home_view.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/pemweb_view.css') ?>">
</head>
<body>
    <?= view('layout/navbar') ?>

    <?= $this->renderSection('content') ?>

    <?= view('layout/footer') ?>
</body>
</html>
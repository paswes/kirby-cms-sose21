<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?= css('assets/css/index.css') ?>
  <?= css('@auto') ?>
  <title><?= $site->title() ?></title>
</head>
<body>
<header class="header">
  <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>
  <?php snippet('menu') ?>
</header>
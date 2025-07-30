<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $pageTitle ?></title>
  <meta name="robots" content="index,follow">
  <meta name="description" content="">
  <meta name="thumbnail" content="">
  <meta property="og:site_name" name="og:site_name" content="trnstnradio">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $page->url(); ?>">
  <meta property="og:title" content="<?= $pageTitle ?>">
  <meta property="og:description" content="">
  <meta property="og:image" content="">

  <link rel="shortcut icon" type="image/png" href="./favicon.png">
  <link rel="icon" type="image/png" href="./favicon.png" />

  <?= vite()->css('main.css') ?>
  <?= vite()->js('main.js') ?>

</head>

<body>
  <main>
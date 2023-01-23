<?php

$session = session();

$currentUser = $session->get('user_name');

?>

<head> 
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/assets/css/userView.css" rel="stylesheet" type="text/css">
</head>

<h1 style="text-align:center; font-size:20px; color: white;">Welcome back, <?= $currentUser; ?></h1>

<div style="text-align:center; color:white; margin-top: 50px">
    <a href="<?= base_url(); ?>/products" style="display:inline-block; font-size: 20px">View Products</a>
</div>

<div class="container" style="text-align: center; margin-top: 50px">
    <form action="<?= base_url(); ?>/login/logout" method="post">
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
</div>
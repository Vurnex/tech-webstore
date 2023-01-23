<?php

$session = session();

$currentUser = $session->get('user_name');

?>

<head> 
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/assets/css/aboutStyle.css" rel="stylesheet" type="text/css">
</head>

<div class="center">
    <p>Web app store that presents users with a list of products that they can choose to buy.
    Users can create an account or use a pre-existing test account to view the website and make a transaction.
    Users can also log into an admin account which has the ability to add, edit, view, and delete products and transactions.</p>
    
    <a href="<?= base_url(); ?>/dashboard" style="display:inline-block; font-size: 20px; margin-top: 20px">Return to Dashboard</a>
</div>
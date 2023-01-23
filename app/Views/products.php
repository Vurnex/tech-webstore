<head> 
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/assets/css/productView.css" rel="stylesheet" type="text/css">
      <script src="<?= base_url(); ?>/assets/js/productScript.js" type="text/javascript"></script>
</head>

<title>Products</title>

<?php if (! empty($products) && is_array($products)): ?>

<?php foreach ($products as $product_item): ?>

    <h1 class="name">Product: <?= esc($product_item['name']) ?></h1>

    <!-- Determine the image to be loaded -->

    <?php if ($product_item['name'] == "Smartphone"): ?>
        <img src="<?php echo base_url();?>/assets/images/smartphone.png" class="images">
    <?php endif;?>

    <?php if ($product_item['name'] == "Laptop"): ?>
        <img src="<?php echo base_url();?>/assets/images/laptop.png" class="images">
    <?php endif;?>

    <?php if ($product_item['name'] == "Battery Pack"): ?>
        <img src="<?php echo base_url();?>/assets/images/batterypack.png" class="images">
    <?php endif;?>

    <?php if ($product_item['name'] == "Smartwatch"): ?>
        <img src="<?php echo base_url();?>/assets/images/smartwatch.png" class="images">
    <?php endif;?>

    <?php if ($product_item['name'] == "Headphones"): ?>
        <img src="<?php echo base_url();?>/assets/images/headphones.png" class="images">
    <?php endif;?>

    <?php if ($product_item['name'] == "Wireless Charger"): ?>
        <img src="<?php echo base_url();?>/assets/images/wirelesscharger.png" class="images">
    <?php endif;?>

    <?php if ($product_item['name'] == "Bluetooth Speaker"): ?>
        <img src="<?php echo base_url();?>/assets/images/bluetoothspeaker.png" class="images">
    <?php endif;?>

    <!-- ^^^ Determine the image to be loaded ^^^ -->

    <p class="price">Price: $<?= esc($product_item['price'])?></p>

    <p class="description"><?= esc($product_item['description'])?></p>

    <div class="card">
        <button id="id<?php echo $product_item['prodID'] ?>">Add to Cart</button>
    </div>

    <p class="border-products"> </p>

<?php endforeach ?>

<?php else: ?>

<h3 style="text-align: center">No Products</h3>

<p style="text-align: center">No products are currently available.</p>

<?php endif ?>

<div id="checkoutbutton">
    <form action="<?= base_url();?>/cart" method="post" id="checkoutForm">

        <!-- Hidden inputs to grab variables for POST-->
        <input type="hidden" value="Test" id="testprodinput" name="testedinput"/>
        <input type="hidden" value="Test" id="smartphoneinput" name="smartphonedinput"/>
        <input type="hidden" value="Test" id="laptopinput" name="laptopedinput"/>
        <input type="hidden" value="Test" id="batterypackinput" name="batterypackedinput"/>
        <input type="hidden" value="Test" id="smartwatchinput" name="smartwatchedinput"/>
        <input type="hidden" value="Test" id="headphonesinput" name="headphonedinput"/>
        <input type="hidden" value="Test" id="wirelessinput" name="wirelessedinput"/>
        <input type="hidden" value="Test" id="bluetoothinput" name="bluetoothedinput"/>

        <input type="submit" class="feedback" value="Checkout" id="submitCheckout"/>
    </form>
</div>

<div style="text-align:center; margin-top: 50px">
    <a href="<?= base_url(); ?>/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
</div>

<script src="<?= base_url(); ?>/assets/js/productScript.js" type="text/javascript"></script>
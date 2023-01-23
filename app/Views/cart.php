<?php

  $session = session();

  $result = $_POST['testedinput'];
  $result2 = $_POST['smartphonedinput'];
  $result3 = $_POST['laptopedinput'];
  $result4 = $_POST['batterypackedinput'];
  $result5 = $_POST['smartwatchedinput'];
  $result6 = $_POST['headphonedinput'];
  $result7 = $_POST['wirelessedinput'];
  $result8 = $_POST['bluetoothedinput'];

  $smartphoneInCart = false;
  $laptopInCart = false;
  $batterypackInCart = false;
  $smartwatchInCart = false;
  $headphonesInCart = false;
  $wirelessInCart = false;
  $bluetoothInCart = false;
  $itemsinCart = null; //check if any items are in the cart at all. 

  $smartphone = "";
  $laptop = "";
  $batterypack = "";
  $smartwatch = "";
  $headphones = "";
  $wirelesscharger = "";
  $bluetoothspeaker = "";
  
  $_SESSION['itemsCombined'] = "";

  
  if ($result == "testprodpost"){

    //echo $result;
  }

  if ($result2 == "smartphonepost"){

    $smartphoneInCart = true;
    $itemsinCart = true;
    
    $_SESSION['itemsCombined'] .= "smartphone";
  }

  if ($result3 == "laptoppost"){

    $laptopInCart = true;
    $itemsinCart = true;
    
    $_SESSION['itemsCombined'] .= ", " . "laptop";

    $laptop = "laptop";
  }

  if ($result4 == "batterypackpost"){

    $batterypackInCart = true;
    $itemsinCart = true;
    
    $_SESSION['itemsCombined'] .= ", " . "batterypack";
  }

  if ($result5 == "smartwatchpost"){

    $smartwatchInCart = true;
    $itemsinCart = true;

    $_SESSION['itemsCombined'] .= ", " . "smartwatch";
  }

  if ($result6 == "headphonespost"){

    $headphonesInCart = true;
    $itemsinCart = true;

    $_SESSION['itemsCombined'] .= ", " . "headphones";
  }

  if ($result7 == "wirelesspost"){

    $wirelessInCart = true;
    $itemsinCart = true;

    $_SESSION['itemsCombined'] .= ", " . "wirelesscharger";
  }

  if ($result8 == "bluetoothpost"){

    $bluetoothInCart = true;
    $itemsinCart = true;

    $_SESSION['itemsCombined'] .= ", " . "bluetoothspeaker";
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="<?= base_url(); ?>/assets/js/cartScript.js" type="text/javascript"></script>
  <link href="<?= base_url(); ?>/assets/css/cartStyle.css" rel="stylesheet" type="text/css">

</head>

<body>

<h1 class="text-white">Shopping Cart</h1>

  <div class="shopping-cart">

    <div class="column-labels">
      <label class="product-image text-white">Image</label>
      <label class="product-details text-white">Product</label>
      <label class="product-price text-white">Price</label>
      <label class="product-quantity text-white">Quantity</label>
      <label class="product-removal text-white">Remove</label>
      <label class="product-line-price text-white">Total</label>
    </div>

    <!-- Check if the variable has been set. If not, no items are in the cart. -->
    <?php if(isset($itemsinCart)):?>    
      
      <!-- Smartphone -->

      <?php if($smartphoneInCart == True):?>

      <div class="product">

        <div class="product-image">
          <img src="<?php echo base_url();?>/assets/images/smartphone.png">
        </div>
        <div class="product-details">
          <div class="product-title">Smartphone</div>
          <p class="product-description">Sample smartphone.</p>
        </div>
        <div class="product-price">500.00</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1" max="10">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">500.00</div>
      </div>

      <?php endif ?>

      <!-- Laptop -->

      <?php if($laptopInCart == True):?>

      <div class="product">

        <div class="product-image">
          <img src="<?php echo base_url();?>/assets/images/laptop.png">
        </div>
        <div class="product-details">
          <div class="product-title">Laptop</div>
          <p class="product-description">Sample laptop.</p>
        </div>
        <div class="product-price">400.00</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1" max="10">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">400.00</div>
      </div>

      <?php endif ?>

      <!-- Battery Pack -->

      <?php if($batterypackInCart == True):?>

      <div class="product">

        <div class="product-image">
          <img src="<?php echo base_url();?>/assets/images/batterypack.png">
        </div>
        <div class="product-details">
          <div class="product-title">Battery Pack</div>
          <p class="product-description">Sample Battery Pack.</p>
        </div>
        <div class="product-price">50.00</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1" max="10">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">50.00</div>
      </div>

      <?php endif ?>

      <!-- Smartwatch -->

      <?php if($smartwatchInCart == True):?>

      <div class="product">

        <div class="product-image">
          <img src="<?php echo base_url();?>/assets/images/smartwatch.png">
        </div>
        <div class="product-details">
          <div class="product-title">Smartwatch</div>
          <p class="product-description">Sample Smart Watch.</p>
        </div>
        <div class="product-price">250.00</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1" max="10">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">250.00</div>
      </div>

      <?php endif ?>

      <!-- Headphones -->

      <?php if($headphonesInCart == True):?>

      <div class="product">

        <div class="product-image">
          <img src="<?php echo base_url();?>/assets/images/headphones.png">
        </div>
        <div class="product-details">
          <div class="product-title">Headphones</div>
          <p class="product-description">Sample Headphones.</p>
        </div>
        <div class="product-price">350.00</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1" max="10">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">350.00</div>
      </div>

      <?php endif ?>

      <!-- Wireless Charger -->

      <?php if($wirelessInCart == True):?>

      <div class="product">

        <div class="product-image">
          <img src="<?php echo base_url();?>/assets/images/wirelesscharger.png">
        </div>
        <div class="product-details">
          <div class="product-title">Wireless Charger</div>
          <p class="product-description">Sample Wireless Charger.</p>
        </div>
        <div class="product-price">50.00</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1" max="10">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">50.00</div>
      </div>

      <?php endif ?>

      <!-- Bluetooth Speaker -->

      <?php if($bluetoothInCart == True):?>

      <div class="product">

        <div class="product-image">
          <img src="<?php echo base_url();?>/assets/images/bluetoothspeaker.png">
        </div>
        <div class="product-details">
          <div class="product-title">Bluetooth Speaker</div>
          <p class="product-description">Sample Bluetooth Speaker.</p>
        </div>
        <div class="product-price">100.00</div>
        <div class="product-quantity">
          <input type="number" value="1" min="1" max="10">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">100.00</div>
      </div>

      <?php endif ?>
    
      <?php else: ?>

      <p style="text-align:center; margin-top: 100px">There are no items in the cart currently.</p>

    <?php endif ?>

  <h2></h2> <!-- used for displaying new products before this element -->

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal:</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%):</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping:</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total:</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>

<div>
    <form action="<?= base_url();?>/cart/complete" method="post" id="">
        <input type="hidden" value=" " id="totalInput" name="totaledInput"/>
        <input type="hidden" value=" " id="productListID" name="productList"/>
        <input type="submit" class="checkout" value="Checkout" id=""/>
    </form>
</div>

</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src="<?= base_url(); ?>/assets/js/cartScript.js" type="text/javascript"></script>

</body>
</html>

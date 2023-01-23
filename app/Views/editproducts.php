<?php

$session = session();

$currentUser = $session->get('user_name');

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>/assets/css/addProdStyle.css" rel="stylesheet" type="text/css">
    <script src="<?= base_url(); ?>/assets/js/addProdScript.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Edit Products</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">

                <h1 style="margin-top: 50px; margin-bottom: 50px;">Edit Available Products</h1>

                <!-- If session cookie not set, message stays hidden -->
                <?php if(isset($_SESSION['success3'])):?>
                    <div class="alert alert-success">
                        <strong>Changes saved successfully.</strong>
                    </div>
                <?php endif;?>

                <!-- -->
                <?php if(isset($_SESSION['fail1'])):?>
                    <div class="alert alert-danger">
                        <strong>That product is not in the database. Please <a href="<?= base_url();?>/addproducts">add</a> it first.</strong>
                    </div>
                <?php endif;?>

                <!-- Call the save method from the Register controller -->
                <form action="<?= base_url();?>/editproducts/save" method="post" class="items-menu">
                    <label for="menu">Make changes and save. *Both fields are required.</label>
                    
                    <label for="chosenItem">Choose a product ready for distribution.</label>
                    
                    <select name="chosenItem" class="form-select">
                      <option value="1">smartphone</option>
                      <option value="2">laptop</option>
                      <option value="3">batterypack</option>
                      <option value="4">smartwatch</option>
                      <option value="5">headphones</option>
                      <option value="6">wirelesscharger</option>
                      <option value="7">bluetoothspeaker</option>
                    </select>
                    
                    <label>*Product Price:</label>
                    
                    <input type="number" name="productPrice" min="1" max="9999" required>
                    
                    <label>*Product Description:</label>
                    
                    <input type="text" id="input" name="productDesc" pattern="[a-zA-Z0-9]+[a-zA-Z0-9 ]+"
                    oninvalid="setCustomValidity('Please enter letters only.')" maxlength="250"
                    onchange="this.setCustomValidity('')" required>

                    <button type="submit" class="btn btn-primary" id="saveButton">Save</button>

                </form>

                <div style="text-align:center; color:white; margin-top: 50px">
                    <a href="<?= base_url();?>/products" style="display:inline-block; font-size: 20px">View Products</a>
                </div>

                <div style="text-align:center; margin-top: 20px">
                    <a href="<?= base_url();?>/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
                </div>

            </div>
        </div>
    </div>

<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<script src="<?= base_url(); ?>/assets/js/addProdScript.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

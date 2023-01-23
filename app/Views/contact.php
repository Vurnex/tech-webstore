<?php

$session = session();

$currentUser = $session->get('user_name');

?>

<head> 
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/assets/css/contactStyle.css" rel="stylesheet" type="text/css">
      <script src="<?= base_url();?>/assets/js/contactScript.js" type="text/javascript"></script>
</head>

<section class="form-container">
	<form method="post" class="contact-form" onsubmit="tyAlert()">
		<p>Required fields are indicated by *</p>

		<label for="fName">* First Name:</label>
		<input type="text" name="fName" id="fName" required>
	
		<label for="1Name">* Last Name:</label>
		<input type="text" name="1Name" id="1Name" required>
	
		<label for="email">* Email:</label>
		<input type="email" name="email" id="email" required>
	
		<label for="phone">* Phone:</label>
		<input type="tel" id="phone" name="phone" required>
	
		<label for="questions">* Questions and Concerns</label>
	
		<textarea id="questions" name="questions" rows="3" cols="25" required></textarea>
	
		<input type="submit" id="submit" value="Submit" class="btn btn-secondary">
		<input type="reset" id="reset" value="Reset Form" class="btn btn-secondary">
	</form>
</section>

<div style="text-align:center; color:white; margin-top: 50px">
    <a href="<?= base_url(); ?>/dashboard" style="display:inline-block; font-size: 20px">Return to Dashboard</a>
</div>
<?php

$session = session();

$currentUser = $session->get('user_name');

?>

<head> 
      <meta charset = "utf-8">
      <link href="<?= base_url(); ?>/assets/css/aboutStyle.css" rel="stylesheet" type="text/css">
</head>

<div class="center">
    <h1>Tech Web Store Privacy Policy</h1>
    <p>This Privacy Policy describes how your personal information is collected, used, and shared 
    when you visit or make a "purchase". First and foremost, this is a website project. No transactions made
    are real and is for demonstration purposes only. User passwords are also hashed so they are unknown on our end.</p>
    
    <h2>WHAT PERSONAL INFORMATION WE COLLECT</h2>
    <p>No information is collected by this website specifically, however there may be information collected by the hosting provider.
    Information such as your device, web browser, IP address, time zone, and some of the cookies that are installed on your device.</p>
    
    <h2>HOW DO WE USE YOUR PERSONAL INFORMATION</h2>
    <p>No personal information is required in order to test this website. However, in the event any personal information is stored, it will be
    visible to others if it is stored in product descriptions when editting from the admin account. We advise against entering any personal information.</p>
    
    <h2>BEHAVIOURAL ADVERTISING</h2>
    <p>No information is used in advertising. However, we cannot say whether or not information that may be collected by the hosting provider is used in such
    a manner.</p>
    
    <h2>YOUR RIGHTS</h2>
    <p>If you are a European resident, you have the right to access the personal information we hold about you and to ask that your personal information is 
    corrected, updated, or deleted. If you would like to exercise this right, please contact us.</p>
    
    <h2>DATA RETENTION</h2>
    <p>When you place an order through the site or create an account, we will maintain your information for our records unless and until you ask us to delete 
    this information.</p>
    
    <h2>CHANGES</h2>
    <p>We may update this privacy policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal or regulatory reasons.</p>
    <p>If you have questions and/or require more information, do not hesitate to contact us through the contact page.</p>
    
    <a href="<?= base_url(); ?>/dashboard" style="display:inline-block; font-size: 20px; margin-top: 20px">Return to Dashboard</a>
</div>
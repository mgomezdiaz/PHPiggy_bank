<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset='utf-8'>
    <title>PHPiggy Bank</title>

    <?php require('logic.php');?>

</head>

<body>
	

    <img src='http://making-the-internet.s3.amazonaws.com/php-phpiggy-bank.png' alt='PHPiggy Bank Logo'>

    <p>
     You have $<?php echo $total; ?> in your piggy bank.
    
    </p>
<img src='http://making-the-internet.s3.amazonaws.com/<?=$image;?>'>

Today is <?php echo date('D M j g:i A e');?>
</body>
</html>
<?php

session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Registration System</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
    <body>
    	<?php include('header.php'); ?>
    	<?php
			include('connect.php');

			$ud_ID = $_POST["ID"];

			$ud_name = mysql_real_escape_string($_POST['udy_name']);
			$ud_gender = mysql_real_escape_string($_POST['udgender']);
			$ud_dob = mysql_real_escape_string($_POST['uddob']);
			$ud_nationality = mysql_real_escape_string($_POST['udnationality']);
			$ud_address = mysql_real_escape_string($_POST['udaddress']);
			$ud_email = mysql_real_escape_string($_POST['ude_mail']);
			$ud_mobilenumber = mysql_real_escape_string($_POST['uda_r_claimed']);
			$ud_studentnumber = mysql_real_escape_string($_POST['udreg_id']);


			$query = "UPDATE data SET p_y_name = '$ud_name', p_gender = '$ud_gender', p_dob = '$ud_dob', p_nationality = '$ud_nationality', p_address = '$ud_address', p_e_mail = '$ud_email', p_a_r_claimed = '$ud_mobilenumber', p_reg_id = '$ud_studentnumber' WHERE id = '$ud_ID'";


			mysql_query($query) or die(mysql_error());

			if (mysql_affected_rows()>=1) {
				echo "<p>($ud_ID) Record Updated!</p>";

			} else {
				echo "<p>($ud_ID) Record Not Updated!</p>";
			}

		?>
    </body>
 </html>
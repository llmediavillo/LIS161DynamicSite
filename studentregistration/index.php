<?php

session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}
else {
?>
<?php //echo $dataofpage ; ?>

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
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-theme.css">
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

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                    	<?php include('header.php'); ?>
                    </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Register Student Now</h3>
	                            		<p>Fill in the form below to register a student:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Full Name</label>
				                        	<input type="text" name="y_name" placeholder="Student's Full Name..." class="form-first-name form-control" id="username">
				                        </div>
                                        <div class="form-group">
                                            Sex 
                                            <label class="sr-only" for="sex">Sex</label>
                                            <select name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            Birthdate
                                            <label class="sr-only" for="birthdate">Birthdate</label>
                                            <input type="date" name="dob">
                                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="nationality">Nationality</label>
				                        	<input type="text" name="nationality" placeholder="Enter Nationality..." class="form-last-name form-control" id="form-last-name">
				                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="address">Address</label>
                                            <input type="text" name="address" placeholder="Enter Address..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="email">E-mail</label>
                                            <input type="text" name="e_mail" placeholder="Enter e-mail..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="mobilenumber">Mobile Number</label>
                                            <input type="text" name="a_r_claimed" placeholder="Enter mobile number..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            Upload Image
                                            <label class="sr-only" for="image">Upload Image</label>
                                            <input type="file" name="image">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="studentnumber">Student Number</label>
                                            <input type="text" name="reg_id" placeholder="Enter Student Number..." class="form-last-name form-control" id="form-last-name">
                                        </div>
				                        <button type="submit" name="submit" class="btn">Register Student</button>
				                    </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>

<?php
include("connect.php");
if(isset($_POST['submit']))
{
$post_y_name=$_POST['y_name'];
$post_gender=$_POST['gender'];
$post_dob=$_POST['dob'];
$post_nationality=$_POST['nationality'];
$post_address=$_POST['address'];
$post_e_mail=$_POST['e_mail'];
$post_a_r_claimed=$_POST['a_r_claimed'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
$post_reg_id=$_POST['reg_id'];

if($post_y_name=='' or $post_gender=='' or $post_dob=='')
{
 echo "<script>alert('Any of the fields is Empty ')</script>";
 
}
else
{
if($image_type=="image/jpeg" or $image_type=="image/png"
 or $image_type="image/gif")
 {
	if($image_size<=500000)
	{
		move_uploaded_file($image_tmp,"images/$image_name");
	}
	else
	{
	echo "<script>alert('Image is larger, only 50kb size is allowed')</script>";
	
	}
 }
 else
 {
 echo "<script>alert('image type is invalid')</script>";
 }

$query= "insert into data
(p_y_name,p_gender,p_dob,p_nationality,p_address,p_e_mail,p_a_r_claimed,p_img,p_reg_id)
values('$post_y_name','$post_gender','$post_dob','$post_nationality','$post_address','$post_e_mail','$post_a_r_claimed','$image_name','$post_reg_id')";
if(mysql_query($query))
 {
echo  "<script>alert('All Post And Image has been send in database')</script>";
 }
 else
 {
 echo "<script>alert('All Post And Image has Not been send in database')</script>";
 }
}


}
}
?>
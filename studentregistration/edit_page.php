<?php

session_start();

if(!isset($_SESSION['user_name'])){
  header("location: login.php");
  }
?>
<?php
  include('connect.php');

        $edit_page = $_GET['edit_page'];
        $query = mysql_query("SELECT * FROM data WHERE id='$edit_page'") or die(mysql_error());

        if (mysql_num_rows($query) >=1 ) {
            while ($row = mysql_fetch_array($query)) {
              $name = $row['p_y_name'];
              $gender = $row['p_gender'];
              $dob = $row['p_dob'];
              $nationality = $row['p_nationality'];
              $address = $row['p_address'];
              $email = $row['p_e_mail'];
              $mobilenumber = $row['p_a_r_claimed'];
              $image = $row['p_img'];
              $studentnumber = $row['p_reg_id'];
          }
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
      <?php include('header.php'); ?>
      <div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                          
                          <div class="form-box">
                            <div class="form-top">
                              <div class="form-top-left">
                                <h3>Update Student Profile Now</h3>
                                  <p>Fill in the form below to update selected student's profile:</p>
                              </div>
                              <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                              </div>
                              </div>
                              <div class="form-bottom">
                            <form name="iksk" method="post" action="update.php" class="registration-form">
                              <div class="form-group">
                                <input type="hidden" name="ID" value="<?=$edit_page;?>">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-first-name">Full Name</label>
                                  <input type="text" id="username" name="udy_name" value="<?=$name;?>" class="form-first-name form-control" id="username">
                                </div>
                                        <div class="form-group">
                                            Sex 
                                            <label class="sr-only" for="sex">Sex</label>
                                            <select name="udgender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            Birthdate
                                            <label class="sr-only" for="birthdate">Birthdate</label>
                                            <input type="date" name="uddob" value="<?=$dob;?>">
                                        </div>
                                <div class="form-group">
                                  <label class="sr-only" for="nationality">Nationality</label>
                                  <input type="text" name="udnationality" value="<?=$nationality;?>" class="form-last-name form-control" id="form-last-name">
                                </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="address">Address</label>
                                            <input type="text" name="udaddress" value="<?=$address;?>" class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="email">E-mail</label>
                                            <input type="text" name="ude_mail" value="<?=$email;?>" class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="mobilenumber">Mobile Number</label>
                                            <input type="text" name="uda_r_claimed" value="<?=$mobilenumber;?>" class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="studentnumber">Student Number</label>
                                            <input type="text" name="udreg_id" value="<?=$studentnumber;?>" class="form-last-name form-control" id="form-last-name">
                                        </div>
                                <button type="submit" name="submit" class="btn">Update</button>
                            </form>
                          </div>
                          </div>
                          
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </body>
</html>
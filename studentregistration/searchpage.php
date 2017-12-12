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
                        <h3>Search Student Profile Now</h3>
                        <p>Enter Student's Name or Student Number to Search:</p>
                      </div>
                      <div class="form-top-right">
                        <i class="fa fa-search"></i>
                      </div>
                      <div class="form-bottom">
                        <form id="form1" name="form1" method="post" action="">
                          <label class="sr-only" for="form-search">Search</label>
                          <input type="text" name="search" placeholder="Enter Search Term..." class="form-first-name form-control" id="search">
                          <button type="submit" name="submit" class="btn">Search</button>
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
<?php

            include("connect.php");
            $output='';
            //collect
            if(isset($_POST['search'])) {
                      $searchq=$_POST['search'];
                     
             
             $query=mysql_query("SELECT * FROM data WHERE p_y_name LIKE '%$searchq%' or p_reg_id LIKE '%$searchq%'") or die("could not search !");
             $count = mysql_num_rows($query);
             if ($count==0){
             $output = 'There was No Search Result' ;
             }
             else{
                   while($row = mysql_fetch_array($query)) {
                 $no1=$row['1'];
                 $no2=$row['2'];
                 $no3=$row['3'];
                 $no4=$row['4'];
                 $no5=$row['5'];
                 $no6=$row['6'];
                 $no7=$row['7'];
                 $no8=$row['9'];
                 $output .='<table width="1000" border="1" align="center">
              <tr>
                <td width="6%"><span class="style1">Name</span></td>
                <td width="8%"><span class="style1">Gender</span></td>
                <td width="12%"><span class="style1">Date Of Birth</span></td>
                <td width="15%"><span class="style1">Nationality</span></td>
                <td width="13%"><span class="style1">Address</span></td>
                <td width="8%"><span class="style1">E-mail</span></td>
                <td width="8%"><span class="style1">Mobile Number</span></td>
                <td width="9%"><span class="style1">Student Number</span></td>
               
              </tr>
             
              <tr>
                <td>'.$no1.'</td>
                <td>'.$no2.'</td>
                <td>'.$no3.'</td>
                <td>'.$no4.'</td>
                <td>'.$no5.'</td>
                <td>'.$no6.'</td>
                <td>'.$no7.'</td>
                <td>'.$no8.'</td>
                
              </tr>
             
            </table><br><br>';
                 
                 }
             
             }
            }

      ?><br />
      <?php echo($output);  ?>
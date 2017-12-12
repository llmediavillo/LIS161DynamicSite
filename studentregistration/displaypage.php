<?php

session_start();

if(!isset($_SESSION['user_name'])){
	header("location: login.php");
	}

?>
<?php 
include("connect.php");
$sql="SELECT * FROM data";

$query=mysql_query($sql)or die(mysql_error());

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
    <?php include('header.php');?>
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading">Displaying All Student Profiles In Database</div>
              <form method="" action="displaypage.php">
              <table class="table">
                    <tr>
                      <td>Name</td>
                      <td>Gender</td>
                      <td>Date Of Birth</td>
                      <td>Nationality</td>
                      <td>Address</td>
                      <td>E-mail</td>
                      <td>Mobile Number</td>
                      <td>Student Number</td>
                      <td>Print</td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>
                    <?php while($row=mysql_fetch_array($query)){?>
                    <tr>
                      <td><?php echo $row['1']?></td>
                      <td><?php echo $row['2']?></td>
                      <td><?php echo $row['3']?></td>
                      <td><?php echo $row['4']?></td>
                      <td><?php echo $row['5']?></td>
                      <td><?php echo $row['6']?></td>
                      <td><?php echo $row['7']?></td>
                      <td><?php echo $row['9']?></td>
                      <td><a href="printpage.php?print=<?php echo $row['0'];?>";>Print</a></td>
                      <td><a href='edit_page.php?edit_page=<?php echo $row['0']; ?>'>Edit</a></td>
                      <td><a href='delete_page.php?del_page=<?php echo $row['0']; ?>'>Delete</a></td>
                    </tr>
                  <?php } ?>
                  </table></td>
                </tr>
              </table>
            </form>
        </div>
      </div>
    </body>
</html>

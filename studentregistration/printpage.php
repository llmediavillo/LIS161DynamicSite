<?php

session_start();

if(!isset($_SESSION['user_name'])){
  header("location: login.php");
  }
?>
<html>
<head>
  <?php include('header.php'); ?>
	 <style type="text/css">
<!--
body,td,th {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style3 {font-size: 12px; font-weight: bold; }
-->
     </style>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
        <body>
            <div align="center" id="divToPrint" >
              <h2 align="center">Print this Profile</h2>
               <input type="button" value="Print" onClick="PrintDiv();"/>
                <hr />
            </div>
<?php 
include("connect.php");
$print_page=$_REQUEST['print'];
$query ="SELECT * FROM `data` where `id`='$print_page'";
$data=mysql_query($query);
while($res=mysql_fetch_assoc($data))
{
?>

<script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=900,height=600');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>

</head>
<body>
<table width="1342" height="900" border="0" align="center">
  <tr>
    <td><div align="center"><h1>STUDENT PROFILE</h1></div></td>
  </tr>
  <tr>
    <td><div align="center">Registration Number : <?php echo $res['p_reg_id'];?>&nbsp; &nbsp;</div></td>
  </tr>
  <tr>
    <td height="373"><div align="center">
      <table width="900px" height="" border-top="1" bordercolor="#006633">
        <tr>
          <td width="58%" height="365" valign="top">
              
              <div align="center">
                <table width="800" height="700" border="0" align="left">
                  <tr>
                    <td width="36%" height="20"><blockquote class="style3">
	                    <p>Name :-</p>
                    </blockquote></td>
                    <td width="32%"><span class="style3"><?php echo $res['p_y_name'];?></span></td>
                    <td width="32%" rowspan="9" valign="top"><p><img src="images/<?php echo $res['p_img']?>" width="120" height="128"></p>
                    <p>Student Image </p></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Gender :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_gender'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Date of Birth :- </p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_dob'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>Nationality :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_nationality'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20" colspan="0"><blockquote class="style3">
	                    <p>Address :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_address'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
	                    <p>E-Mail :-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_e_mail'];?></span></td>
                  </tr>
                  <tr>
                    <td height="20"><blockquote class="style3">
                      <p>Mobile Number:-</p>
                    </blockquote></td>
                    <td><span class="style3"><?php echo $res['p_a_r_claimed'];?></span></td>
                  </tr>
                </table>
            </div></td>
          </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
<?php } ?>
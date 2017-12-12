<?php
include("connect.php");

$delete_page=$_GET['del_page'];

$query="delete from data where id='$delete_page'";

if(mysql_query($query))

{

echo "<script>window.open('displaypage.php?deleted=Record deleted!','_self')</script>";


}
else
{
echo "not deleted this page";

}
?>


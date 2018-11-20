<?php
include("dbconn.php");
/* catch the post data from ajax */
  $rname = $_REQUEST['ename'];
     
   if(isset($_REQUEST['pass']))
      {
     $rpass= $_REQUEST['pass'];

$mysqldb="select m_menu_id  from tbl_users where user_name='$rname' and user_password='$rpass' ";
    $result= mysqli_query($conn, $mysqldb);
    while($row = mysqli_fetch_assoc($result))
    {
         echo $row['m_menu_id'];
    }
   
   }
   else
   {
       echo "no data";
   }
   
?>
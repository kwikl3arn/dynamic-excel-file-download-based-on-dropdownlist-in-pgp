<?php
include 'dbconn.php';
echo $empname=$_REQUEST['pass'];

        ?>
<html>
    <body>
        <select>
            <?php
           echo $mysqldb1="select user_password from tbl_users where user_name='$empname' ";  
          $result1 = mysqli_query($conn,$mysqldb1);
          $check=mysqli_num_rows($result1);
          if($check==1)
          {
        while($row1 = mysqli_fetch_assoc($result1)) 
        {
            
        ?>
             <option><?php echo $row1['user_password'];?></option>
        <?php 
        
        }
          }
          else{
        ?>
             <option value="">no info</option>
         <?php 
          }?>
        </select>
    </body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border='1'
<tr>
<td>Menu ids</th>

</tr>
        <?php
        include ("test2.php");
        if(isset($_POST['excel']))
            {
          ?>
<tr>
    <td><p id="demo"></p></td>
</tr>
        </table>
   
        <?php
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=User_Detail.xlsx"); 
header("Pragma: no-cache"); 
header("Expires: 0");
          

        }
        

        ?>
   

    </body>
</html>

<?php
include 'dbconn.php';
?>
<html>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <body>
        <form action="demo1.php" method="post" onsubmit="return done(5);">
        <select name="ename" id="ename" class="ename" onchange="change(this.value);" >
            <option value="">--Select Email--</option>
            <?php 
         $mysqldb="select * from emp ";  
         $result = mysqli_query($conn,$mysqldb);
        while($row = mysqli_fetch_assoc($result)) 
        {
            $val=$row['name'];
        
        ?>
            
            <option value="<?php echo $val?>"><?php echo$row['email']?></option>
        <?php 
        
        }?>
        </select>
        <select  name="pass" id="pass" class="pass">
            <option value="">--Select pass--</option>
        </select>
            <input type="button"  onclick="return done(2);" value="done">
            <input type="submit"  value="excel" name="excel" id="excel">
        </form>
         
       
        
        
        
        <script>
 function change(a)
 {
   $("#demo").html("");  
   var pass=a;
   var dataString = 'pass='+ pass;
 
    $.ajax
    ({
        type: "POST",
        url: "get_pass.php",
        data: dataString,
        cache: false,
        success: function(data)
        {
            $(".pass").html(data);
        } 
     });
  }
  
        </script>
        <script>
        function done(a)
        {
           if(document.getElementById("ename").value=="")
           {
               alert("Please Select Email");
               return false;
           }
           if(document.getElementById("pass").value=="")
           {
               alert("Password Should not empty");
                return false;
           }
            var form=$('form')[0];
            var formData=new FormData(form);
            var ename=document.getElementById("ename").value;
            var pass=document.getElementById("pass").value;
             $.ajax({
		url: "demo.php", // Url to which the request is send
		type: "POST",             // Type of request to be send, called as method
		data:{a:a,ename:ename,pass:pass},
                 // Data sent to server, a set of key/value pairs (i.e. form fields and values)
		 
		success: function(data)   // A function to be called if request succeeds
		{
			  $("#demo").html(data);
						
		}
                   });
        }
        </script>
        
        <p id="demo"></p>
       
        
    </body>
    
</html>
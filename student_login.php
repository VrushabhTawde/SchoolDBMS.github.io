<!DOCTYPE html>
<html lang="en">
          <head>
          <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
                     <title> STUDENT Login Page</title>
                    <link rel="stylesheet" href="style.css">
          </head>
          <body>
                
          <div class="container">
          <center>
               
                 <h2>STUDENT LOGIN</h2><br>
               <form method="post" action="post">
                     
                  Email Address:<input  type="text" name="email" required placeholder="Write email"><br><br>
                  Password:<input  type="text" name="password" required placeholder="Write Password">
                  <br><br>
                  <input type="submit" name="submit">
                  <br>
             </form>
             <?php
               if(isset($_POST['submit'])){
                         
                           $connection = mysqli_connect("localhost","root","");
                           $db=mysqli_select_db($connection,"adminlogin");
                           $query = "select * from login where email='$_POST[email]'";
                           $query_run=mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                            if ($row['email']==$_post['email']){
                                      if($row['password']==$_post['password']){
                                                echo "login successfully!";
                                                //header("Location:admin_dashboard.php");
                                      }
                                      else {
                                        echo "wrong password";
                                      }
                            }
                            else
                            {
                                      echo "wrong  email";
                              }       
                    }         
               }
             ?>
          </center>
                    
            </div> 
          </body>
</html>
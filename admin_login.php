<html>
    <head>
        <title>HireMe/Regestration.com</title>
        
        <link href="style.css" rel="stylesheet" type ="text/css">
       
        
    </head>
    <body>
        
        
        <!---bar part--->
        
        <header>
            <div class="row">
                <div class="logo"><img src="image/logo.png">
                </div>
            
                 <ul class= "reg-nav">
                      <li ><a href="http://localhost/hireme/ADMIN_LOGIN.PHP"> ADMIN LOG IN </a></li>
                    <li ><a href="#"> /  </a></li>
                 <li ><a href="http://localhost/hireme/login.php"> LOG IN </a></li>
                      <li ><a href="#"> /  </a></li>
                      <li ><a href="http://localhost/hireme/signin.php"> SIGN IN </a></li>
                     </ul>
          
            
            </div>
        
        
        
        </header>
        
        
       <!---login and regestration part--->
      
    <div class="loginbox">
    <img src="image/avatar.png" class="avatar">
        <h1>ADMIN Login Here</h1>
        <form>
            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="hidden" name="type" value="1">
            <input type="submit" name="" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
        
    </div>
    
	
	
	
	<?php
            $loginuser="";
            $loginpass="";
            
            if(isset($_GET["name"]) && isset($_GET["pass"])){
                $loginuser=$_GET["name"];
                $loginpass=$_GET["pass"];
                
                echo $loginpass." ".$loginuser;
            }
                $username="root";
                $pass="";
                $serveraddr="localhost";
                $dbname="hireme";

                try{
                    $conn=new PDO("mysql:host=$serveraddr; dbname=$dbname", $username, $pass);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt="SELECT * FROM admin";
                    $pdostmt=$conn->prepare($stmt);
                    $pdostmt->execute();
                    $res=$pdostmt->fetchAll(PDO::FETCH_NUM);

                    $flag=false;
                    for($it=0; $it<count($res); $it++){
                        
                        if($loginuser==$res[$it][1] && $loginpass==$res[$it][2]){
                            $flag=true;
                            echo "<script>window.location.assign('hireme_admin.php');</script>";
                            
                        }
                    }
                    
                    if($flag==false && $loginuser!="" && $loginpass!=""){
                        echo "<script>window.alert('Invalid User Id or Password');</script>";
                    }

                } catch(PDOException $ex) {
                    echo "<script>window.alert('Database not connected!');</script>";
                }
    
            ?>

</body>

</html>

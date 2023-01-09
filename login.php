<?php include("home1.php");?>
  
<!doctype html>   
   <html>
    <head>
        <title>HireMe/Log In</title>
        
        <link href="style.css" rel="stylesheet" type ="text/css">
       
        
    </head>
    <body>
        
       <!---login and regestration part--->
        
    <div class="loginbox">
    <img src="image/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form>
            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="hidden" name="type" value="1">
            <input type="submit" name="" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="http://localhost/hireme/signin.php">Don't have an account?</a>
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
                    //Strings should always be written in double quotations.
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt="SELECT * FROM userinfo";
                    $pdostmt=$conn->prepare($stmt);
                    $pdostmt->execute();
                    $res=$pdostmt->fetchAll(PDO::FETCH_NUM);
                    

                    $flag=false;
                    for($it=0; $it<count($res); $it++){
                        ///echo "Username: ".$res[$it][1]." Password: ".$res[$it][2]."<br/>";
                        
                        if($loginuser==$res[$it][1] && $loginpass==$res[$it][2]){
                            $flag=true;
                           echo "<script>window.location.assign('home.php');</script>";
                            
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
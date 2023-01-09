<?php include("home1.php");?>
<!doctype html>
<html>
    <head>
        <title>HireMe/Regestration.com</title>

        <link href="style.css" rel="stylesheet" type ="text/css">


    </head>

<body>
<div class="signinbox">
            <img src="image/avatar1.png" class="avatar">
            <h1>Regester Here</h1>
            <form method="post" action="signin.php">
                <p>First name</p>
                <input type="text" name="name" placeholder="Enter First Name">
                <p>Last name</p>
                <input type="text" name="olname" placeholder="Enter Last Name">
                <p>Mobile Number</p>
                <input type="text" name="mobile" placeholder="Enter Mobile Number">
                <p>Email</p>
                <input type="email" name="mail" placeholder="Enter Email">
                <p>Address</p>
                <input type="text" name="address" placeholder="Enter Address">
                <p>Country</p>
                <input type="text" name="country" placeholder="Enter Country">
                <p>City/Town</p>
                <input type="text" name="city" placeholder="Enter Address">
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter Password">
                <p>National ID / Passport photo</p>
                <input type="file" name="image" placeholder="Enter National ID / Passport photo">
                
                <input type="submit" name="Create" value="Create Account">
                <input type="hidden" name="type" value='2'>

            </form>

        </div>

        <?php
//userLogin.php
        if (isset($_POST['Create'])) {
            if (!isset($_POST['name']) || !isset($_POST['pass']) || !isset($_POST['mobile']) || !isset($_POST['address']) || !isset($_POST['mail']) || !isset($_POST['image']) || !isset($_POST['country']) || !isset($_POST['city'])) {
                $error = "Fill up all the information correctly";
           
                echo "<script>console.log('I am the error');</script>";
            } else {
                echo "<script>console.log('I am the inner');</script>";
                $conn = mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($conn, "hireme");
                $user = $_POST['name'];
                $pass = $_POST['pass'];
                $mob = $_POST['mobile'];
                $add = $_POST['address'];
                $mail = $_POST['mail'];
                $nid = $_POST['image'];
                $country = $_POST['country'];
                $city = $_POST['city'];
           

                $query1 = "Insert into userinfo(email, name, password, mobile_number, city, national_id,address) values('$mail','$user','$pass','$mob','$city','$nid','$add')";
                $result1 = mysqli_query($conn, $query1);
                echo "insert";
                echo($query1);
                $result = mysqli_query($conn, $query);
                header("Location: login.php");
            }
        }
     
       ?>

</body>
</html>
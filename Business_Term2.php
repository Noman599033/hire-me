<?php
       
        
        $con = mysqli_connect('localhost','root','');
        
        
        
        if(!$con){
            echo 'not connected to server';
        }
        if(!mysqli_select_db($con,'hireme')){
            
            echo 'database not selected';
        }
          $carname = $_POST['name'];
          $carmodel = $_POST['model'];
          $email = $_POST['mail'];
         $license = $_POST['number'];
          $fitness = $_POST['image'];
          

          $sql = "INSERT INTO business_term1 (license_number, email, car_name, car_model, certificate_photo) VALUES ('$license','$email','$carname','$carmodel','$fitness')";

        if(!mysqli_query($con,$sql)){
            echo 'not inserted';
        }
        else{
            echo 'inserted';
        }
        
        header("refresh:10; url=business_term.php");
         

        ?>
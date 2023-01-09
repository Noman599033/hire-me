<?php include("home1.php");?>
 <!doctype html>
   <html>
    <head>
        <title>HireMe/Regestration.com</title>
        
        <link href="style2.css" rel="stylesheet" type ="text/css">
       
        
    </head>
    <body>
        
     
        
         <div class="bookingbox">
    <img src="image/avatar3.png" class="avatar3">
        <h1>Booking Here</h1>
        <form action="booking2.php" method="post">
            
            <p>Email</p>
            <input type="email" name="mail" placeholder="Enter Email">
            <p>Car Name</p>
            <input type="text" name="carN" placeholder="Enter Car Name">
            <p>Pickup Station</p>
            <input type="text" name="pick" placeholder="Enter Place">
            <p>Preferable Station</p>
            <input type="text" name="drop" placeholder="Enter place">
            <p> Preferable Date </p>
            <input type="date" name="cal" placeholder="">
            <p> How many Days? </p>
            <input type="number" name="days" placeholder="Enter Days">
            <p>License Photo</p>
            <input type="file" name="image" placeholder="Enter National ID / Passport photo">
            <input type="submit" name="Create" value="Create Account">
            
            
        </form>
        
    </div>

    </body>

</html>
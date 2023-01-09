<?php include("home1.php");?>
   <html>
    <head>
        <title>HireMe/Regestration.com</title>
        
        <link href="style1.css" rel="stylesheet" type ="text/css">
       
        
    </head>
    <body>

       <!---business term part--->
        
        
        
         <div class="BTbox">
    <img src="image/avatar2.png" class="avatar2">
        <h1>Regester Here</h1>
             
        <form action="Business_Term2.php" method="post">
            <p>Car Name</p>
            <input type="text" name="name" placeholder="Enter First Name">
            <p>Car Model</p>
            <input type="text" name="model" placeholder="Enter Last Name">
            <p>Email</p>
            <input type="email" name="mail" placeholder="Enter Email">
            <p>License Number</p>
            <input type="text" name="number" placeholder="Enter license Number">
            <p>Fitness Certificate</p>
            <input type="file" name="image" placeholder="">
           
            <input type="submit" name="" value="Submit">
            
        </form>
        
    </div>

</body>

</html>

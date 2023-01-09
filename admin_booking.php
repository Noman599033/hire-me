<?php


if(!isset($_POST['search']))
{
    
     $query = "SELECT * FROM `booking2`";
    $search_result = filterTable($query);
}
 else {
   $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT*FROM `booking2` WHERE CONCAT (email, car_name ) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $con = mysqli_connect("localhost", "root", "", "hireme");
    $filter_Result = mysqli_query($con, $query)  or die( mysqli_error($db));
    return $filter_Result;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>HireMe.com</title>
       
        
        <link href="style.css" rel="stylesheet" type ="text/css">
        
       
        
    </head>
    <body>
        
            <div class="row">
                <div class="logo"><img src="image/logo.png">
                </div>
            
                <ul class= "reg-nav">
                 
                      <li ><a href="http://localhost/hireme/ADMIN_LOGIN.PHP"> LOG OUT </a></li>
                     </ul>
                
            <ul class= "main-nav">
                <li ><a href="http://localhost/hireme/hireme_admin.php"> HOME </a></li> 
                <li><a href="http://localhost/hireme/admin_booking.php"> BOOKING SEARCH</a></li> 
                <li><a href="http://localhost/hireme/admin_pr_update.php"> PRICING CAR UPDATE </a></li>
 
                
                </ul>
                
            
            </div>
            
           
         <form action="admin_booking.php" method="post">
           Booking Search: <input type="text" name="valueToSearch" placeholder="Search....."><br><br>
            <input type="submit" name="search" value="Search"><br><br> 
            </form>

            

         <?php   
 
        while($row = mysqli_fetch_array($query)){
        $id = $row['id'];
           $email=$row['email'];
       $carname=$row['car_name'];
       $pickup=$row['pickup_station'];
        $dropd=$row['preferable_station'];
        $date=$row['preferable_date'];
        $day= $row['how_many_days'];
           $license= $row['license_photo'];
           
           $output .='<div>'.$id.'  '.$email.'   '.$carname.'   '.$pickup.'   '.$dropd.' '.$date.'   '.$day.'   '.$license.'</div>';
           
       } 
     ?> 
           </form>

    </body>

</html>

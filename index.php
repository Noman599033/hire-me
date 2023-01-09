<!doctype html>
   <html>
    <head>
        <title>HireMe.com</title>
             
        <link href="style.css" rel="stylesheet" type ="text/css">
              
    </head>
    <body>
        <header>
            <div class="row">
                <div class="logo"><img src="image/logo.png">
                </div>
            
                <ul class= "reg-nav">
                     <li ><a href="http://localhost/hireme/ADMIN_LOGIN.PHP"> ADMIN LOG IN / </a></li>
                     <li ><a href="http://localhost/hireme/login.php"> LOG IN / </a></li>
                     <li ><a href="http://localhost/hireme/signin.php"> SIGN IN </a></li>
                     </ul>
                
            <ul class= "main-nav">
                <li><a href="http://localhost/hireme/home.php"> HOME </a></li> 
                <li><a href="http://localhost/hireme/pricing.php"> PRICING </a></li> 
                <li><a href="http://localhost/hireme/packing.php"> PACKAGE </a></li>
                <li><a href="http://localhost/hireme/tourism.php"> TOURISM </a></li> 
                <li><a href="http://localhost/hireme/Business_Term.php"> BUSINESS TERM </a></li> 
                <li><a href="#"> REVIEW </a></li> 
                <li><a href="http://localhost/hireme/contact us.php"> CONTACT US </a></li> 
                <li><a href="http://localhost/hireme/about us.php"> ABOUT US </a></li> 
                
                </ul>          
            
            </div>
                
        </header>
        
            <img class="mySlides" src="image/1.jpg" height="750px" width="1900px">
            <img class="mySlides" src="image/2.jpg" height="750px" width="1900px">
            <img class="mySlides" src="image/3.jpg" height="750px" width="1900px">
            <img class="mySlides" src="image/4.jpg" height="750px" width="1900px">
            <img class="mySlides" src="image/5.jpg" height="750px" width="1900px">
           
            
  <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  </div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    </body>

</html>

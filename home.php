<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical NEWSCORPUS</title>    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
  </head>
  <body>
    <div class="popup-screen">
      <div class="popup-box">
        <h3>Medical NewsCorpus</h3>
        <p style="text-align:center;">First Go to Register then Enjoy the Corpra.</p>
        <a href="loginuser.php" class="btn" style="background-color:greenyellow;">Registeration</a>
      </div>
    </div>
    <div class="contianer-fluid bg-secondary">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
                <div class="container-fluid"> 
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item">
                                <a class="nav-link text-white" href="insert.php">Insert Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="updatedata.php">Update Data</a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
<div style="width:100%;">
<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg" style="width:100%;height:400px;" >
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpg" style="width:100%;height:400px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpg" style="width:100%;height:400px;">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
<div style="width:100%;background-color:grey;height: 60px;color:white;padding-top:20px;">
<div>
<script> 
  $(window).on("load", function() {
      $('.ring1').fadeOut();
      $('.container').show();
  });
</script>
<script type="text/javascript">
    const popupScreen = document.querySelector(".popup-screen");
    const popupBox = document.querySelector(".popup-box");
    const closeBtn = document.querySelector(".btn");

    window.addEventListener("load", () => {
      setTimeout(() => {
        popupScreen.classList.add("active");
      }, 2000); //Popup the screen in 02 seconds after the page is loaded.
    });
    closeBtn.addEventListener("click", () => {
      popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
      //Create a cookie for a day (to expire within a day) on click the close button.
      document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
    });

    //Use the created cookie to hide or show the popup screen.
    const WebsiteCookie = document.cookie.indexOf("WebsiteName=");

    if(WebsiteCookie != -1){
      popupScreen.style.display = "none"; //Hide the popup screen if the cookie is not expired.
    }
    else{
      popupScreen.style.display = "flex"; //Show the popup screen if the cookie is expired.
    }
    </script>
      <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
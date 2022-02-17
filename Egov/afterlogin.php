<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  height: 50px;
  width: 720px;
  position: relative;
  margin: auto;
  border-radius: 10px;
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
.sep
{
	color: #f2f2f2;
  font-size: 15px;
  //position: absolute;
  bottom: 28px;
  left: 16px;
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
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
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
	<title>Expedition</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script type="text/javascript">
		
<script>
  (function() {
    var cx = '009240432252087345302:rhqeg_clwwq';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
<gcse:search></gcse:search>
	</script>
</head>
<body >

	
		  <div class="nav">
                  <ul>
                  	<li><input type="text" name="" onclick="function()"><i class="fas fa-search"></i></li>

                        <li><input type="button" value="Home" class="button"></li>
                        <li><input type="button" value="Places" class="button"></li>
                        <li><a href="hotels.html"><input type="button" value="Hotels" class="button"></a></li>
                        <li><a href="maps.html"><input type="button" name="button" class="button" value="Explore"></a></li>
                        <li><a href="login.html"><i class="fas fa-sign-out-alt"></i></a>
                  </ul>
              </div><br><br><br><br><br>
              <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg" style="width:100%">
  <div class="text">Incredible India</div>
  <div clss="sep" >
   <a href="https://www.incredibleindia.org/content/incredibleindia/en/destinations.html">
    <input style="background: white" type="button" class="button" value="Explore Now" >
  </a>
</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpg" style="width:100%">
  <div class="text">Japan Tourism</div>
  <div clss="sep"> <a href="https://www.japan.travel/en/"><input style="background: white" type="button" class="button" value="Explore Now"></a></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpg" style="width:100%">
  <div class="text">Newyork Tourist</div>
  <div clss="sep"><a href="https://www.nyc.com/visitor_guide/"> <input style="background: white" type="button" class="button" value="Explore Now"></a></div>
</div>

</div>
<br>

<div style="text-align:center">
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
              <div class="social-media">
                  <ul>
                        <li><a href="https://www.facebook.com/pavanpk.20"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/pavan__karthik/"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/PAVANKA40606119"><i class="fab fa-twitter"></i></a></li>
                  </ul>
            </div>
           <div class="side-strip">
                  <span>ADVENTURE FILL SOULS</span>
            </div>
            

      
</body>
</html>
<html>
<head>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<title>cctv1</title>
<style>
	
body{
	overflow-x: hidden;
}

/*DEFAULT*/
a{
text-decoration:none;
}
.title{
font-size:1.5em;
font-family: 'Archivo Black', sans-serif;
}
.sub-title{
display:block;
}
li{
list-style:none;
}
input,button{
outline:none;
}
.btn1{
padding:10px 20px;
border-radius:20px;
text-align:center;
color:#fff;
background:#000;
width:90%;
border:0;
}
.btn2{
padding:10px 20px;
text-align:center;
color:#fff;
background:#f79500;
width:100%;
border:0;
}
.btn3{
padding:10px 20px;
text-align:center;
color:#fff;
background:#384aeb;
width:100%;
border:0;
}
.btn4{
padding:10px 20px;
text-align:center;
color:#000;
border-radius:20px;
background:#fff;
width:150px;
border:0;
margin:0 20px;
box-shadow:0px 6px 16px -6px rgba(1,1,1,0.5);
}
label{
color:gray;
}
.checked{
color:#f79500;
}

/*ANIMATION*/
.animate {
-webkit-animation: animatezoom 0.6s;
animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
from {-webkit-transform: scale(0)} 
to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
from {transform: scale(0)} 
to {transform: scale(1)}
}
.inline-photo {
opacity: 0;
transform: translateY(4em) rotateZ(-0deg);
transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
will-change: transform, opacity;
}
.inline-photo.is-visible {
opacity: 1;
transform: rotateZ(-0deg);
}
.inline-photo2 {
opacity: 0;
transform: translateX(-15em) rotateZ(-0deg);
transition: transform 4s .25s cubic-bezier(0,1,.3,1),opacity .3s .25s ease-out;
will-change: transform, opacity;
}
.inline-photo2.is-visible2 {
opacity: 1;
transform: rotateZ(-0deg);
}


/*PRODUCT CONTAINER*/
.product_container{
width:90%;
margin:auto;
position:relative;
padding:5vh 0;
margin:5vh auto;
}

.slide_image_color{
border:2px solid #384aeb;
}

.sidebar{
position:absolute;
left:0;
top:0;
width:10%;
padding:10px;
}

.sidebar img{
display:block;
margin:2px 0;
}

.Product_tumbnail{
width:50%;
margin:auto;
}

.product_tumbnail img{
width:90%;
height:90%;
}

.details{
width:35%;
position:absolute;
top:0;
right:0;
float:right;
padding:5vh 0;
}

.price{
color:#384aeb;
font-size:1.5em;
}

.sub-details li{
padding:10px 0;
}

.sub-details li i{
color:#384aeb;
margin:0 5px;
}

table{
width:100%;
}

table td{
width:30%;
padding:10px;
}

#pincode{
border:0;
border-bottom:1px solid gray;
padding:0 10px;
}

.star-ratings-css {
unicode-bidi: bidi-override;
color: #fff;
font-size: 1.6rem;
display: inline-block;
margin: 0 auto;
position: relative;
padding: 0;
margin:0 10%;
}
.star-ratings-css-top {
color: #3b5998;
padding: 0;
position: absolute;
z-index: 1;
display: block;
top: 0;
left: 0;
overflow: hidden;
animation: rating 2s forwards;
}
.star-ratings-css-bottom {
padding: 0;
display: block;
z-index: 0;
}
@keyframes rating {
from {
width: 0;
}
to {
width: 70%;
}
}
@font-face {
font-family: 'Open Sans';
font-style: normal;
font-weight: 400;
src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0e.ttf) format('truetype');
}
@font-face {
font-family: 'Open Sans';
font-style: normal;
font-weight: 600;
src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhs.ttf) format('truetype');
}
@font-face {
font-family: 'Open Sans';
font-style: normal;
font-weight: 700;
src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN7rgOUuhs.ttf) format('truetype');
}

em {
font-style: italic;
}
@media (max-width:1180px){
.product_container{
min-width:95%;
  width:100%;
}
.sidebar{
position:static;
width:100%;
margin:auto;
display:block;
padding:10px;
}
.sidebar img{
display:inline-block;
margin:0px 2px;
max-width:33%;
max-height:100px;
}
.Product_tumbnail{
width:100%;
margin:auto;
}

.Product_tumbnail img{
max-width:100%;
margin:auto;
}

.details{
width:100%;
position:static;
float:none;
padding:5vh 0;
}
}



.reviews{
width:100%;
background:#f2f2f2;
padding:5vh 0;
position:relative;
}

.review_sidebar{
width:90%;
margin:auto;
}

.review_sidebar button{
display:inline-block;
}

.review_container{
width:90%;
margin:auto;
padding:5vh 0;
}

.active_button{
background:#384aeb;
color:#fff;
transition:0.5s;
}
.specification_table{
border-collapse:collapse;
}
.specification_table td{
width:50%;
padding:10px 25px;
color:gray;
border-bottom:1px solid rgba(1,1,1,0.1);
}

.user_star_ratings{
width:50%;
}

.overall_rating,.rating_blocks{
width:40%;
display:inline-block;
text-align:center;
}
.overall_rating{
background:#fff;
padding:30px 20px;
width:30%;
position:relative;
top:-40px;
}
.rating_blocks ul{
position:relative;
left:-20px;
}

.rating_blocks ul li{
padding:5px 0;
}

.reviews_recorded ul li img{
border-radius:50%;
}

.reviews_recorded ul li b{
display:block;
}

.enter_user_star_ratings{
width:40%;
position:absolute;
top:20vh;
right:3vh;
background:#fff;
padding:30px;
}

.enter_user_star_ratings textarea{
width:90%;
padding:5%;
height:150px;
display:block;
margin:20px 0; 
resize:none;
outline:none;
} 

@media (max-width:1000px){
.specification_table td{
width:95%;
padding:10px 25px;
color:gray;
border-bottom:1px solid rgba(1,1,1,0.1);
}

.user_star_ratings{
width:95%;
margin:15vh 0;
}
.review_sidebar button{
margin:0 5px;
width:100px;
font-size:11px;
display:inline-block;
}
.overall_rating,.rating_blocks{
width:95%;
display:block;
}
.enter_user_star_ratings{
width:90%;
position:static;
background:#fff;
padding:20px;
}
}

.rating-box {
display: inline-block;
}
.rating-box .rating-container {
direction: rtl !important;
}
.rating-box .rating-container label {
display: inline-block;
margin: 15px 0;
color: #d4d4d4;
cursor: pointer;
font-size: 30px;
transition: color 0.2s;
}
.rating-box .rating-container input {
display: none;
}
.rating-box .rating-container label:hover, .rating-box .rating-container label:hover ~ label, .rating-box .rating-container input:checked ~ label {
color: gold;
}



/* header */
.navigation {
   height: 80px;
   background: #262626;
   width: 4000px;
   position:relative;
   top: -20px;
   left: -155px;
}
 .nav-container {
   width: 1600px;
   position: relative;
   left: -800px;

}
.dropbtn {
  background-color: #262626;
  color: white;
  padding: 21px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  padding-right: 0px;
  display: inline-block;
  left: 1000px;
  top: -20px;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #FC8F32;}

 nav {
   float: right;
}
 nav ul {
   list-style: none;
   margin: 0;
   padding: 0;
}
 nav ul li {
   float: left;
   position: relative;
}
 nav ul li a, nav ul li a:visited {
   display: block;
   line-height: 70px;
   background: #262626;
   color: #fff;
   text-decoration: none;
}
 nav ul li a:hover, nav ul li a:visited:hover {
   background: #2581dc;
   color: #fff;
}
 nav ul li a:not(:only-child):after, nav ul li a:visited:not(:only-child):after {
   padding-left: 4px;
   content: ' ▾';
}
 nav ul li ul li {
   min-width: 190px;
}
 nav ul li ul li a {

   line-height: 20px;
}
 .nav-dropdown {
   position: relative;
   display: none;
   z-index: 1;
   box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}
/* Mobile navigation */
 .nav-mobile {
   display: none;
   position: absolute;
   top: 0;
   right: 0;
   background: #262626;
   height: 70px;
   width: 70px;
}
 @media only screen and (max-width: 798px) {
   .nav-mobile {
     display: block;
  }
   nav {
     width: 100%;
     padding: 70px 0 15px;
  }
   nav ul {
     display: none;
  }
   nav ul li {
     float: none;
  }
   nav ul li a {
     line-height: 20px;
  }
   nav ul li ul li a {
  }
   .nav-dropdown {
     position: static;
  }
}
 @media screen and (min-width: 799px) {
   .nav-list {
     display: block !important;
  }
}
 #nav-toggle {
   position: absolute;
   left: 18px;
   top: 22px;
   cursor: pointer;
}
 #nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
   cursor: pointer;
   border-radius: 1px;
   height: 5px;
   width: 35px;
   background: #fff;
   position: absolute;
   display: block;
   content: '';
   transition: all 300ms ease-in-out;
}
 #nav-toggle span:before {
   top: -10px;
}
 #nav-toggle span:after {
   bottom: -10px;
}
 #nav-toggle.active span {
   background-color: transparent;
}
 #nav-toggle.active span:before, #nav-toggle.active span:after {
   top: 0;
}
 #nav-toggle.active span:before {
   transform: rotate(45deg);
}
 #nav-toggle.active span:after {
   transform: rotate(-45deg);
}
 article {
   max-width: 1000px;
}
.image {
	position: relative;
	left: 100px;
}
.desc {
	font-size: 20px;
}
 
/* end of header */
</style>
</head>
<body>
	<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Archivo+Narrow&display=swap" rel="stylesheet"> 

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--BANNER-->
<div class="container">
  <div class="navbar">
    
<section class="navigation">
  <div class="nav-container">
  <br><br>
  <img class="subhiksha" src="title_mew.jpeg"> 
<div class="dropdown">
    <a href="index.php" class="dropbtn">Home</a>
</div>
<div class="dropdown">
  <button class="dropbtn">CCTV <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="#">CP Plus</a>
      <a href="#">Godrej</a>
      <a href="#">Panasonic</a>
      <a href="#">Samsung</a>
      <a href="#">Sony</a>
    </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Fire Alarm <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="#">Edwards</a>
      <a href="#">Cooper</a>
      <a href="#">Bosch</a>
      <a href="#">Zicom</a>
      <a href="#">Spectra</a>
    </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Inverters & Batteries <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="#">Exide</a>
      <a href="#">V-Gaurd</a>
      <a href="#">Luminous</a>
      <a href="#">Microtek</a>
    </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Cash Counting Machine <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="#">Godrej</a>
      <a href="#">Maxsell</a>
      <a href="#">Phoenix</a>
      <a href="#">Kores</a>
      <a href="#">Lada</a>
      <a href="#">Infres</a>
    </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Air conditioners <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="#">Voltas</a>
      <a href="#">LG</a>
      <a href="#">Panasonic</a>
      <a href="#">Blue Star</a>
      <a href="#">Whirlpool</a>
    </div>
</div>
<div class="dropdown">
  <button class="dropbtn">TV <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="#">OnePlus</a>
      <a href="#">LG</a>
      <a href="#">Sony</a>
      <a href="#">Samsung</a>
    </div>
</div>


<div class='container100'>
    <input type="text" id="searchInput" placeholder="Search..">
        <div id='submitsearch' style="">
            <span>Search</span>
        </div>
    </div>
</div>
</div>
</section>
<script type="text/javascript">
  (function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
</script>
  </div>
</div>

<!--CONTAINER-->
<div class="product_container">
<div id="Slide1" class="image">
<img src="">
</div>

<!--<div id="Slide2" class="Slider_Container SLider_border Product_tumbnail animate" style="display:none">
<img src="https://source.unsplash.com/450x450/?handwatch">
</div>

<div id="Slide3" class="Slider_Container SLider_border Product_tumbnail animate" style="display:none">
<img src="https://source.unsplash.com/450x450/?wallclock">
</div>-->
<div class="details">
<h1 class="title">Godrej STE-FB20IR3 6P-1080P 2MP Outdoor Bullet 3.6mm Lens & 20Mtr IR Night Vision</h1>
<span class="price">₹1,050.00</span> <strike class="strike">$160</strike>
<div class="star-ratings-css">
<div class="star-ratings-css-top"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
<div class="star-ratings-css-bottom"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
</div>
<h1>Key features</h1>
<div class="desc">
<p><b>1080P, 2/7" CMOS Sensor</b></p>
<p><b>AHD / TVI / CVI / CVBS Output</b></p>
<p><b>3.6mm Fixed Lens</b></p>
<p><b>IP66</b></p>
<p><b>Housing Material: Plastic</b></p>
</div>

</div>
</div>

<div class="reviews inline-photo show-on-scroll">
<div class="review_sidebar review_bar_block review_gray review_card"><center>
<button class="review-bar-item review-button tablink btn4 active_button" onclick="opentab_type(event, 'Description')">Description</button>
<button class="review-bar-item review-button tablink btn4" onclick="opentab_type(event, 'Specification')">Specification</button>
<button class="review-bar-item review-button tablink btn4" onclick="opentab_type(event, 'User_reviews')">Reviews</button>
</center></div>

<div>

<div id="Description" class="review_container tab_type">
<h2>Description</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>

<div id="Specification" class="review_container tab_type" style="display:none">
<h2>Specification</h2>
<table class="specification_table">
<tr>
<td>Image Resolution</td>
<td>1920(H) x 1080(V)</td>
</tr>
<tr>
<td>Focus Type</td>
<td>Autofocus</td>
</tr>
<tr>
<td>Colour</td>
<td>White</td>
</tr>
<tr>
<td>Lens Size</td>
<td>3.6mm</td>
</tr>
<tr>
<td>IR Distance</td>
<td>20m</td>
</tr>
<tr>
<td>Recording Formats</td>
<td>H264</td>
</tr>
</table>
</div>

<div id="User_reviews" class="review_container tab_type" style="display:none">
<div class="user_star_ratings">
<section class="overall_rating">
<span class="sub-title">OVERALL RATING</span>
<span class="title">4.0</span>
<p>(123 Reviews)</p>
</section>
<section class="rating_blocks">
<span class="sub-title">BASED ON 123 REVIEWS</span>  
<ul>
<li>
5 Star
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
23
</li>
<li>
4 Star
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
40
</li>
<li>
3 Star
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
35
</li>
<li>
2 Star
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
10
</li>
<li>
1 Star
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
15
</li>
</ul>  
</section>
<section class="reviews_recorded">
<ul>
<li>
<img src="https://source.unsplash.com/50x50/?person" alt="User"> <b>Albert</b>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</li>
<li>
<img src="https://source.unsplash.com/50x50/?person" alt="User"> <b>Albert</b>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span> 
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</li>
</ul>
<center><button class="btn1" style="width:150px;">Load More...</button></center>
</section>
</div>
<div class="enter_user_star_ratings">
<h1 class="title">ADD YOUR REVIEW</h1>
<div class="rating-box">
<div class="rating-container">
<input type="radio" name="rating" value="5" id="star-5"> <label for="star-5">&#9733;</label>

<input type="radio" name="rating" value="4" id="star-4"> <label for="star-4">&#9733;</label>

<input type="radio" name="rating" value="3" id="star-3"> <label for="star-3">&#9733;</label>

<input type="radio" name="rating" value="2" id="star-2"> <label for="star-2">&#9733;</label>

<input type="radio" name="rating" value="1" id="star-1"> <label for="star-1">&#9733;</label>
</div>
</div>
<textarea placeholder="Write a review" name="userreview" required></textarea>
<button class="btn2">SUBMIT</button>
</div>
</div>

</div>
</div>
<script type="text/javascript">
	function changeSlide(evt, Product_tumbnailName) {
var i, x, slide_options;
x = document.getElementsByClassName("Product_tumbnail");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
slide_options = document.getElementsByClassName("slide_option");
for (i = 0; i < x.length; i++) {
slide_options[i].className = slide_options[i].className.replace(" slide_image_color", "");
}
document.getElementById(Product_tumbnailName).style.display = "block";
evt.currentTarget.className += " slide_image_color";
}


function opentab_type(evt, tab_typeName) {
var i, x, tablinks;
x = document.getElementsByClassName("tab_type");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablink");
for (i = 0; i < x.length; i++) {
tablinks[i].className = tablinks[i].className.replace("active_button", ""); 
}
document.getElementById(tab_typeName).style.display = "block";
evt.currentTarget.className += " active_button";
}





//SCROLL ANIMATE
var scroll = window.requestAnimationFrame ||
function(callback){ window.setTimeout(callback, 1000/60)};
var elementsToShow = document.querySelectorAll('.show-on-scroll'); 
function loop() {

Array.prototype.forEach.call(elementsToShow, function(element){
if (isElementInViewport(element)) {
element.classList.add('is-visible');
} else {
element.classList.remove('is-visible');
}
});

scroll(loop);
}
loop();

function isElementInViewport(el) {
// special bonus for those using jQuery
if (typeof jQuery === "function" && el instanceof jQuery) {
el = el[0];
}
var rect = el.getBoundingClientRect();
return (
(rect.top <= 0
&& rect.bottom >= 0)
||
(rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
rect.top <= (window.innerHeight || document.documentElement.clientHeight))
||
(rect.top >= 0 &&
rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
);
}




//SCROLL ANIMATE
var scroll2 = window.requestAnimationFrame ||
function(callback2){ window.setTimeout(callback2, 1000/60)};
var elementsToShow2 = document.querySelectorAll('.show-on-scroll2'); 
function loop2() {

Array.prototype.forEach.call(elementsToShow2, function(element){
if (isElementInViewport(element)) {
element.classList.add('is-visible2');
} else {
element.classList.remove('is-visible2');
}
});

scroll2(loop2);
}
loop2();

function isElementInViewport(el) {
// special bonus for those using jQuery
if (typeof jQuery === "function" && el instanceof jQuery) {
el = el[0];
}
var rect2 = el.getBoundingClientRect();
return (
(rect2.top <= 0
&& rect2.bottom >= 0)
||
(rect2.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
rect2.top <= (window.innerHeight || document.documentElement.clientHeight))
||
(rect2.top >= 0 &&
rect2.bottom <= (window.innerHeight || document.documentElement.clientHeight))
);
}
</script>
</body>
</html>
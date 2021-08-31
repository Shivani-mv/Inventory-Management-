<html>
<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
{% load static %}
<style>


body {
	overflow-x:hidden;
}

#about1 .about1-container .background {
  min-height: 300px;
  margin-bottom: 10px;
}
#about1 {
  background: #fff;
  padding: 80px 0;
}

#about1 .about1-container .background {
  min-height: 300px;
  position: relative;
  background: url(../img/about-img.png) center top no-repeat;
  margin-bottom: 10px;
  margin-top: 70px;
  height: 150px;
  left: 50px;
}

#about1 .about1-container .content {
  background: #fff;
}

#about1 .about1-container .title {
  color: #333;
  font-weight: 700;
  font-size: 32px;
}

@media (max-width: 768px) {
  #about1 .about1-container .title {
    padding-top: 15px;
  }
}

#about1 .about1-container p {
  line-height: 26px;
}

#about1 .about1-container p:last-child {
  margin-bottom: 0;
}

#about1 .about1-container .icon-box {
  background: #fff;
  background-size: cover;
  padding: 0 0 30px 0;
}

#about1 .about1-container .icon-box .icon {
  float: left;
  background: #fff;
  padding: 16px;
  border-radius: 50%;
  border: 2px solid #2d61c9;
}

#about1 .about1-container .icon-box .icon i {
  color: #2d61c9;
  font-size: 24px;
}

#about1 .about1-container .icon-box .title {
  margin-left: 80px;
  font-weight: 500;
  margin-bottom: 5px;
  font-size: 18px;
  text-transform: uppercase;
}

#about1 .about1-container .icon-box .title a {
  color: #111;
}

#about1 .about1-container .icon-box .description {
  margin-left: 80px;
  line-height: 24px;
  font-size: 14px;
}

/* Facts Section
--------------------------------*/
#facts1 {
  background: #f7f7f7;
  padding: 80px 0 60px 0;
}

#facts1 .counters span {
  font-size: 48px;
  display: block;
  color: #2d61c9;
}

#facts1 .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Poppins", sans-serif;
  font-size: 14px;
}






/* header */
.navigation {
	 height: 220px;
	 background: #262626;
	 width: 100%;

}
 .brand {
	 position: absolute;
	 padding-left: 20px;
	 float: left;
	 line-height: 70px;
	 text-transform: uppercase;
	 font-size: 1.4em;
}
 .brand a, .brand a:visited {
	 color: #fff;
	 text-decoration: none;
}
 .nav-container {
	 width: 100%;
	 position: relative;
	 background-size: cover;
   	top: 75px;
   	left:100px;


}
 
.dropbtn {
  background-color: #262626;
  color: white;
  padding: 21px;
  font-size: 16px;
  border: none;
  padding-bottom: 10px;
  padding-top: 10px;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
 

}

.dropdown {
  position: relative;
  display: inline-block;
   
  
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

.dropdown:hover .dropbtn {background-color: rgba(255,80,0,1);cursor: pointer;}


 article {
	 max-width: 100%;
	 margin: 0 auto;
	 padding: 10px;
}


/* end of header */

.hero1 {
  width: 100%;
  height: 100vh;
  background-size: cover;
  position: relative;
  margin: 0px;
  top: -130px;
}
.hero2 {
  width: 100%;
  height: 20vh;
  background-size: cover;
  position: relative;
}


input:focus {
    outline-offset: -2px;
}

/* search bar */
.container100 {
    position:relative;
    left: 485px;
   	bottom: 35px;
  	width:1900px;  
  

}
#submitsearch{
  border: 1px solid rgb(138, 134, 134);
  margin-left: -82px;
  padding: 5px;
  border-radius: 19px;
  cursor: pointer;
  padding-left: 10px;
  padding-right: 8px; 
  padding-top: 4px;
  display: none;
  box-shadow: 0 0 1px white;     
  margin-right:110px;
}

#searchInput {
      width: 18%;

      border: 1px solid #000;
      border-radius: 30px;
      font-size: 16px;
      background-color: white;
      background-image:url('https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/search-24.png');

      background-position: 10px 7px;
      background-repeat: no-repeat;
      padding: 8px 20px 8px 40px;
      -webkit-transition: width 0.8s ease-in-out;
      transition: width 0.8s ease-in-out;
      outline: none;
      opacity: 0.9;
} 
/* end of search bar */

/* heading */
.subhiksha {
	width:300px;
	height: 90px;
	bottom: 0px;
	position: relative;
	right: -500px;
}
/* heading */

/* slide show */
@import url("https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap");

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Lexend", sans-serif;
  background-color: #362a2b;
  color: #e5ebf3;
}

.slider {
  position: relative;
  width: 100vw;
  height: 83vh;
  overflow: hidden;
  top: -72px;
}

.slide {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: opacity 0.4s ease-in-out;
}

.slide.current {
  opacity: 1;
}

.slide .content {
  position: absolute;
  bottom: -300px;
  left: 0;
  width: 100%;
  opacity: 0;
  background-color: rgba(229, 235, 243, 0.8);
  color: #495b73;
  padding: 1rem;
  line-height: 1.3;
}

.slide .content h1 {
  margin-bottom: 0.625rem;
  color: #362a2b;
  font-size: 1.5rem;
}

.slide.current .content {
  opacity: 1;
  transform: translateY(-300px);
  transition: all 0.7s ease-in-out;
}

.slide:first-child {
  background: url("{% static "img/ss3.png" %}") no-repeat;
  background-size: 1600px 450px;
   

}

.slide:nth-child(2) {
  background: url("{% static "img/ss1.png" %}"),no-repeat ;
  background-size: 1300px 500px;
}

.slide:nth-child(3) {
  background: url("{% static "img/ss2.png" %}") no-repeat;
  background-size: 1400px 450px;
}

.slide:nth-child(4) {
  background: url("{% static "img/ss4.png" %}") no-repeat;
  background-size: 1530px 450px;
}

.slide:nth-child(5) {
  background: url("{% static "img/ss5.png" %}") no-repeat;
  background-size: 1550px 450px;
}

.slide:nth-child(6) {
  background: url("{% static "img/ss6.png" %}") no-repeat;
  background-size: 1300px 450px;
}

.buttons button#prev {
  position: absolute;
  top: 70%;
  left: 1rem;
}

.buttons button#next {
  position: absolute;
  top: 70%;
  right: 1rem;
}

.buttons button {
  border: 2px solid #e5ebf3;
  background-color: transparent;
  color: #e5ebf3;
  cursor: pointer;
  padding: 13px 15px;
  border-radius: 50%;
  outline: none;
}

.buttons button:hover {
  background-color: #e5ebf3;
  color: #362a2b;
}

@media (min-width: 640px) and (min-height: 640px) {
  .slide .content {
    bottom: 70px;
    left: -600px;
    width: 600px;
    padding: 2rem;
    line-height: 1.6;
  }

  .slide .content h1 {
    font-size: 2rem;
  }

  .slide.current .content {
    transform: translateX(600px);
  }
}
/* end of slide show */


        
/*services*/
    body {
	 font-family: 'Montserrat', sans-serif;
	 background: #262626;
	 color: #333;
}
 .container {
	 margin: 0 auto;
	 width: 1200px;
}
 section.testimonial-section {
	 text-align: center;
}
 section.testimonial-section p.desc {
	 width: 50%;
	 margin: 0 auto;
}
 .card-container {
	 display: flex;
	 flex-wrap: wrap;
	 justify-content: center;
	 width: 100%;
	 margin-top: 50px;
}
 .card {
	 width: 350px;
	 height: 400px;
	 background: #fff;
	 padding: 30px;

	 border-radius: 5px;
	 margin: 20px 10px;
	 box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.10);
	 -webkit-transition: all 200ms ease-in;
	 -webkit-transform: scale(1);
	 -ms-transition: all 200ms ease-in;
	 -ms-transform: scale(1);
	 -moz-transition: all 200ms ease-in;
	 -moz-transform: scale(1);
	 transition: all 200ms ease-in;
	 transform: scale(1);
}




 .card:hover {
	 background:linear-gradient(295deg, rgba(2,0,36,1) 10%, rgba(113,29,29,1) 40%, rgba(255,80,0,1) 100%);
	 color: #fff;
	 transform: scale(1.1);
	 box-shadow: 0px 3px 15px #000 50;
	 -webkit-transition: all 200ms ease-in;
	 -webkit-transform: scale(1.1);
	 -ms-transition: all 200ms ease-in;
	 -ms-transform: scale(1.1);
	 -moz-transition: all 200ms ease-in;
	 -moz-transform: scale(1.1);
	 transition: all 200ms ease-in;
}
 .card:hover .card__heading__img {
	 bottom: 5px;
	 transition: all 0.3s;
}
 .card:hover .card__heading__text p {
	 color: #fff;
}
 .card:hover .card__body:before, .card:hover .card__body:after {
	 opacity: 0.3;
}
 .card__heading {
	 position: relative;
}
 .card__heading__img {
	 height: 90px;
	 width: 80px;
	 position: absolute;
	 left: 0;
	 object-fit: cover;
	 border-radius: 8px;
	 bottom: -50px;
}
 .card__heading__text {
	 text-align: left;
	 margin-left: 100px;
}
 .card__heading__text h3, .card__heading__text p {
	 margin: 0;
	 padding: 0;
}
 .card__heading__text p {
	 color: #666;
	 font-size: 14px;
}
 .card__body {
	 position: relative;
	 margin-top: 50px;
}
 .card__body:before, .card__body:after {
	 content: "";
	 display: block;
	 position: absolute;
	 font-size: 40px;
	 color: #f7f7f7;
	 z-index: 1;
}
 .card__body:before {
	 font-family: "Font Awesome 5 Free";
	 font-weight: 900;
	 content: "\f10d";
	 top: 0;
}
 .card__body:after {
	 font-family: "Font Awesome 5 Free";
	 font-weight: 900;
	 content: "\f10e";
	 bottom: 0;
	 right: 0;
}
 .card__body p {
	 position: relative;
	 z-index: 2;
	 margin: 0;
	 text-align: left;
	 line-height: 2;
}
 
/*services*/
 


@import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);



input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: -5px;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
    color: rgba(255,80,0,1);

}

.styled-input {
    float: left;
    width: 293px;
    margin: 1rem 0;
    position: relative;
    border-radius: 4px;
}

@media only screen and (max-width: 768px){
    .styled-input {
        width:100%;
    }
}

.styled-input label {
    color: #999;
    padding: 1.3rem 30px 1rem 30px;
    position: absolute;
    top: 10px;
    left: 0;
    -webkit-transition: all 0.25s ease;
    transition: all 0.25s ease;
    pointer-events: none;
}

.styled-input.wide { 
    width: 650px;
    max-width: 100%;
}

input,
textarea {
    padding: 30px;
    border: 0;
    width: 100%;
    font-size: 1rem;
    background-color: #2d2d2d;
    color: white;
    border-radius: 4px;
}

input:focus,
textarea:focus { outline: 0; }

input:focus ~ span,
textarea:focus ~ span {
    width: 100%;
    -webkit-transition: all 0.075s ease;
    transition: all 0.075s ease;


}

textarea {
    width: 100%;
    min-height: 10em;
}

.input-container {
    width: 600px;
    max-width: 100%;
    margin: 20px auto 25px auto;
}

.submit-btn {
    float: right;
    padding: 7px 35px;
    border-radius: 60px;
    display: inline-block;
    background-color:rgba(255,80,0,1);;
    color: white;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
              0 2px 10px 0 rgba(0,0,0,0.07);
    -webkit-transition: all 300ms ease;
    transition: all 300ms ease;

}

.submit-btn:hover {
    transform: translateY(1px);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
              0 1px 1px 0 rgba(0,0,0,0.09);
}

@media (max-width: 768px) {
    .submit-btn {
        width:100%;
        float: none;
        text-align:center;
    }
}

input[type=checkbox] + label {
  color: #ccc;
  font-style: italic;
} 

input[type=checkbox]:checked + label {
  color: #f00;
  font-style: normal;
}

/*footer*/



.footer-distributed{
	background: #FF5000;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
	height: 290px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;

}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}


.footer-distributed .footer-center i.fa-phone{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center i.fa-map-marker-alt{
	font-size: 17px;
	line-height: 38px;
	position: relative;
	bottom: 30px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #ffffff;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #ffffff;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;

}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #262626;
	border-radius: 2px;


	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;

	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;

	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
/*footer*/
</style>
</head><html>
<section class="navigation">

<img class="subhiksha" src="{% static "img/title_mew.jpeg" %}"/> 




  
<div class="nav-container">
<div class="dropdown">
    <a href="/" class="dropbtn">Home</a>
</div>
<div class="dropdown">
	<button href="cctv.php" class="dropbtn">CCTV <i class="fas fa-caret-down"></i></button>
  	<div class="dropdown-content">
    	<a href="/CCTV2">CP Plus</a>
    	<a href="/CCTV">Godrej</a>
    	<a href="/CCTV3">Panasonic</a>
    	<a href="/CCTV5">Samsung</a>
    	<a href="/CCTV4">Sony</a>
  	</div>
</div>
<div class="dropdown">
	<button href="/fire_alarm" class="dropbtn">Fire Alarm <i class="fas fa-caret-down"></i></button>
  	<div class="dropdown-content">
    	<a href="/fire_alarm">Edwards</a>
    	<a href="/fire_alarm2">Cooper</a>
    	<a href="/fire_alarm3">Bosch</a>
  	</div>
</div>
<div class="dropdown">
	<button class="dropbtn">Inverters & Batteries <i class="fas fa-caret-down"></i></button>
  	<div class="dropdown-content">
    	<a href="/inverter_battery">Exide</a>
    	<a href="/inverter_battery2">V-Gaurd</a>
    	<a href="/inverter_battery3">Luminous</a>
  	</div>
</div>
<div class="dropdown">
	<button href="/counting_machine.php" class="dropbtn">Cash Counting Machine <i class="fas fa-caret-down"></i></button>
  	<div class="dropdown-content">
      <a href="/counting_machine">Godrej</a>
      <a href="/counting_machine2">Maxsell</a>
      <a href="/counting_machine3">Phoenix</a>
      <a href="/counting_machine4">Kores</a>
      <a href="/counting_machine5">Lada</a>
    </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Air conditioners <i class="fas fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="/ac">Voltas</a>
      <a href="/ac2">LG</a>
      <a href="/ac3">Panasonic</a>
      <a href="/ac4">Blue Star</a>
      <a href="/ac5">Whirlpool</a>
    </div>
</div>
<div class="dropdown">
	<button class="dropbtn">TV <i class="fas fa-caret-down"></i></button>
  	<div class="dropdown-content">
    	<a href="/tv2">LG</a>
    	<a href="/tv">Sony</a>
      <a href="/tv3">Samsung</a>
  	</div>
</div>

    
  </div>

  
<div class='container100'>
          <input type="text" id="searchInput" placeholder="Search..">
          <div id='submitsearch'
            style="">
            <span>Search</span>
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
 
  
<script>
	$("#searchInput").focus(function () {
  
        $("#searchInput").css({
          "display": "inline",
          "width": "40%",
          "border": "1px solid #40585d",
          "opacity": "1",
          "padding": "8px 20px 8px 20px",
          "background-image": "none",
          "box-shadow": "0 0 1px black"
        });
        $("#submitsearch").css("display", "inline");
       
        $("#searchInput").prop("placeholder", "");
      });

 $("#searchInput").blur(function () {
   $("#searchInput").css({
     "background-image":"url('https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/search-24.png')",
      "width": "18%",
     "border": "1px solid #000",
     "padding": "8px 20px 8px 40px",
      "opacity":"0.9",
   });
    $("#searchInput").prop("placeholder", "Search..");
    $("#submitsearch").css("display", "none");
 });
</script>
<br>
<br>
<br>

<!-- =====================================
	      SLIDE SHOW
==========================================-->


    <div class="slider">
      <div class="slide current">

      </div>
      <div class="slide">
        
      </div>
      <div class="slide">
        
      </div>
      <div class="slide">
        
      </div>
      <div class="slide">
        
      </div>
      <div class="slide">
        
      </div>
    </div>
    <div class="buttons">
      <button id="prev"><i class="fas fa-arrow-left"></i></button>
      <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>


<section>
<main class="container">
  <section class="testimonial-section">
    <div class="f_color" style="color: rgba(255,80,0,1); font-size: 30px;"><h1>OUR SERVICES</h1>
    </div>
    
    <div class="card-container">
      <div class="card">
        <div class="card__heading">
          <div class="card__heading__img" ><i class='fas fa-truck' style='font-size:48px'></i></div>
          <div class="card__heading__text">
            <h2>DELIVERY</h2>
 
          </div>
        </div><br><br>
        <div class="card__body">
          <p>We assure you the fastest and the safest on time delivery services, with no extra charges. Just place your order and we'll be right there.</p>
        </div>
      </div>
      
      <div class="card">
        <div class="card__heading">
          <div class="card__heading__img" ><i class='fas fa-boxes' style='font-size:48px'></i></div>
          <div class="card__heading__text">
            <h2>BULK ORDERS</h2>

          </div>
        </div><br><br>
        <div class="card__body">
          <p>A big company, factory or an industry, we also take bulk orders without any hassel and deliver them safely to your location.</p>
        </div>
      </div>
      
      <div class="card">
        <div class="card__heading">
          <div class="card__heading__img" ><i class="fa fa-wrench" style='font-size:48px'></i></div>
          <div class="card__heading__text">
            <h2>FITTING AND REPAIR</h2>

          </div>
        </div>
        <div class="card__body">
          <p>Don't worry about the installations and post services, we also provide fitting and repair services with just a phone call away. Place a service and we are there.</p>
        </div>
      </div>
  </div>
  </section>
      </main>
  </section>
      
          


<br><br><br><br><br><br><br>




    <script type="text/javascript">
    	const slides = document.querySelectorAll(".slide");
const nextButton = document.getElementById("next");
const prevButton = document.getElementById("prev");
const auto = true;
const intervalTime = 5000;
let slideInterval;

const nextSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if (current.nextElementSibling) {
    current.nextElementSibling.classList.add("current");
  } else {
    slides[0].classList.add("current");
  }
};

const prevSlide = () => {
  const current = document.querySelector(".current");
  current.classList.remove("current");
  if (current.previousElementSibling) {
    current.previousElementSibling.classList.add("current");
  } else {
    slides[slides.length - 1].classList.add("current");
  }
};

nextButton.addEventListener("click", () => {
  nextSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});
prevButton.addEventListener("click", () => {
  prevSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

if (auto) {
  slideInterval = setInterval(nextSlide, intervalTime);
}

</script>

<!-- =======================================
 	           END OF SLIDESHOW
============================================-->



<!-- =======================================
 	          contact us
============================================-->
<section>
<div class="container">
	<div class="row">
		<div class="contact_us" style="font-family:'Montserrat', sans-serif;color:rgba(255,80,0,1); text-align:center;">
			<h1>CONTACT US</h1>
	</div>
	
		
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn">Send Message</div>
			</div>
	</div>
</div>
</div>

</section>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>






    <!--==========================
     end of contact us
    ============================-->









<!-- =======================================
 	           footer
============================================-->   

<footer class="footer-distributed">

			<div class="footer-left">
    
				<img class="subhiksha" src="{% static "img/foot_new.jpg" %}" style="position: relative;left: 0px;height: 125px;">

				<p class="footer-links" style="font-family: 'Montserrat'">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name" style="font-family: 'Montserrat'">Company Name © 2021</p>
			</div>

			<div class="footer-center" style="font-family: 'Montserrat'">

				<div>
					<i class="fa fa-map-marker-alt" ></i>
					<p ><span> Second floor, Crescent Complex</span><span> SP Office Road</span><span>East of Tower</span><span> Nagercoil</span></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 94865 50505</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p ><a href="mailto:support@company.com" >subhikshaelectronics@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about" style="font-family: 'Montserrat'">
					<span>About the company</span>
					We are an electronics and safety devices store, that provide delivery, take bulk orders, also providing fixing and repair services.
				</p>

				<div class="footer-icons" style="position: relative;right: -30px;padding-left: 50px ;">


					<a href="#"><i class="fab fa-facebook-f" style="position: relative;bottom: -8px;"></i></a>
					<a href="#"><i class="fab fa-twitter" style="position: relative;bottom: -8px;"></i></a>
					<a href="#"><i class="fab fa-linkedin-in" style="position: relative;bottom: -8px;"></i></a>
				


				</div>

			</div>

		</footer>



<!-- =======================================
 	           END of footer
============================================-->

    <!--==========================
      Facts Section
    ============================-->
    <!--<section id="facts1">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
         
        </div>
        <div class="row counters">

  <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">157</span>
            <p>Number of Branches</p>
  </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20,679</span>
            <p>Number of employees</p>
  </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Number of delivers per day</p>
  </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Number of head offices</p>
  </div>

  </div>

      </div>
    </section> <!-- #facts -->


    <!--==========================
      Services Section
    ============================-->
  <!--<section id="services1">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-user"></i></a></div>
              <h4 class="title"><a href="">CUSTOMERS</a></h4>
              <p class="description">Customers get their deliveries on time, with notifications of pre-arrival or pre-delivery helping them to plan their days better and schedule the service with Deliforce.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-gift"></i></a></div>
              <h4 class="title"><a href="">DELIVERY</a></h4>
              <p class="description">The agents get immediate notifications and can be in action immediately, helping in faster delivery.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-map-marker"></i></a></div>
              <h4 class="title"><a href="">TRACKER</a></h4>
              <p class="description">The dashboard helps the courier business owner to track all the agents, along with receiving summary of all the services completed successfully.</p>
            </div>
          </div>
      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <!--<section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title"></h3>
            <p class="cta-text"> </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
           
     

      </div>
          </div>
        </div>

      </div>
    </section> <!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <!-- section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Portfolio</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-logo">Logo</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>App 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web2.jpg" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app3.jpg" alt="">
              <div class="details">
                <h4>App 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card1.jpg" alt="">
              <div class="details">
                <h4>Card 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card2.jpg" alt="">
              <div class="details">
                <h4>Card 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web3.jpg" alt="">
              <div class="details">
                <h4>Web 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card3.jpg" alt="">
              <div class="details">
                <h4>Card 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app2.jpg" alt="">
              <div class="details">
                <h4>App 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo1.jpg" alt="">
              <div class="details">
                <h4>Logo 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo3.jpg" alt="">
              <div class="details">
                <h4>Logo 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web1.jpg" alt="">
              <div class="details">
                <h4>Web 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo2.jpg" alt="">
              <div class="details">
                <h4>Logo 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section>


  </main>
</html>

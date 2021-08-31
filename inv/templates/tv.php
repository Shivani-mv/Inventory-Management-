{% extends "header.php" %}
{% block content %}
<!DOCTYPE html>
<html>
<head>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>TV</title>
<style type="text/css">


* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  overflow-x: hidden;
}

.navbar {
  display: flex;
  align-items: center;
  padding: 20px;
}

nav {
  flex: 1;
  text-align: right;
}

nav ul {
  display: inline-block;
  list-style-type: none;
}

nav ul li {
  display: inline-block;
  margin-right: 20px;
}

a {
  text-decoration: none;
  color: #555;
}

p {
  color: #555;
}

.container {
  max-width: 1300px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;
}

.row {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
}

.col-2 {
  flex-basis: 50%;
  min-width: 300px;
}

.col-2 img {
  max-width: 100%;
  padding: 50px 0;
}

.col-2 h1 {
  font-size: 50px;
  line-height: 60px;
  margin: 25px 0;
}

.btn {
  display: inline-block;
  background: #ff523b;
  color: #ffffff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 30px;
  transition: background 0.5s;
}

.btn:hover {
  background: #563434;
}

.header {
  background: radial-gradient(#fff, #ffd6d6);
}

.header .row {
  margin-top: 70px;
}

.categories {
  margin: 70px 0;
}

.col-3 {
  flex-basis: 30%;
  min-width: 250px;
  margin-bottom: 30px;
}

.col-3 img {
  width: 100%;
}

.small-container {
  max-width: 1080px;
  margin: auto;
  position: relative;
  top: -50px;
  padding-left: 25px;
  padding-right: 25px;
}

.col-4 {
  flex-basis: 25%;
  padding: 10px;
  min-width: 200px;
  margin-bottom: 50px;
  transition: transform 0.5s;
}

.col-4 img {
  width: 100%;
}

.title {
  text-align: center;
  margin: 0 auto 80px;
  position: relative;
  line-height: 60px;
  color: #555;
}
.title::after {
  content: "";
  background: #ff523b;
  width: 80px;
  height: 5px;
  border-radius: 5px;
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translate(-50%);
}

h4 {
  color: #555;
  font-weight: normal;
}

.col-4 p {
  font-size: 14px;
}

.rating .fas {
  color: #ff523b;
}

.rating .far {
  color: #ff523b;
}

.col-4:hover {
  transform: translateY(-5px);
}

/* Offer */

.offer {
  background: radial-gradient(#fff, #ffd6d6);
  margin-top: 80px;
  padding: 30px 0;
}

.col-2 .offer-img {
  padding: 50px;
}

small {
  color: #555;
}

/* testimonial */

.testimonial {
  padding-top: 100px;
}

.testimonial .col-3 {
  text-align: center;
  padding: 40px 20px;
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: transform 0.5s;
}

.testimonial .col-3 img {
  width: 100px;
  margin-top: 20px;
  border-radius: 50%;
}

.testimonial .col-3:hover {
  transform: translateY(-10px);
}

.fa-quote-left {
  font-size: 34px;
  color: #ff523b;
}

.col-3 p {
  font-size: 14px;
  margin: 12px 0;
  color: #777777;
}

.testimonial .col-3 h3 {
  font-weight: 600;
  color: #555;
  font-size: 16px;
}

.brands {
  margin: 100px auto;
}

.col-5 {
  width: 160px;
}

.col-5 img {
  width: 100%;
  cursor: pointer;
  filter: grayscale(100%);
}

.col-5 img:hover {
  width: 100%;
  cursor: pointer;
  filter: grayscale(0);
}

/* footer */

.footer {
  background: #000;
  color: #8a8a8a;
  font-size: 14px;
  padding: 60px 0 20px;
}

.footer p {
  color: #8a8a8a;
}

.footer h3 {
  color: #ffffff;
  margin-bottom: 20px;
}

.footer-col-1,
.footer-col-2,
.footer-col-3,
.footer-col-4 {
  min-width: 250px;
  margin-bottom: 20px;
}

.footer-col-1 {
  flex-basis: 30%;
}

.footer-col-2 {
  flex: 1;
  text-align: center;
}

.footer-col-2 img {
  width: 180px;
  margin-bottom: 20px;
}

.footer-col-3,
.footer-col-4 {
  flex-basis: 12%;
  text-align: center;
}

ul {
  list-style-type: none;
}

.app-logo {
  margin-top: 20px;
}
.app-logo img {
  width: 140px;
}

.footer hr {
  border: none;
  background: #b5b5b5;
  height: 1px;
  margin: 20px 0;
}

.copyright {
  text-align: center;
}

.menu-icon {
  width: 28px;
  margin-left: 20px;
  display: none;
}

/* media query for menu */

@media only screen and (max-width: 800px) {
  nav ul {
    position: absolute;
    top: 70px;
    left: 0;
    background: #333;
    width: 100%;
    overflow: hidden;
    transition: max-height 0.5s;
  }
  nav ul li {
    display: block;
    margin-right: 50px;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  nav ul li a {
    color: #fff;
  }
  .menu-icon {
    display: block;
    cursor: pointer;
  }
}

/* all products page */

.row-2 {
  justify-content: space-between;
  margin: 100px auto 50px;
}

select {
  border: 1px solid #ff523b;
  padding: 5px;
}

select:focus {
  outline: none;
}

.page-btn {
  margin: 0 auto 80px;
}

.page-btn span {
  display: inline-block;
  border: 1px solid #ff523b;
  margin-left: 10px;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  cursor: pointer;
}

.page-btn span:hover {
  background: #ff523b;
  color: #ffffff;
}

/* single product details */

.single-product {
  margin-top: 80px;
}

.single-product .col-2 img {
  padding: 0;
}

.single-product .col-2 {
  padding: 20px;
}

.single-product h4 {
  margin: 20px 0;
  font-size: 22px;
  font-weight: bold;
}

.single-product select {
  display: block;
  padding: 10px;
  margin-top: 20px;
}

.single-product input {
  width: 50px;
  height: 40px;
  padding-left: 10px;
  font-size: 20px;
  margin-right: 10px;
  border: 1px solid #ff523b;
}

input:focus {
  outline: none;
}

.single-product .fas {
  color: #ff523b;
  margin-left: 10px;
}

.small-img-row {
  display: flex;
  justify-content: space-between;
}

.small-img-col {
  flex-basis: 24%;
  cursor: pointer;
}

/* cart items */

.cart-page {
  margin: 90px auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

.cart-info {
  display: flex;
  flex-wrap: wrap;
}

th {
  text-align: left;
  padding: 5px;
  color: #ffffff;
  background: #ff523b;
  font-weight: normal;
}
td {
  padding: 10px 5px;
}

td input {
  width: 40px;
  height: 30px;
  padding: 5px;
}

td a {
  color: #ff523b;
  font-size: 12px;
}

td img {
  width: 80px;
  height: 80px;
  margin-right: 10px;
}

.total-price {
  display: flex;
  justify-content: flex-end;
}

.total-price table {
  border-top: 3px solid #ff523b;
  width: 100%;
  max-width: 400px;
}

td:last-child {
  text-align: right;
}

th:last-child {
  text-align: right;
}
/* account page */
.account-page {
  padding: 50px 0;
  background: radial-gradient(#fff, #ffd6d6);
}

.form-container {
  background: #ffffff;
  width: 300px;
  height: 400px;
  position: relative;
  text-align: center;
  padding: 20px 0;
  margin: auto;
  box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.form-container span {
  font-weight: bold;
  padding: 0 10px;
  color: #555555;
  cursor: pointer;
  width: 100px;
  display: inline-block;
}

.form-btn {
  display: inline-block;
}

.form-container form {
  max-width: 300px;
  padding: 0 20px;
  position: absolute;
  top: 130px;
  transition: transform 1s;
}

form input {
  width: 100%;
  height: 30px;
  margin: 10px 0;
  padding: 0 10px;
  border: 1px solid #ccc;
}

form .btn {
  width: 100%;
  border: none;
  cursor: pointer;
  margin: 10px 0;
}

form .btn:focus {
  outline: none;
}

#LoginForm {
  left: -300px;
}

#RegForm {
  left: 0;
}

form a {
  font-size: 12px;
}

#Indicator {
  width: 100px;
  border: none;
  background: #ff523b;
  height: 3px;
  margin-top: 8px;
  transform: translateX(100px);
  transition: transform 1s;
}

/* media query for less than 600 screen size */

@media only screen and (max-width: 600px) {
  .row {
    text-align: center;
  }
  .col-2,
  .col-3,
  .col-4 {
    flex-basis: 100%;
  }

  .single-product .row {
    text-align: left;
  }

  .single-product .col-2 {
    padding: 20px 0;
  }
  .single-product h1 {
    font-size: 26px;
    line-height: 32px;
  }
  .cart-info p {
    display: none;
  }
}


/* header */
.navigation {
   height: 60px;
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
  left: 790px;
  top: -38px;
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
 
/* end of header */

/* search bar */
.container100 {
    position:relative;
    left: 1900px;
    top: -195px;
    width:1500px;  
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

</style>
</head>
<?php 
include('header.php');
 ?>



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





  <!--  <nav>
      <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.html">Products</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="account.html">Account</a></li>
      </ul>
    </nav>  -->
    
  </div>
</div>
{% load static %}
<div class="small-container">
  <div class="row row-2">
    <h2>All Products</h2>
<!------------------------------------------------sony------------------------------------------------------------>
  </div>
  <div class="row">
    <div class="col-4">
      <img src="{% static "img/tv/tv1.png" %}" alt="" />
      <h4>Sony Bravia 108 cm (43 inches) Full HD Smart LED TV KDL-43W6603 (Black) (2020 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹ 57,999.00</p>
    </div>

    <div class="col-4">
      <img src="{% static "img/tv/tv2.png" %}" alt="" />
      <h4>Sony Bravia 138.8 cm (55 inches) 4K Ultra HD Smart LED TV KD-55X7002G (Black) (2019 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹ 57,999.00</p>
    </div>

    <div class="col-4">
      <img src="{% static "img/tv/tv3.png" %}" alt="" />
      <h4>Sony Bravia 108 cm (43 inches) 4K Ultra HD Smart Android LED TV 43X7400H (Black) (2020 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>₹ 49,990.00</p>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <img src="{% static "img/tv/tv4.png" %}" alt="" />
      <h4>Sony Bravia 101.6cm (40 Inches) Full HD LED TV With Fire TV Stick (KLV-40R252G) (Black) | Smart Combo</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹ 32,990.00</p>
    </div>

    <div class="col-4">
      <img src="{% static "img/tv/tv5.png" %}" alt="" />
      <h4>Sony Bravia 164 cm (65 Inches) 4K Ultra HD Smart Android LED TV 65X7400H (Black) (2020 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>₹ 99,999.00</p>
    </div>
  

  
    <div class="col-4">
      <img src="{% static "img/tv/tv6.png" %}" alt="" />
      <h4>Sony Bravia 108 cm (43 inches) 4K Ultra HD Certified Android LED TV 43X7500H (Black) (2020 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹ 54,190.00</p>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <img src="{% static "img/tv/tv7.png" %}" alt="" />
      <h4>Sony Bravia 138.8 cm (55 inches) 4K Ultra HD Certified Android LED TV 55X7500H (Black) (2020 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹ 75,990.00</p>
    </div>

  <div class="col-4">
      <img src="{% static "img/tv/tv8.png" %}" alt="" />
      <h4>Sony Bravia 164 cm (65 inches) 4K Ultra HD Smart Certified Android LED TV 65X9000H (Black) (2020 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>₹ 1,51,990.00</p>
  </div>
  <div class="col-4">
      <img src="{% static "img/tv/tv9.png" %}" alt="" />
      <h4>Sony Bravia 164 cm (65 inches) 4K Ultra HD Certified Android LED TV 65X8000H (Black) (2020 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p>₹ 1,13,990.00</p>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <img src="{% static "img/tv/tv10.png" %}" alt="" />
      <h4>TSony Bravia 138.8 cm (55 inches) 4K Ultra HD Smart Certified Android LED TV 55X8000H (Black)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹ 84,990.00</p>
    </div>

    <div class="col-4">
      <img src="{% static "img/tv/tv11.png" %}" alt="" />
      <h4>Sony Bravia 138 cm (55 inches) 4K Ultra HD Certified Android Smart OLED TV KD-55A8G (Black) (2019 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹ 1,39,490.00</p>
    </div>

    <div class="col-4">
      <img src="{% static "img/tv/tv12.png" %}" alt="" />
      <h4>Sony Bravia 108 cm (43 inches) 4K Ultra HD Certified Android LED TV 43X8000H (Black) (2020 Model)</h4>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
      <p>₹ 64,990.00</p>
    </div>
  </div>

  <div class="page-btn">
    <a href="/tv"><span>1</span></a>
    <a href="/tv2"><span>2</span></a>
    <a href="/tv3"><span>3</span></a>
  </div>
</div>

<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
        <h3>Download Our App</h3>
        <p>Download App for Android and iso mobile phone.</p>
        <div class="app-logo">
          <img src="https://i.ibb.co/KbPTYYQ/play-store.png" alt="" />
          <img src="https://i.ibb.co/hVM4X2p/app-store.png" alt="" />
        </div>
      </div>

      <div class="footer-col-2">
        <img src="https://i.ibb.co/j3FNGj7/logo-white.png" alt="" />
        <p>
          Our Purpose Is To Sustainably Make the Pleasure and Benefits of
          Sports Accessible to the Many.
        </p>
      </div>

      <div class="footer-col-3">
        <h3>Useful Links</h3>
        <ul>
          <li>Coupons</li>
          <li>Blog Post</li>
          <li>Return Policy</li>
          <li>Join Affiliate</li>
        </ul>
      </div>

      <div class="footer-col-4">
        <h3>Follow us</h3>
        <ul>
          <li>Facebook</li>
          <li>Twitter</li>
          <li>Instagram</li>
          <li>YouTube</li>
        </ul>
      </div>
    </div>
    <hr />
    <p class="copyright">Copyright &copy; 2021 - Red Store</p>
  </div>
</div>

<!-- js for toggle menu -->
<script>
  var MenuItems = document.getElementById('MenuItems');
  MenuItems.style.maxHeight = '0px';

  function menutoggle() {
    if (MenuItems.style.maxHeight == '0px') {
      MenuItems.style.maxHeight = '200px';
    } else {
      MenuItems.style.maxHeight = '0px';
    }
  }
</script>







</body>
</html>
{% endblock %}
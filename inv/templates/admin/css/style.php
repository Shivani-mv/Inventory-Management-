
<?php header("Content-type: text/css"); ?>

/*
	 CSS-Tricks Example
	 by Chris Coyier
	 http://css-tricks.com
*/

* { margin: 0; padding: 0; }
body { font: 14px/1.4 Georgia, serif; }
#page-wrap { width: 800px; margin: 0 auto; }

textarea { border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; }
table { border-collapse: collapse; }
table td, table th { border: 1px solid black; padding: 5px; }

#header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }

#address { width: 250px; height: 150px; float: left; }
#customer { overflow: hidden; }

#logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; max-height: 100px; overflow: hidden; }
#logo:hover, #logo.edit { border: 1px solid #000; margin-top: 0px; max-height: 125px; }
#logoctr { display: none; }
#logo:hover #logoctr, #logo.edit #logoctr { display: block; text-align: right; line-height: 25px; background: #eee; padding: 0 5px; }
#logohelp { text-align: left; display: none; font-style: italic; padding: 10px 5px;}
#logohelp input { margin-bottom: 5px; }
.edit #logohelp { display: block; }
.edit #save-logo, .edit #cancel-logo { display: inline; }
.edit #image, #save-logo, #cancel-logo, .edit #change-logo, .edit #delete-logo { display: none; }
#customer-title { font-size: 20px; font-weight: bold; float: left; }

#meta { margin-top: 1px; width: 300px; float: right; }
#meta td { text-align: right;  }
#meta td.meta-head { text-align: left; background: #eee; }
#meta td textarea { width: 100%; height: 20px; text-align: right; }

#items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
#items th { background: #eee; }
#items textarea { width: 80px; height: 50px; }
#items tr.item-row td { border: 0; vertical-align: top; }
#items td.description { width: 300px; }
#items td.item-name { width: 175px; }
#items td.description textarea, #items td.item-name textarea { width: 100%; }
#items td.total-line { border-right: 0; text-align: right; }
#items td.total-value { border-left: 0; padding: 10px; }
#items td.total-value textarea { height: 20px; background: none; }
#items td.balance { background: #eee; }
#items td.blank { border: 0; }

#terms { text-align: center; margin: 20px 0 0 0; }
#terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
#terms textarea { width: 100%; text-align: center;}

textarea:hover, textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#EEFF88; }

.delete-wpr { position: relative; }
.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }




/*
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
*/
h4, h5, h6,
h1, h2, h3 {margin-top: 0;}
ul, ol {margin: 0;}
p {margin: 0;}

html, body{
  	font-family: 'Cabin', sans-serif;
    font-size: 100%;
  	overflow-x: hidden;
	background: #f9f9f9;
}
body a{
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
	text-decoration:none;
}
a:focus, a:active, a:hover {
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    color: #353F4F;
	text-decoration:none;
}

h1, h2, h3, h4, h5 {
    font-family: 'Cabin', sans-serif;
}
.icons {
    margin: 2em 2em;
    background: #fff;
    padding: 2em;
	-ms-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
}
.ic-ons {
    padding: 1em;
}
.fa-hover.col-md-3.col-sm-4 {
    font-size: 1em;
    padding: .5em;
}
.met-top {
    float: right;
    width: 40%;
}
.show_hide {
    display:none;
    float:left;
}
.meters_list{
	border: 1px solid #F0F0F0;
	background: #65cea7;
	color:#FFF;
	border-radius: 4px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
	padding:0;
	font-size: 20px;
	text-transform: uppercase;
	font-weight: 600;
}
.meters_list img{
	width: 24%;
	display: inline-block;
	vertical-align: middle;
	margin-right: 15px;
}
/** Login **/
.login-body{
	background: url("../images/login-bg-green.png") no-repeat center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	background-position:100% 100%;
}
.login-top{
	padding:15px;
}
.login-top-left{
	float:left;
}
.login-top-left h1 a{
	font-size:25px;
	color:#35AB7F;
}
.login-top-right{
	float:right;
}
.login-top-right li{
	display:inline-block;
	color:#222;
}
.login-top-right li a{
	font-size:18px;
	color:#35AB7F;
	margin:0 10px;
}

.registration-form{
	width:370px;
	margin:100px auto;		
 }
 .login-form{
 	padding:8%;
 	background:#FFF;
	border-radius:2em;
	-webkit-border-radius:2em;
	-moz-border-radius:2em;
	-o-border-radius:2em;
	box-shadow:0px 0px 10px rgba(0, 0, 0, 0.4);
	-webkit-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.4);
	-moz-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.4);
	-o-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.4);
 }
 .logo-img{
 	 text-align:center; 	
 }
 .login-form  a{
   display:inline-block;
   text-align:center; 	
   margin:0 auto;
 }
 .registration-form h3{
 	text-align:center;
 	font-size:25px;
 	color:#0e3c7b;
 	margin:15px 0 25px 0;
 }
.registration-form span:first-child{
    margin-top: 0;	
 }
.registration-form input[type="text"],.registration-form input[type="password"]{
	padding:15px;
    color:#333;
    font-size:13px;
    background:none;   
    outline:none;
    margin:4px auto;
    width:95%;  
    -webkit-apperance:none;
    background:#FFF;
	border:1px solid #ECECEC;
    outline:none;
    transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
}
.registration-form input[type="text"]:hover,.registration-form input[type="password"]:hover,.registration-form input[type="text"]:focus,.registration-form input[type="password"]:focus{
	border-color:#ccc;
}
.registration-form input[type="submit"]{
	padding:15px 2em;
	width:100%;
	display:block;
	color:#FFF;
	font-size:1em;
	font-weight:bold;
	text-transform:uppercase;
	cursor:pointer;
	border:none;
	outline:none;
    background:#6bc5a4;        
	border-radius:2px;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	-o-border-radius:2px;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
	-webkit-apperance:none;
	margin-top:15px;
}
.registration-form input[type="submit"]:hover{
      background:#4DAA88;
}
.registration-form .login_form input[type="text"] {
	padding-left:0;
	border:none;
	border-bottom:1px solid #ECECEC;
	font-size:16px;
}
.registration-form .login_form input[type="password"] {
	border:none;
	padding-left:0;
	width:84%;
	margin:0;
	font-size:16px;
}
.submit-buttom{
	position:relative;
	border-bottom:1px solid #eee;
}
.registration-form .login_form button{
	background:none;
	border:none;
	outline:none;
	position:absolute;
    top:10px;
    right:0;
    cursor:pointer;
}
.btn-info {
    padding: 8px 12px;
}
/** error Message **/
.hint-message {
	font-size:12px;	
	text-align:right;
    height:18px;
}
.error{
	color:red;
}
.success {
	color:green;
}
/*Header Stats Start*/
.header_stats{
	text-align: center;
}
.header_stats h3{
	font-size: 12px;
	font-weight: 600;
}
.header_stats p{
	font-size: 12px;
}
.header_stats .stat-num{
	font-size: 26px;
	color: #111;
	font-weight: bold;
	padding: 8px 0;
}
.header_stats .stat-highlight{
	color: #ef4836;
	font-weight: bold;
}
.header_stats .stat-highlight-red{
	color: #ef4836;
	font-weight: bold;
}
.header_stats .stat-highlight-green{
	color: #26a65b;;
	font-weight: bold;
}
/*--- Progress Bar ----*/
.meter {
	position: relative;
}
.meter > span {
	display: block;
	height: 100%;
	   
	position: relative;
	overflow: hidden;
}
.meter > span:after, .animate > span > span {
	content: "";
	position: absolute;
	top: 0; left: 0; bottom: 0; right: 0;
	
	overflow: hidden;
}

.animate > span:after {
	display: none;
}

@-webkit-keyframes move {
    0% {
       background-position: 0 0;
    }
    100% {
       background-position: 50px 50px;
    }
}

@-moz-keyframes move {
    0% {
       background-position: 0 0;
    }
    100% {
       background-position: 50px 50px;
    }
}

.red > span {
	background-color: #65CEA7;
}

.nostripes > span > span, .nostripes > span:after {
	-webkit-animation: none;
	-moz-animation: none;
	background-image: none;
}

/*-- total production --- */
.total_production{
	background: #fff;
	padding: 2em;
}
.total_production h3{
	font-size: 25px;
	margin-bottom: .3em;
}
.total_production p{
	font-size: 13px;
	margin-bottom: .3em;
}
.progress-bar{
	float: left;
	width: 72%;
}
.progress-report{
	padding: 1.5em 2em;
	background: #EBC85E;
	width: 16%;
	float: right;
	margin-left: 2%;
	-webkit-border-radius: .3em;
	   -moz-border-radius: .3em;
			border-radius: .3em;
			position: relative;
}
.progress-report:before {
  pointer-events: none;
  position: absolute;
  content: '';
  border-style: solid;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: left;
  transition-property: left;
  top: -webkit-calc(50% - 10px);
  top: calc(50% - 10px);
  left: -10px;
  border-width: 10px 10px 10px 0;
  border-color: transparent #EBC85E transparent transparent;
}

.progress-report p{
	font-size: 13px;
	color: #A17C09;
}
.progress-report h4{
	font-size: 24px;
	color: #fff;
}
.align-right{
	float: right;
}
/*start-checkbox*/
.checkbox {
	padding-left: 25px;
	color:#222;
	cursor: pointer;
	position:relative;
	font-size:15px;
}
 .checkbox:last-child {
	margin-bottom: 0;
}
.checkbox input {
	position: absolute;
	left: -9999px;
}
.checkbox i {
	position: absolute;
	bottom:0px;
	left: 0;
	display: block;
	width: 16px;
	height:16px;
	outline: none;
	border:1px solid #DDDDDD;
	background:#FFF;
	border-radius:4px;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	-o-border-radius:4px;
}
.checkbox input + i:after {
	position: absolute;
	opacity: 0;
	transition: opacity 0.1s;
	-o-transition: opacity 0.1s;
	-ms-transition: opacity 0.1s;
	-moz-transition: opacity 0.1s;
	-webkit-transition: opacity 0.1s;
}
.checkbox input + i:after {
	content: '';
	background: url("../images/mark2.png") no-repeat center;
	top:0px;
	left:0px;
	width:17px;
	height:16px;
	font: normal 12px/16px FontAwesome;
	text-align: center;
}
.checkbox input:checked + i:after {
	opacity: 1;
}
.form-bottom .checkbox {
	float:none;
}
.forget{
	float:right;
}
.form-bottom{
	margin-top:20px;
	text-align:center;
}
.form-bottom p{
	font-size:12px;
}
.registration p{
	padding:20px 0;
	color:#8D8D8D;
	font-weight:600;
	text-align:center;
}
.registration p a{
	 color:#3E8B6F;
}
.registration p a:hover{
	text-decoration:underline;	
}
.radios input[type="radio"]{
  margin:4px 0 0 0;
  vertical-align:top;	
  cursor:pointer;
}
.radios label:first-child{
	margin-left:0;
}
.radios label{
	margin-left:15px;
}
.radios{
	margin-bottom:15px;
}
.registration-form p{
	font-size:15px;
	color:#575757;
}
.registration-form p.forget{
	font-size:12px;
}
.registration-form span{
	display:block;
}
.login-bottom{
	width:100%;
	position:absolute;
	bottom:0;
}
.login-bottom-left{
	float:left;
	padding:10px;
}
.login-bottom-left p{
	font-size:13px;
	color:#EEE;
}
.login-bottom-left p a{
	color:#FFF;
}
.login-bottom-left p a:hover{
	text-decoration:underline;
}
.login-bottom-right{
	float:right;
	padding:10px;
}
.login-bottom-right li{
	display:inline-block;
	color:#EEE;
}
.login-bottom-right li a{
	font-size:12px;
	color:#EEE;
	margin:0 10px;
	cursor:pointer;
}
.login-bottom-right li a:hover{
	color:#FFF;
	text-decoration:underline;
}
footer {
    background: #fff;
    padding: 12px;
    width: 100%;
    border-top: 1px solid #eff0f4;
    text-align:center;
    position: fixed;
    bottom: 0;
}
footer  p {
	color: #7A7676;
    font-size: 14px;
}
footer  p a{
	color:#F44336;
}
footer  p a:hover{
	text-decoration:underline;
}
.nofitications-dropdown li .dropdown-menu:before,.drp-mnu:before {
    position: absolute;
    top:-8.5px;
    left: 5px;
    display: inline-block;
    border-right: 8px solid transparent;
    border-bottom: 8px solid #DFDFDF;
    border-left: 8px solid transparent;
    content: '';
}
/*---------------------------------
            LEFT SIDE
----------------------------------*/

.left-side {
    width: 200px;
    position: absolute;
    top: 0;
    left: 0;
}

.sticky-left-side {
    position: fixed;
    height: 100%;
    overflow-y: auto;
    z-index: 100;
	background: #000;
}

.sticky-left-side .custom-nav {
    margin-top: 59px;
	background: #000;
}

.left-side-collapsed .sticky-left-side {
    overflow-y: visible;
}
.logo a {
    font-size: 0.7em;
    color: #fff;
    margin: 0;
    text-decoration: none;
    display: inline-block;
    text-transform: capitalize;
}
.logo a span{
	color:#000;
}
.logo-icon {
    display: none;
}
div#page-wrapper {
    padding:2em 2em;
}
.left-side-collapsed .logo-icon {
    height: 51px;
    margin-top: 0;
    display: block !important;
}
.logo-icon a{
	display:block;
	text-align:center;
	text-decoration: none;
}
.logo-icon a i{
	line-height: 1.4em;
    font-size: 1.5em;
    color: #fff;
    padding-top: 10px;
    display: block;
}
.logo-icon a:hover{
	color:#b8c9f1;
}
.left-side-inner {
    padding: 0px;
    margin-bottom: 50px;
}

.left-side .searchform {
    display: none;
}

.left-side .searchform::after {
    content: '';
    display: block;
    clear: both;
}

.left-side .searchform input {
    padding: 10px;
    width:83%;
    margin: 0 0 15px 10px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    border: none;
}

.left-side .logged-user {
    padding: 0 0 15px 12px;
    margin: 0 0 10px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    display: none;
}

.left-side .logged-user .media-object {
    width: 40px;
    height:40px;
    display:block;
    -moz-border-radius: 3em;
    -webkit-border-radius: 3em;
    border-radius: 3em;
    float: left;
}

.left-side .logged-user .media-body {
    margin-left: 60px;
    color: #d7d7d7;
}

.left-side .logged-user .media-body h4 {
    font-size: 15px;
    margin: 5px 0 0 0;
}

.left-side .logged-user .media-body h4 a {
    color: #fff;
}

.left-side .logged-user .media-body span {
    font-style: italic;
    font-size: 11px;
    opacity: 0.5;
}

.custom-nav {
    margin-bottom: 10px;
}

.custom-nav > li > a {
    color:#C8C8C8;
    padding: 12px 20px;
    border-radius: 0;
    -webkit-border-radius: 0;
}

.custom-nav > li > a:hover,
.custom-nav > li > a:active {
    background-color: #353f4f;
    color:#8BC34A;
    border-radius: 0;
    -webkit-border-radius: 0;
}

.custom-nav > li.menu-list > a {
    background: transparent;
}

.custom-nav > li.menu-list > a:hover {
    background-color: #353f4f;
}

.custom-nav > li.nav-active > a {
    background-color:#353f4f;
    color:#8BC34A;
}

.custom-nav > li.nav-active > ul{
    display: block;
}

.custom-nav > li.nav-active > a:hover {
    
}

.custom-nav > li.active > a,
.custom-nav > li.active > a:hover,
.custom-nav > li.active > a:focus {
    background-color: #353f4f;
    color:#8BC34A;
}

ul.dropdown-menu.drp-mnu li {
    width: 100%;
}

.custom-nav > li.menu-list.active > a {
    background-image: url(../images/plus.png);
}

.custom-nav > li.nav-active.active > a {
    background-image: url(../images/minus.png);
}

.custom-nav > li.nav-active.active > a:hover {
    background-image: url(../images/minus.png);
}

.custom-nav li .fa {
    font-size: 16px;
    vertical-align: middle;
    margin-right: 10px;
    width: 16px;
    text-align: center;
}

.custom-nav .sub-menu-list {
    list-style: none;
    display: none;
    margin: 0;
    padding: 0;
    background: #353f4f;
}

.custom-nav .sub-menu-list > li > a {
    color: #fff;
    font-size: 13px;
    display: block;
    padding: 10px 5px 10px 50px;
    -moz-transition: all 0.2s ease-out 0s;
    -webkit-transition: all 0.2s ease-out 0s;
    transition: all 0.2s ease-out 0s;
}

.custom-nav .sub-menu-list > li > a:hover,
.custom-nav .sub-menu-list > li > a:active,
.custom-nav .sub-menu-list > li > a:focus {
    text-decoration: none;
    color:#fff;
    background:#6B9D31;
}
.profile_img i {
	float: right;
    margin: .5em 0 0;
    color:#00BCD4;
}
.custom-nav .sub-menu-list > li .fa {
    font-size: 12px;
    opacity: 0.5;
    margin-right: 5px;
    text-align: left;
    width: auto;
    vertical-align: baseline;
}

.custom-nav .sub-menu-list > li.active > a {
    color: #65CEA7;
    background-color: #2A323F;
}

.custom-nav .sub-menu-list ul {
    margin-left: 12px;
    border: 0;
}

.custom-nav .menu-list.active ul {
    display: block;
}
.nav>li>a {
position: relative;
display: block;
padding: 12px 15px;
}
.nav>li {
position: relative;
display: block;
}
.nav-stacked>li+li {
margin-top: 1px;
margin-left: 0;
}
@media (max-width:767px){
	.hidden-xs{display:none!important}
	.visible-xs {
		display: none !important;
	}
}
@media (min-width:768px) and (max-width:991px){
	.hidden-sm{display:none!important}
}
@media (min-width:992px) and (max-width:1199px){
	.hidden-md{display:none!important}
}
@media (min-width:1200px){
	.hidden-lg{display:none!important}
}
/*------------------------------------------
            LEFT SIDE COLLAPSE
-------------------------------------------*/

.left-side-collapsed .logo {
    display: none;
}

.left-side-collapsed .header-section {
    margin-left: 0px;
}

.left-side-collapsed .left-side {
    width: 52px;
    top: 0px;
}

.left-side-collapsed .left-side-inner {
    padding: 0;
}

h5.left-nav-title {
    margin-left: 10px;
    color: #fff;
    margin-bottom:8px;
}

.left-side-collapsed .custom-nav {
    margin: 2px 0 20px 0;
}

.left-side-collapsed .custom-nav li a {
    text-align: center;
    padding: 10px;
    position: relative;
	
}

.left-side-collapsed .custom-nav > li.menu-list > a {
    background-image: none;
}

.left-side-collapsed .custom-nav li a span {
    position: absolute;
    background:#8BC34A;
    padding: 11.7px;
    left: 52px;
    top: 1px;
    min-width: 160px;
    text-align: left;
    z-index: 100;
    display: none;
	font-size:14px;
}

.left-side-collapsed .custom-nav li a span:after {
    right: 100%;
    top: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(0, 0, 0, 0);
    border-right-color:#8BC34A;
    border-width: 6px;
    margin-top: -6px;
}

.left-side-collapsed .custom-nav li.active a span {
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
}

.left-side-collapsed .custom-nav ul,
.left-side-collapsed .custom-nav .menu-list.nav-active ul {
    display: none;
}

.left-side-collapsed .custom-nav .menu-list.nav-hover ul {
    display: block;
}

.left-side-collapsed .custom-nav > li.nav-hover > a,
.left-side-collapsed .custom-nav > li.nav-hover.active > a {
    background:#353f4f;
    color:#8BC34A;
}

.left-side-collapsed .custom-nav li.nav-hover a span {
    display: block;
    color: #fff;
}

.left-side-collapsed .custom-nav li.nav-hover.active a span {
    background:#8BC34A;
    color: #fff;
}

.left-side-collapsed .custom-nav li.nav-hover ul {
    display: block;
    position: absolute;
    top: 44px;
    left: 52px;
    margin: 0;
    min-width: 160px;
    background:#517626;
    z-index: 100;
    -moz-border-radius: 0 0 2px 0;
    -webkit-border-radius: 0 0 2px 0;
    border-radius: 0 0 2px 0;
}

.left-side-collapsed .custom-nav ul a {
    text-align: left;
    padding: 6px 10px;
    padding-left: 10px;
}

.left-side-collapsed .custom-nav ul a:hover {
    background:#6B9D31;
}

.left-side-collapsed .custom-nav li a i {
    margin-right: 0;
	font-size: 1.2em;
}
ul.nav li a span {
    padding-left: .5em;
}

.left-side-collapsed .main-content {
    margin-left: 52px;
}


.left-side-collapsed .left-side{
    overflow: visible !important;
}

/*----------------------------
        HEADER SECTION
-----------------------------*/

.header-section {
    background:#FFF;
    box-shadow: 1px 0 3px rgba(0,0,0,.15);
    -webkit-box-shadow: 1px 0 3px rgba(0,0,0,.15);
    -moz-box-shadow: 1px 0 3px rgba(0,0,0,.15);
    -o-box-shadow: 1px 0 3px rgba(0,0,0,.15);
}

.header-section::after {
    clear: both;
    display: block;
    content: '';
}

.toggle-btn {
    font-size: 15px;
    padding: 10px 0 0;
    width: 40px;
    height: 40px;
    margin:.4em 0 0 2em;
    text-align: center;
    cursor: pointer;
    float: left;
    color: #fff;
    background: #F44336;
    border: none;
    border-radius: 100%;
    -moz-transition: all 0.2s ease-out 0s;
    -webkit-transition: all 0.2s ease-out 0s;
    transition: all 0.2s ease-out 0s;
}

.toggle-btn:hover {
    background:#C3C3C3;
    color: #fff;
}

.searchform input {
    box-shadow: none;
    float: left;
    font-size: 14px;
    margin:8px 0 0 10px;
    padding:7px 10px;
    width: 220px;
    outline:none;
    border:1px solid #eee;
    border-radius:4px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    -o-border-radius:4px;
}
.searchform input:focus {
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #ddd;
}
.logo-co{
	float:left;
	padding:7px 15px 6px;
}
.logo-co a {
	display:block;
}
/* ------------------------------
        STICKY HEADER
---------------------------------*/
.sticky-header .logo {
    position: fixed;
    top: 0;
    left: 0;
    width: 200px;
    z-index: 100;
    background: #8BC34A;
    border-bottom: 1px solid #303B4D;
    text-align: center;
    padding:0.55em 0 1em;
}
.logo h1 {
    margin-bottom: 0;
	line-height: 25px;
}
.sticky-header .header-section {
    position: fixed;
    top: 0;
    left: 200px;
    width: 100%;
    z-index: 100;
}

.sticky-header .main-content {
    padding-top: 50px;
}
.sticky-header .menu-right {
    margin-right: 0;
}
.sticky-header.left-side-collapsed .header-section {
    left: 52px;
}
.sticky-header.left-side-collapsed .menu-right {
    margin-right: 0;
}
.menu-right {
    margin:6px 15px 0px 0;
}

/* -----------------------
        DROPDOWN
--------------------------*/

.dropdown-menu-head {
    background: #fff
}
.dropdown-menu-head .title {
    background: #65cea7;
    color: #fff;
    padding: 15px;
    text-transform: uppercase;
    font-size: 12px;
    margin: 0;
}
/** User Panel **/
.social_icons{
	float: right;
    width:25%;
	margin-top:0.6em;
}
a.yui {
    padding:.6em 1.7em .5em !important;
}
.social_icons-left {
    padding-right: 0;
}
.social_icons-left a{
	font-size: .8em;
    color: #fff;
    margin: 0;
    padding: .6em 1em .5em;
    text-decoration: none;
    background: #3b5998;
    text-align: center;
}
.twi a{
	background:#55acee;
}
.pinterest a{
	background:#dc4e41;
}
.social_icons-left a span{
	padding-left:.5em;
}
.social_icons-left a i.i1{
	color:#fff;
	font-size:1.2em;
}
.profile_details_left {
    float: left;
	margin: .3em 0 0 1em;
}
.nofitications-dropdown{
	margin-top:2px;
}
ul.nofitications-dropdown li {
    display: inline-block;
}
ul.dropdown-menu li {
    margin-left: 0;
    width: 100%;
    padding: 0;
	background: #fff;
}
.user-panel-top ul{
	padding-left:0;
}
.user-panel-top li{
	float:left;
	margin-left:15px;
	position:relative;
}
/**** Search ********/
/*-------LOGIN STARTS HERE -------*/
#loginContainer {
    position:relative;
}
/* Login Button */
#loginButton { 
    display:inline-block;  
    position:relative;
    z-index:30;
    cursor:pointer;
}
#loginButton i { 
 font-size:20px;
}
#loginButton span{
	width:24px;
	height:24px;
	background:url(../images/sprite.png) no-repeat -35px -10px;
	display:block;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	cursor:pointer;
}
/* Login Box */
#loginBox {
    position:absolute;
    top:25px;
    right:0px;
    display:none;
    z-index:29;
}
/* Login Form */
#loginForm {
	float:right;
    width:280px; 
    margin-top:18px;
    padding:15px;
    background:#FFF;
	-webkit-box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.47);
	-moz-box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.47);
	-o-box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.47);
	box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.47);
}
.search_box {
	background:#FFF;
	border:1px solid #F0F0F0;
	position: relative;
}
.search_box input[type="text"] {
	border:1px solid #FFF;
	outline: none;
	background: none;
	font-size:13px;
	color: #888;
	width:88%;
	padding:7px 8px;
	margin:0;
	height:33px;
	-webkit-appearance:none;
	-o-transition: border-color ease-in-out 0.15s;
	-moz-transition: border-color ease-in-out 0.15s;
	-webkit-transition: border-color ease-in-out 0.15s;
	transition: border-color ease-in-out 0.15s;
}
.search_box input[type="text"]:focus{
	border:1px solid #424f63;
}
.search_box input[type="submit"] {
	border: none;
	cursor: pointer;
	background:#424f63 url(../images/search.png) no-repeat center;
	position: absolute;
	right: 0;
	width:35px;
	height:35px;
	outline:none;
}	
.wid{
	padding:0 1em 1em !important;
}
.search_box input[type="submit"]:hover{
	background-color:#353f4f;
}
.user-panel-top li span.digit{
    font-size:11px;
    font-weight:bold;
	color:#FFF;
	background:#e64c65;
	line-height:20px;
	width:20px;
	height:20px;
	border-radius:2em;
	-webkit-border-radius:2em;
	-moz-border-radius:2em;
	-o-border-radius:2em;	
	text-align:center;
	display: inline-block;
	position: absolute;
	top: -3px;
	right: -10px;
}
.user-panel-top li:first-child{
	margin-left:0;
}
.active a i,.act a i {
    color:#8BC34A;
}
.custom-nav > li.act > a, .custom-nav > li.act > a:hover, .custom-nav > li.act > a:focus {
    background-color: #353f4f;
    color:#8BC34A;
}
.user-panel-top li a{
	display: block;
	padding: 5px;
	text-decoration:none;
}
.profile_details_drop a {
    padding: 0px 5px 5px !important;
}
i.fa.fa-envelope{
	color:#ABABAB;
}
i.fa.fa-bell{
	color:#ABABAB;
}
i.fa.fa-tasks{
	color:#ABABAB;
}
.user-panel-top li a:hover{
	border-color:rgba(101, 124, 153, 0.93);
}
.user-panel-top li a i{
	width:24px;
	height:24px;
	display: block;
	text-align:center;
	line-height:25px;
}
.user-panel-top li a i span{
	font-size:15px;
	color:#FFF;
}
.user-panel-top li a.user{
	background:#667686;
}
.user-panel-top li span.green{
	background:#a88add;
}
.user-panel-top li span.red{
	background:#b8c9f1;
}
.user-panel-top li span.yellow{
	background:#bdc3c7;
}
/***** Messages *************/
/*start search*/
.sb-search {
	position: absolute;
	left: 115px;
	width: 0%;
	min-width: 30px;
    margin: 0;
    height: 30px;
	overflow: hidden;
	-webkit-transition: width 0.3s;
	-moz-transition: width 0.3s;
	transition: width 0.3s;
	-webkit-backface-visibility: hidden;
	background: none;
}
.sb-search-input {
	position: absolute;
	top: 0px;
	left: 1px;
	border: none;
	outline: none;
	background:#6DBEE8;
	width:88%;
	height: 30px;
	margin: 0;
	z-index: 10;
	font-size: 13px;
	color:#FFFFFF;
	padding:0 1em;
}
.sb-search-input::-webkit-input-placeholder {
	color:#FFFFFF;
}
.sb-search-input:-moz-placeholder {
	color: #ffffff;
}
.sb-search-input::-moz-placeholder {
	color: #efb480;
}
.sb-search-input:-ms-input-placeholder {
	color: #ffffff;
}
.sb-icon-search,.sb-search-submit  {
	width: 30px;
    height: 30px;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    padding: 0;
    margin: 0;
    line-height: 85px;
    text-align: center;
	cursor: pointer;
}
.sb-search-submit {
	background:#fff url('../images/search.png') no-repeat 5px 7px;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; /* IE 8 */
    filter: alpha(opacity=0); /* IE 5-7 */
    color: transparent;
	border: none;
	outline: none;
	z-index: -1;
	-webkit-appearance: none;
}
.sb-icon-search {
   background:#fff url('../images/search.png') no-repeat 5px 7px;
	z-index: 90;
}
/* Open state */
.sb-search.sb-search-open,.no-js .sb-search {
	width:100%;
	min-width: 230px;
}
.sb-search.sb-search-open .sb-icon-search,.no-js .sb-search .sb-icon-search {
	background: #c0c0c0 url('../images/img-sprite.png') no-repeat 0px 1px;
	color: #fff;
	z-index: 11;
}
.sb-search.sb-search-open .sb-search-submit,.no-js .sb-search .sb-search-submit {
	z-index: 90;
}
/*-- search-ends --*/
.dropdown{
	position:relative;
}
.dropdown-menu2{
	padding: 0;
	position:absolute;
	top: 133%;
    left: 0;
	z-index:1000;
	display:none;
	float:left;
	min-width:250px;
	margin:1px 0 0;
	font-size:14px;
	list-style:none;
	 -webkit-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -ms-transition: all 0.5s ease-out;
    -o-transition: all 0.5s ease-out;
    transition: all 0.5s ease-out;
	background-color:#fff;
	border:1px solid #ccc;
	border:1px solid rgba(0,0,0,0.15);
	-webkit-box-shadow: 0px 1px 5px rgba(184, 201, 241, 0.75);
	-moz-box-shadow: 0px 1px 5px rgba(184, 201, 241, 0.75);
	-o-box-shadow: 0px 1px 5px rgba(184, 201, 241, 0.75);
	box-shadow: 0px 1px 5px rgba(184, 201, 241, 0.75);
	background-clip:padding-box;
}
.export-nav{
	margin:10px 0 0;
}
.open > .dropdown-menu2 {
  opacity:1;
}
ul.dropdown-menu {
    padding: 0;
	min-width: 250px;
	top:108%;
}
.dropdown-menu li a .badge {
    background: #ff5454;
    border: 2px solid white;
    position: absolute;
    top: 9px;
    right: 3px;
    font-size: 8px;
    line-height: 8px;
    padding: 4px 6px;
    -webkit-border-radius: 50em;
    -moz-border-radius: 50em;
    border-radius: 50em;
    min-width: 0;
}
.dropdown-menu2 {
   opacity:.3;
   -webkit-transform-origin: top;
   transform-origin: top;
   -ms-transform-origin: top;
   -moz-transform-origin: top;
   -o-transform-origin: top;
  -webkit-animation-fill-mode: forwards;
   -moz-animation-fill-mode: forwards; 
   -o-animation-fill-mode: forwards; 
   -mz-animation-fill-mode: forwards; 
   animation-fill-mode: forwards; 
  -webkit-transform: scale(1, 0);
  -moz-transform: scale(1, 0);
  -o-transform: scale(1, 0);
  -ms-transform: scale(1, 0);
  transform: scale(1, 0);
  display: block; 
  transition: all 0.2s linear;
  -webkit-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
   -moz-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
}
.dropdown-menu2 li{
	margin-left:0;
	float:none;
	width: 100%;
}

.dropdown-menu2 li a{
	 border-radius:0;
	-webkit-border-radius:0;
	-moz-border-radius:0;
	-o-border-radius:0;
	border:none;
	border-bottom:1px solid #E4E4E4;
}
.dropdown-menu2 li a:hover {
	border:none;
	border-bottom:1px solid #E4E4E4;
}
.dropdown-menu2 li.odd{
	background:rgba(0, 0, 0, 0.02);
}
.notification_header{
	background-color:#FAFAFA;
	padding: 10px 15px;
	border-bottom:1px solid rgba(0, 0, 0, 0.05);
}
.notification_header h3{	
	color:#6A6A6A;
	font-size:12px;
	font-weight:600;
	margin:0;
}
.notification_bottom{
	background-color: #F1F1F1;
    padding: 4px 0;
    text-align: center;
}
.notification_bottom a {
    color:#F44336;
}
.notification_bottom a:hover {
    color:#999;
}
.notification_bottom h3 a{	
	color: #717171;
	font-size:12px;
	border-radius:0;
	border:none;
	padding:0;
	text-align:center;
}
.notification_bottom h3 a:hover{	
	color:#4A4A4A;
	text-decoration:underline;
	background:none;
}
.user_img{
	float:left;
	width:15%;
}
.user_img img{
	max-width:100%;
	display:block;
	border-radius:2em;
	-webkit-border-radius:2em;
	-moz-border-radius:2em;
	-o-border-radius:2em;
}
.notification_desc{
	float:left;
	width:80%;
	margin-left:5%;
}
.notification_desc p{
	color:#757575;
	font-size:13px;
	padding:2px 0;
}
.wrapper-dropdown-2 .dropdown li a:hover .notification_desc p{
	color:#424242;
}
.notification_desc p span{
	color:#979797 !important;
	font-size:11px;
}
/*** Profile Details **/
.profile_picture{
	text-align:center;
}
.profile_picture a{
	display:block;
}
.profile_picture > a {
	display: block;
	margin:0 auto;
    border-radius:8em;
    -webkit-border-radius:8em;
    -moz-border-radius:8em;
    -o-border-radius:8em;
    width:100px;
    height:100px;
}
.profile_picture_name{
	padding-top:20px;
}
.profile_picture_name h2{
	margin-bottom:5px;
	font-size:20px;
	color: #535351;
	font-weight:600;
}
.profile_picture_name p{
	font-size:12px;
	color: #BCBCBC;
	line-height: 1.6em;
}
.articles_list li {
	display:block;
	padding:15px 0;
	border-bottom:1px solid #F8F8F8;
}
.articles_list li a{
	display:block;
	color:#909090;
	font-size:12px;
	text-align:left;
	-webkit-transition: all 0.2s ease-in-out;
	-moz-transition: all 0.2s ease-in-out;
	-o-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	cursor:pointer;
}
.articles_list li a:hover{
	color:#65CEA7;
}
.articles_list li a i{
	display:inline-block;
	margin-right:8px;
	font-size:20px;
	vertical-align:top;
}
.articles_list li a i span{
	font-size:25px;
	color:#FFF;
}
/*Progress bars*/
.progress {
	height: 15px;
	margin-top:8px;
	margin-bottom: 8px;
	overflow: hidden;
	background: #e1e1e1;
	z-index: 1;
	cursor:pointer;
}
.task-info .percentage{
	float:right;
	height:inherit;
	line-height:inherit;
}
.task-desc{
	font-size:12px;
}
.wrapper-dropdown-3 .dropdown li a:hover span.task-desc {
	color:#65cea7;
}
.progress .bar {
		z-index: 2;
		height:15px; 
		font-size: 12px;
		color: white;
		text-align: center;
		float:left;
		-webkit-box-sizing: content-box;
		-moz-box-sizing: content-box;
		-ms-box-sizing: content-box;
		box-sizing: content-box;
		-webkit-transition: width 0.6s ease;
		  -moz-transition: width 0.6s ease;
		  -o-transition: width 0.6s ease;
		  transition: width 0.6s ease;
	}
.progress-striped .yellow{
	background:#f0ad4e;
} 
.progress-striped .green{
	background:#5cb85c;
} 
.progress-striped .light-blue{
	background:#5bc0de;
} 
.progress-striped .red{
	background:#d9534f;
} 
.progress-striped .blue{
	background:#428bca;
} 
.progress-striped .bar {
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
  -moz-background-size: 40px 40px;
  -o-background-size: 40px 40px;
  background-size: 40px 40px;
}
.progress.active .bar {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -moz-animation: progress-bar-stripes 2s linear infinite;
  -ms-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-moz-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-ms-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 0 0;
  }
  to {
    background-position: 40px 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
/********* profile details **********/
.profile_details{
	float: right;
    margin: 0 4.8em 0 1em;
}
.profile_details_drop .lnr.lnr-chevron-up{
	display:none;
}
.profile_details_drop.open .lnr.lnr-chevron-up{
    display:block;
}
.profile_details_drop.open .lnr.lnr-chevron-down{
	display:none;
}
ul.dropdown-menu2.drpdwn-meu2 {
    top: 102%;
}
ul.dropdown-menu{
	-moz-animation: fadeInDown .3s ease-in;
    -webkit-animation: fadeInDown .3s ease-in;
    animation: fadeInDown .3s ease-in;
}
ul.dropdown-menu.drp-mnu {
    min-width: 125px;
	top:94%;
}
ul.dropdown-menu.drp-mnu li a {
    display: inline-flex;
    width: 100%;
    text-align: center;
    padding:.5em 0 0.5em 1.5em;
}
ul.dropdown-menu.drp-mnu li a i {
    width: 24px;
    line-height: 17px;
    height: 20px;
}
.profile_img span{
	float:left;
	display:block;
	width:40px;
	height:40px;
	border-radius:3em;
	-webkit-border-radius:3em;
	-moz-border-radius:3em;
	-o-border-radius:3em;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
}
.span_4 {
    padding: 0;
}
.user-name{
	 float:left;
	 margin-top:8px;
	 margin-left:5px;
	 height:35px;
	 width:45%;
}
.profile_details ul li{
	list-style-type:none;
	width:87%;
}
.user-name p{
	font-size:14px;
	color:#F44336;
	line-height:1em;
	font-weight:700;
}
.user-name p span{
	font-size:10px;
	font-style:italic;
	color:#424f63;
	font-weight:normal;
}
/**** icon dropdown ******/
.wrapper-dropdown-4 i.dropdown-icon{
	width:20px;
	height:20px;
	display:block;
	background:url(../images/up-down.png) no-repeat -8px -24px;
	margin-top:13px;
	float:right;
}
.wrapper-dropdown-4 .dropdown-menu2 li:first-child a{
	border-top:none;
}
.wrapper-dropdown-4 .dropdown-menu2{
	min-width:160px;
}
.wrapper-dropdown-4 .dropdown-menu2 li a {
    display: block;
    text-decoration: none;
    color:#5A5A5A;
    font-size:12px;
    background:#FFF;
    border:none;
    border-top:1px solid #F0F0F0;
    padding:8px;
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    border-radius:0;
}
.wrapper-dropdown-4 .dropdown-menu2 li a i {
	display:inline-block;
}
/* Hover state */
.wrapper-dropdown-4 li:hover a {
    color: #FFF;
    background:#B8C9F1;
}
/* Active state */
.wrapper-dropdown-4.open i.dropdown-icon{
    background-position:-8px -4px;
}
/*-----------------------------
        MAIN CONTENT
------------------------------*/
.col-md-6.col_1_of_2.span_1_of_2 {
    margin-bottom: 0.6em;
}
.main-content {
    margin-left: 200px;
    background:#F8F8F8;
    min-height: 1000px;
}
.main-content2{
	min-height: 1250px !important;
}
.main-content5{
	min-height: 1030px !important;
}
.main-content6{
	min-height: 1700px !important;
}
.main-content3{
	min-height:2580px !important;
}
.main-content4{
	min-height: 2275px !important;
}
/*-- switches1 --*/
.switches1 {
    margin:2.3em 1em 0;
}
/*-- //switches1 --*/
/*-- switches --*/
.widget3 {
    margin-bottom: 1em;
}
.widget3 {
    padding: 0 2em;
}
.widget4 {
    padding: 0 2em;
}
.widget4 p{
	font-size:1.3em;
	background:#999;
	padding:1.5em 0;
	text-align:center;
	color:#fff;
	margin:0;
}
.widgt5{
	padding:0 1em !important;
}

.switches {
    margin:1.5em 0 0;
}
.r3_counter_box1 {
  min-height: 100px;
  background: #ffffff;
}
.r3_counter_box1.for {
  min-height: 100px;
  border: 2px solid #EAEAEA;
  padding: 15px;
  border-radius:6px;
  margin:0;
}
.icon-rounded1{
	background-color: #b8c9f1 !important;
}
i.pull-left.fa.fa-bolt.icon-rounded {
    background: #bdc3c7;
    font-size: 33px;
}
.r3_counter_box1.for .stats span {
    font-weight: 400 !important;
    padding-left: 0.5em !important;
    font-size: 18px !important;
}
.r3_counter_box1.for h5 {
    font-size: 40px;
}
.stats {
	overflow: hidden;
    border-top: 1px solid #DDD;
    background: #f9f9f9;
    padding: 1.5em;
}
.grow{
	position: absolute;
    top:47%;
    left:35%;
    background:#8BC34A;
    width: 95px;
    height: 30px;
    padding: .4em 0 0;
}
.grow1 {
    background: #00BCD4;
}
.grow2 {
    background:#FFCA28;
}
.grow3 {
    background: #F44336;
}
.grow1,.grow3,.grow2 {
    left: 36%;
}
.switch-right-grid h3{
	color:#000;
	margin:0;
	font-size:1em;
}
.switch-right-grid ul{
	padding:2em 0 1em;
}
canvas#line{
    background-color:#fff !important;
	-ms-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
}
canvas#bar{
    background-color:#fff !important;
	-ms-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
}
canvas.overlay {
    -ms-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.2);
}
.switch-right-grid{
	-ms-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
    -o-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
	background:#fff;
}
.switch-right {
    padding: 0;
    width:32.33%;
    margin-right: 1.5%;
}
.switch-right:nth-child(3) {
	margin-right:0%;
}
.switch-right-grid1{
	padding:2em 2em 0;
}
.switch-right-grid ul li{
	list-style-type:none;
	color:#777;
	margin:0 0 .5em;
	font-size:14px;
}
.switch-right-grid ul li span{
	
}
.switch-right-grid p{
	color:#999;
	font-size:13px;
	margin:.3em 0 0;
}
.grow p{
    color: #fff;
    margin: 0;
    font-size: 11px;
    text-transform: uppercase;
}
.spar-10 {
    margin-top: 2em;
}
.r3_counter_box1 .fa {
  margin-right: 0px;
  width: 66px;
  height: 66px;
  text-align: center;
  line-height: 65px;
}
.stats span{
	color:#999;
	font-size:15px;
}
.fa.pull-left {
  margin-right: 10% !important;
}
.icon-rounded{
  background-color:#a88add;
  color: #ffffff;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -o-border-radius: 3px;
  -ms-border-radius: 3px;
  font-size: 25px;
}
.r3_counter_box1.stats {
  padding-left: 85px;
}
.r3_counter_box1 h5 {
  margin: 10px 0 5px 0;
  color:#000;
  font-weight:600;
  font-size: 25px;
}
.r3_counter_box2 h5 {
  margin: 23px 0 5px 0;
}
i.user1{
	background:#27cce4;
}
i.user2{
	background:#b8c9f1;
}
i.dollar1{
	background:#bdc3c7;;
}
.widget1 {
  margin-right: 1.5%;
}
.dollar6.icon-rounded {
    color: #bdc3c7;
    background: #fff;
}
i.pull-left.fa.fa-money.icon-rounded {
    background: #27cce4;
}
tspan {
    font-weight: 700;
}
.spark {
    margin: 1em 0;
}
i.fa.fa-search {
    color: #27cce4;
}
i.fa.fa-search1 {
    color: #fff;
	line-height:1.5;
}
/*-- switches --*/
.span_3{
  padding:0;
}
.col_1{
	margin:1em 0 2em;
}
.one{
	width:150px;
}
.profile_img1 {
  float: left;
  margin-right: 10px;
  width: 83%;
  margin-bottom:2em;
}
.user-name1 {
  float:left;
}
.user-name1 p {
  font-size: 13px;
  color: #65cea7;
  line-height: 1em;
}
.tiles_info{
  color: #fff!important;
}
a.tiles_info:hover{
  text-decoration:none;
}
a.tiles_info, a.shortcut-tiles {
  background: 0 0;
}
.tiles-body{
	text-align:center;
}
.tiles_info, .shortcut-tiles {
  display: block;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -o-border-radius: 3px;
}
.red1{
  background: #A88ADD;
}
.tiles_info .tiles-head {
  letter-spacing: normal;
  padding: 10px 10px;
  font-weight: 500;
  box-shadow: inset 0 -50px 0 0 rgba(255,255,255,.1);
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  text-transform: uppercase;
  text-align: center;
  font-size:0.85em;
}
.red{
  background: #A88ADD;
}
.tiles_info .tiles-body-alt, .info-tiles .tiles-body {
  padding: 15px;
  font-weight: 300;
}
.tiles_info .tiles-body {
    font-size: 32px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
    padding: 19px 15px;
}
.tiles_info .tiles-body-alt .text-center, .info-tiles .tiles-body .text-center {
  margin-top: -5px;
}
.tiles_info.tiles_blue1 .tiles-body {
  background: #9358ac;
}
.tiles_blue1{
  background: #27CCE4;
}
.blue1{
  background: #27CCE4;
}
.fb1{
   background: #B8C9F1;
}
.fb2{
	background: #b8c9f1;
}
.tw1{
  background: #BDC3C7;
}
.tw2{
  background: #bdc3c7;
}
.content_bottom{
	margin-bottom:1em;
}
.grid-date {
  background:#A88ADD;
  padding: 1.5em;
}
p.date-in {
  float: left;
  font-size: 1.2em;
  color: #fff;
}
span.date-on {
  float: right;
  font-size: 1.2em;
  color: #fff;
}
.grid-date h4 {
  color: #fff;
  font-size: 3.5em;
  text-align: center;
  padding: 48px 0 15px 0;
}
.grid-date h4 i {
  display: inline-block;
  vertical-align: middle;
}
p.monday {
  background: #fff;
  font-size: 1.1em;
  color: #000;
  padding: 1em;
  text-align: center;
}
h4.pull-left{
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  display: block;
}
.copy{
	background:#fff;
	text-align:center;
	padding:1.5em 0;
}
.copy p, .copy_layout p{
	font-size:0.85em;
	color:#555;
}
.copy p a, .copy_layout p a{
	color:#000;
}
/*-- circular progress --*/
.span_7 {
  padding-left: 0;
}
.span_8{
	text-align:center;
	padding: 0;
	width: 32.33%;
    margin-right: 1.5%;
}
.span_8:nth-child(3){
	margin-right:0%;
}
.activity_box h3 {
    text-align: left;
    padding: 1em;
    margin: 0;
	background: #F44336;
    color: #fff;
	text-transform:uppercase;
	font-size:1em;
	font-weight:600;
}
.activity-desc1{
	padding:0;
}
.activity-row{
	border-bottom:1px solid #999;
}
.activity_box1 h3 {
    background: #00BCD4;
}
.activity_box2 h3 {
    background:#FFCA28;
}
.col_2 {
  background-color: #fff;
  padding: 1em;
  margin-bottom: 1em;
}
.grid-1, .grid-2, .grid-3, .grid-4{
    display: inline-block;
}
.grid-1 {
  margin-bottom: 2em;
}
.grid-1, .grid-3{
	margin-right:10%;
	width: 27%;
}
.activity-row, .activity-row1{
  text-align: left;
}
i.text-info{
  float: left;
  line-height: 60px;
  font-size: 1.2em;
}
i.icon_13{
  color:#a88add;
}
.text-info {
    color: #b8c9f1;
}
.activity-img{
  text-align:center;
}
.activity-img img{
  display:inline-block;
}
.activity-desc h5{
	color:#00BCD4;
    font-size: 1em;
    font-weight: 400;
	margin-bottom: 5px;
}
.activity-desc h5 a{
	color:#00BCD4;
}
.activity-desc h5 a:hover{
	color:#000;
	text-decoration:none;
}
.activity-desc p{
	color:#999;
	font-size:0.85em;
	line-height:1.5em;
}
.activity-img span{
	display: block;
    font-size: 12px;
    margin: .5em 0 0;
    color: #999;
}
.activity-desc-sub,.activity-desc-sub1{
	padding:.7em;
	background:#E7E7E7;
	position:relative;
}
.activity-desc-sub1{
	text-align: right;
}
.activity-img1{
	padding:0 !important;
	width: 25%;
}
.activity-img2{
	padding:0 !important;
}
.activity-desc-sub:before{
	left: -14%;
    top: 20%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(213, 242, 239, 0);
    border-right-color:#E7E7E7;
    border-width: 8px;
    margin-top: -5px;
}
.activity-row1{
	border-bottom:none !important;
}
.activity_box form{
	padding:0 2em;
}
.activity_box input[type="text"]{
	outline: none;
    border: 1px solid #DBDBDB;
    padding: 10px;
    color: #999;
    font-size: 13px;
    width: 70%;
    background: #EFEFEF;
}
.activity_box input[type="submit"]{
	outline: none;
    width: 20%;
    font-size: 1em;
    color: #fff;
    background:#C4C4C4;
    border: none;
    padding: 8px 0;
    margin-left: 0.5em;
}
.activity_box input[type="submit"]:hover{
	background:#999;
}
.activity-desc-sub1:after{
	right:-6%;
    top: 20%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(213, 242, 239, 0);
    border-left-color:#E7E7E7;
    border-width: 8px;
    margin-top: -5px;
}
.activity-desc-sub h5,.activity-desc-sub1 h5{
	font-size:14px;
	color:#000;
	margin:0 0 .5em;
}
.activity-desc-sub p,.activity-desc-sub1 p{
	font-size:13px;
	color:#999;
	margin:0;
	line-height:1.8em;
}
.activity-desc1 h6{
  color:#BDBDBD;
  font-size:13px;
  margin: 1em 0 0 0;
}
.activity-row{
	margin-bottom: 1.5em;
    padding-bottom:1.5em;
	border-bottom: 1px solid #EEE;
}
.scrollbar{
	height:380px;
	background:#fff;
	overflow-y: scroll;
    padding:2em 1em 0;
}
.scrollbar1 {
    height: 436px;
}
.single-bottom ul {
    padding: 0;
}
.single-bottom ul li{
	list-style:none;
	padding:0px 20px 18px;
}
.single-bottom ul li input[type="checkbox"] {
  display: none;
}
.single-bottom ul li input[type="checkbox"]+label {
    position: relative;
    padding-left: 31px;
    border: none;
    outline: none;
    font-size:14px;
    color: #9a9a9a;
	cursor: pointer;
}
.single-bottom ul li input[type="checkbox"]+label span:first-child {
	width: 17px;
    height: 17px;
    display: inline-block;
    border:2px solid #C8C8C8;
    position: absolute;
    left: 0;
    bottom: 4px;
}
.single-bottom ul li input[type="checkbox"]:checked+label span:first-child:before {
	content: "";
    background: url(../images/2.png)no-repeat;
    position: absolute;
    left: 1px;
    top: 2px;
    font-size: 10px;
    width: 10px;
    height: 10px;
}
.activity_box{
  background: #fff;
  min-height: 485px;
}
.icon_11{
  color: #27cce4;
}
.icon_12{
  color:#bdc3c7;
}
#style-2::-webkit-scrollbar-track
{
	
	background-color:#f0f0f0;
}

#style-2::-webkit-scrollbar
{
	width:5px;
	background-color: #f5f5f5;
}

#style-2::-webkit-scrollbar-thumb
{
	
	background-color:#00ACED;
}
/*-- spark --*/
.spark-left {
    padding-left: 0;
}
.spark-right {
    padding: 0;
}
text.highcharts-yaxis-title {
    font-size: 1.5em;
    font-weight: 600;
    color: #000 ! important;
}
.spar-bottom {
    margin: 1em 0;
}
.spar-left {
    padding-left: 0;
}
.spar-right {
    padding: 0;
}
/*-- spark --*/
/*-- General stats --*/
.stats-info{
  background-color: #fff;
}
.panel .panel-heading {
  padding: 20px;
  overflow: hidden;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border: 0!important;
  height: 55px;
  font-size: 14px;
  font-weight: 600;
}
.panel .panel-heading .panel-title {
  font-size: 14px;
  float: left;
  margin: 0;
  padding: 0;
  font-weight: 600;
}
h4.asd label {
    font-size: 1em;
    padding-left: 1em;
    color: #000;
	cursor: pointer;
}
.panel-heading {
  padding:32px 2em 0px;
  border-top-left-radius:0 !important;
  border-top-right-radius: 0 !important;
}
.stats-info ul {
  margin: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.stats-info ul li {
  border-bottom: 1px solid #eee;
  padding:14.35px 0;
  font-size: 0.85em;
  color: #999;
}
.panel-title {
  font-size: 20px;
  color: #000;
}
.stats-info ul li.last{
	border-bottom:0;
	padding-bottom:4px;
}
.text-success {
  color:#00ACED;
}
.text-danger {
  color: #f25656;
}
/*-- col_3 --*/
.widget{
	padding:0;
}
.col-md-3.widget.widget1 {
  width: 23.5%;
}
.r3_counter_box {
  min-height: 100px;
  background: #ffffff;
  text-align: center;
  position: relative;
}
.r3_counter_box .fa {
	margin-right: 0px;
    width: 66px;
    height: 130px;
    text-align: center;
    line-height: 105px;
    font-size: 3.5em;
}
.r3_counter_box .fa-mail-forward{
	color:#8BC34A;
}
.r3_counter_box .fa-users {
	color:#00BCD4;
}
.r3_counter_box .fa-usd {
	color:#FFCA28;
}
.r3_counter_box .fa-eye {
	color:#F44336;
}
.stats span{
	color:#999;
	font-size:14px;
}
.fa.pull-left {
  margin-right: 10% !important;
}
.pull-left1 {
    margin: 5.3% 5% 0 5.3% !important;
}
.icon-rounded{
  background-color:#a88add;
  color: #ffffff;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -o-border-radius: 3px;
  -ms-border-radius: 3px;
  font-size: 25px;
}
.r3_counter_box.stats {
  padding-left: 85px;
}
.r3_counter_box h5 {
	margin:10px 0;
    color: #575757;
    font-size: 2.5em;
}
i.user1{
	background:#27cce4;
}
i.user2{
	background:#b8c9f1;
}
i.dollar1{
	background:#bdc3c7;;
}
.widget1 {
  margin-right: 1.5%;
}
.widget{}
.world-map {
  width: 64%;
  float: left;
  background: #4597a8;
  position: relative;
  padding: 2em 2em 0 2em;
}
.world-map h3 {
  float: left;
  font-size: 1.9em;
  color: #fff;
  font-weight: 600;
  padding: 0em 0 0.5em 0;
}
.world-map p {
  float: right;
  font-size: 1.3em;
  color: #fff;
  font-weight: 300;
  padding: 0.5em 0 0.5em 0;
}
/*-- map --*/
#vmap {
  background-color: #fff !important;
}
.col_4, .col_5{
	padding-left:0;
}
.map_container,.bs-example5,.panel_2,.content-box-wrapper,.grid_1,.grid_3,.no-padding,.bs-example4,.panel-body1,.editor,.banner-bottom-video-grid-left, #chart,.online,.widget_middle_left_slider,.grd_tble, .span_6, .col_2, .weather_list, .cal1, .skills-info, .stats-info, .r3_counter_box, .activity_box, .bs-example1, .cloud, .copy{
  -ms-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
}
.com-mail input[type="submit"]{
	border: none;
    background-color:#8BC34A;
    color: #fff;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    border-radius: 4px;
    outline: none;
    padding: 8.5px 12px;
    -webkit-appearance: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
}
.com-mail input[type="submit"]:hover{
	background: #F44336;
}
.panel-body-com-m{
	padding:2em !important;
}
.input-group-ind{
	margin: 0em auto !important;
    width:100% !important;
    float: none !important;
}
.span_11 {
  margin-bottom: 1em;
}
/*-- graphs --*/
canvas#doughnut, canvas#line, canvas#polarArea, #bar, #pie, #radar{
  background-color: rgb(255, 255, 255);
}
.graph_box{
	margin-bottom:1.5em;
}
.legend {
    float: left;
    font-size: 12px;
    border: 1px solid #E6E6E6;
    padding: 10px;
    width: 176px;
    margin: 7em 0 0 6em;
}
.legend div {
	margin:3px 0;
}
.legend span {
	float:right;
	padding-left:.5em;
}
#os-Win-lbl {
    border-left:#8BC34A solid 1em;
    padding-left: .5em;
	font-size: 1em;
    color: #777F8C;
}
#os-Mac-lbl {
    border-left:#EF553A solid 1em;
    padding-left: .5em;
	font-size: 1em;
    color: #777F8C;
}
#os-Other-lbl {
    border-left:#00ACED solid 1em;
    padding-left: .5em;
	font-size: 1em;
    color: #777F8C;
}
.grid_1{
	background:#fff;
}
.grid_2{
	padding:0 12px;
}
.line-bottom-grid{
	padding:1.5em 0 0;
}
.grid_1 h4 {
  text-align: center;
  font-size: 1.5em;
  color: #000;
  font-weight: 300;
  padding:1em 0;
}
/* --  grids  -- */
.form-control1, .form-control_2.input-sm{
  border: 1px solid #e0e0e0;
  padding:5px 18px;
  color: #616161;
  background: #fff;
  box-shadow: none !important;
  width: 100%;
  font-size: 0.85em;
  font-weight: 300;
  height: 40px;
  border-radius: 0;
  -webkit-appearance: none;
  outline:none;
}
.control3{
	margin:0 0 1em 0;
}
.btn-warning {
  color: #fff;
  background-color:rgb(6, 217, 149);
  border-color:rgb(6, 217, 149);
  padding:8.5px 12px;
}
.tag_01{
  margin-right:5px;
}
.tag_02{
  margin-right:3px;
}
.btn-warning:hover{
  background-color:rgb(3, 197, 135);
  border-color:rgb(3, 197, 135);
}
.btn-success:hover{
    border-color: #8BC34A !important;
    background: #8BC34A !important;
}
.control2{
  height:253px;
}
.alert-info {
  color: #31708f;
  background-color:rgb(240, 253, 249);
  border-color:rgb(201, 247, 232);
}
.bs-example4 {
  background: #fff;
  padding: 2em;
}
button.note-color-btn {
  width: 20px !important;
  height: 20px !important;
  border: none !important;
}
.form-control1:focus {
  border: 1px solid #03a9f4;
  background: #fff;
  box-shadow: none;
}
.show-grid [class^=col-] {
  background: #fff;
  text-align: center;
  margin-bottom: 10px;
  line-height: 2em;
  border: 10px solid #f0f0f0;
}
.show-grid [class*="col-"]:hover {
  background: #e0e0e0;
}
.grid_3{
	margin-bottom:2em;
}
.xs h3, .widget_head{
	color:#000;
	font-size:1.7em;
	font-weight:300;
	margin-bottom: 1em;
}
.grid_3 p{
  color: #999;
  font-size: 0.85em;
  margin-bottom: 1em;
  font-weight: 300;
}
/*-- Typography --*/
.grid_4{
	background:#fff;
	padding:2em 2em 1em 2em;
}
.label {
  font-weight: 300 !important;
  border-radius:4px;
}  
.grid_5{
	background:#fff;
	padding:2em;
}
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
  border-top: none !important;
}
.tab-content > .active {
  display: block;
  visibility: visible;
}
.progress {
  height: 8px;
  box-shadow: none;
}
.progress {
    overflow: hidden;
    height: 16px;
	margin-bottom: 10px;
	background-color: #eeeeee;
	border-radius: 2px;
	-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #ffffff;
  text-align: center;
  background-color: #03a9f4;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-bar {
  box-shadow: none;
}
.progress-bar-primary {
  background-color: #03a9f4;
}
.progress-bar-info {
  background-color: #00bcd4;
}
.progress-bar-success {
  background-color:#b8c9f1;
}
.progress-bar-warning {
  background-color: #ffc107;
}
.progress-bar-danger {
  background-color: #e51c23;
}
.progress-bar-inverse {
  background-color: #757575;
}
.page_1{
	
}
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
  background-color: rgb(139, 195, 74) !important;
    border-color: rgb(139, 195, 74) !important;
}
.breadcrumb li{
	font-size:0.85em;
}
.breadcrumb li a{
	color:rgb(15, 176, 238);
}
span.badge1 {
	background-color: #777;
}
.badge-primary {
  background-color: #03a9f4 !important;
}
.badge-success {
  background-color: #8bc34a !important;
}
.badge-warning {
  background-color: #ffc107 !important;
}
.badge-danger {
  background-color: #e51c23 !important;
}
.tab-container .tab-content {
  border-radius: 0 2px 2px 2px;
  border: 1px solid #e0e0e0;
  padding: 16px;
  background-color: #ffffff;
}
.nav-tabs {
  margin-bottom: 1em;
}
.well {
  padding: 9px;
  font-size: 0.85em;
  color: #555;
  line-height: 1.8em;
}
.bs-example-modal {
  background-color: #fff !important;
  border-color:#fff !important;
}
.modal {
  overflow-y:auto !important;
}
.but_list h1,.but_list h2,.but_list h3,.but_list h4,.but_list h5 {
    margin-bottom: 0.7em;
}
.btn-primary{
	background-color: #00ACED !important;
    border-color: #00ACED !important;
	color: #fff;
	padding: 6px 10px;
}
.btn-primary:hover{
	background-color: #8BC34A !important;
    border-color: #8BC34A !important;
    color: #fff !important;
}
.caret {
    padding-left: 0 !important;
}
h2.modal-title {
  font-size: 1.3em;
  color:#999;
  font-weight: 300;
}
.modal-content {
  -ms-box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
  -o-box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);
  border: 0px solid #e0e0e0;
}
.modal-body h2{
  color:#555;
  font-size:1.5em;
  font-weight:300;
}
.modal-body p{
  color: #888;
  font-size: 0.85em;
  font-weight: 300;
  line-height: 1.8em;
}
.modal-body p img{
	margin:1em 0;
}
.form-horizontal .control-label {
  text-align: right;
  color: #000;
  font-weight: 300;
  font-size: 0.85em;
}
.checkbox-inline1{
  position: relative;
  display:block;
  margin-bottom: 0;
  font-weight: 400;
  vertical-align: middle;
  cursor: pointer;
}
.help-block {
  color: #999;
  font-size: 0.85em;
}
.radio label, .checkbox label, label{
  font-size: 0.85em;
  font-weight:300;
  vertical-align: middle;
}
.checkbox1{
  font-size: 0.85em;
  font-weight: 300;
}
select[multiple] {
  padding: 7px 9px !important;
}
.has-success .form-control1{
  background-color: #f1f8e9;
  border-color: #c5e1a5 !important;
}
.has-error .form-control1{
  background-color: #fde0dc;
  border-color: #f69988 !important;
}
.input-icon.right > i, .input-icon.right .icon {
  right:12px;
  float: right;
}
.input-icon > i, .input-icon .icon {
  position: absolute;
  display: block;
  margin: 10px 8px;
  line-height: 14px;
  color: #999;
}
.has-success .help-block, .has-success .control-label, .has-success .radio, .has-success .checkbox, .has-success .radio-inline, .has-success .checkbox-inline, .has-success.radio label, .has-success.checkbox label, .has-success.radio-inline label, .has-success.checkbox-inline label {
  color: #7cb342;
}
.has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline, .has-error.radio label, .has-error.checkbox label, .has-error.radio-inline label, .has-error.checkbox-inline label {
  color: #dd191d;
}
/* -- validation --*/
.well1{
	background:#fff;
	padding:2em;
}
/*-- Basic_tables --*/
.bs-example1{
  background:#fff;
  padding:2em;
}
.panel-body1{
  background: #fff;
  padding:2em;
  margin: 2em 0 0 0;
}
.panel-warning {
  margin-top: 2em;
}
.panel.panel-midnightblue {
  border-color: #263238;
}
.panel.panel-midnightblue .panel-heading {
  color: #eceff1;
  background-color: #37474f;
  border-color: #263238;
}
.panel.panel-warning {
  border-color: #fdd835;
}
.panel.panel-warning .panel-heading {
	color: #fff;
    background-color: #F44336;
    border-color: #F44336;
}
.panel .panel-heading .panel-ctrls {
  margin-right: -8px;
}
.panel .panel-heading .panel-ctrls {
  width: auto;
  float: right;
  padding: 0;
  margin: 0;
  line-height: 0;
}
.panel .panel-heading h2 {
  font-size: 14px;
  font-weight: 700;
  margin: 0;
  text-transform: uppercase;
}
/*-- inbox --*/
.mail-header {
  padding: 15px;
}
.mail-title {
  font-size: 20px;
  line-height: 32px;
  display: block;
  float: left;
  height: 34px;
  margin: 0 10px 0 0;
}
.btn-group, .btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.float-right, .pull-right {
  float: right!important;
}
.pad0A {
  padding: 0!important;
}
.input-group {
	position: relative;
    display: table;
    width: 45%;
    float: left;
    margin: 0 0 0 10em;
    border-collapse: separate;
}
.has-success .input-group-addon {
  border-color:#A4E7A5 !important;
}
.has-feedback label~.form-control-feedback {
  top: 28px !important;
}
div[id^=uniform-] input {
  position: absolute;
  top: 0;
  left: 0;
  display: -moz-inline-box;
  display: inline-block;
  zoom: 1;
  opacity: 0;
  border: none;
  background: 0 0;
  filter: alpha(opacity=0);
  -moz-opacity: 0;
}
.email-list1{
  padding: 0; 
}
ul.collection {
  margin: 0;
  list-style: none;
  background:#fff;
  padding:2em;
}
ul.collection li{
	margin-bottom:2em;
}
ul.collection li.email_last{
	margin-bottom:0;
}
#email-list .collection .collection-item.avatar {
  height: auto;
  
  position: relative;
}
#email-list .collection .collection-item.avatar .icon {
  position: absolute;
  width: 42px;
  height: 42px;
  overflow: hidden;
  left: 15px;
  display: inline-block;
  text-align: center;
  vertical-align: middle;
  top: 20px;
}
.email-unread a{
	text-decoration:none;
}
.email-unread a span.email-title {
  font-weight: 500;
  color: #000;
}
.ultra-small {
  font-size: 0.8rem;
  margin: 0;
  padding: 0;
  color: #999;
}
span.badge {
	font-size: 11px;
    font-weight: bold;
    color: #FFF;
    background:#8BC34A;
    line-height: 15px;
    width: 20px;
    height: 20px;
    border-radius: 2em;
    -webkit-border-radius: 2em;
    -moz-border-radius: 2em;
    -o-border-radius: 2em;
    text-align: center;
    display: inline-block;
    position: absolute;
    top: -3px;
    right: -10px;
	padding: 2px 0 0;
}
span.blue{
	background-color:#00aced;
}
span.red{
	background-color:#ef553a;
}
span.blue1{
	background-color:#9358ac;
}
i.icon_1{
  float: left;
  color: #00aced;
  line-height: 2em;
  margin-right: 1em;
}
i.icon_2{
  float: left;
  color:#ef553a;
  line-height: 2em;
  margin-right: 1em;
  font-size: 20px;
}
i.icon_3{
  float: left;
  color:#9358ac;
  line-height: 2em;
  margin-right: 1em;
  font-size: 20px;
}
.avatar_left {
  float: left;
}
i.icon_4{
  width: 45px;
  height: 45px;
  background: #F44336;
  float: left;
  color: #fff;
  text-align: center;
  font-size: 1.5em;
  line-height: 44px;
  font-style: normal;
  margin-right: 1em;
}
i.icon_5{
  background-color: #3949ab;
}
i.icon_6{
  background-color: #03a9f4;
}
.blue-text {
  color: #2196F3 !important;
  float:right;
}
.content-box-wrapper{
	background:#fff;
	padding:2em;
	margin:1.5em 0 0;
}
.status-badge {
  position: relative;
  display: inline-block;
}
.mrg10A {
  margin:10px 18px !important;
}
.small-badge {
  overflow: hidden;
  width: 12px;
  height: 12px;
  padding: 0;
  border: 2px solid #fff!important;
  border-radius: 20px;
  background-color: red;
}
.status-badge .small-badge {
  position: absolute;
  right: 1px;
  bottom: 1px;
}
.badge-danger{
  color: #fff;
  border-color: #e73629;
  background: #F44336;
}
.badge-success{
  color: #fff;
  border-color: #3fa243;
  background: #4CAF50;
}
.bg-green1{
  color: #fff;
  border-color: #3fa243;
  background: #4CAF50;
}
h4.content-box-header{
  color: #000; 
  font-size: 1.3em; 
  font-weight: 300; 
  margin-bottom: 1em; 
  text-align:left;
}
.editor{
  background:#fff;
  padding: 1em 2em 2.5em 2em;
}
.icon-ser{
	color:#fff !important;
}
.mailbox-content, .request{
	margin:1.5em 0em 0em;
}
.mailbox-content, .request,ul.collection,.Compose-Message {
    -ms-box-shadow: 0 0px 3px 1px rgba(0, 0, 0, 0.2);
    -o-box-shadow: 0 0px 3px 1px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 0px 3px 1px rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: 0 0px 3px 1px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 3px 0px rgba(0, 0, 0, 0.2);
}
.inbox_right {
    background:#F8F8F8;
    padding-left: 1.5em;
}
.fo-rm {
    margin-bottom: 1em;
}
.map {
    margin: 2em 0;
}
.form-horizontal .form-group {
    margin-right: 0 !important;
    margin-left: 0 !important;
}
.btn-block {
    display: block !important;
    width: 80% !important;
    margin: 0 auto !important;
}
.mailbox-content h2,.request h2{
	text-align: center;
    color:#fff;
    font-size: 1.5em;
    margin: 0;
    background: #b8c9f1;
    padding: 0.7em 0;
    text-transform: uppercase;
    border-radius:3px 3px 0px 0px;
	-webkit-border-radius:3px 3px 0px 0px;
	-moz-border-radius:3px 3px 0px 0px;
	-o-border-radius:3px 3px 0px 0px;
	-ms-border-radius:3px 3px 0px 0px;
}
.panel {
    border: none !important; 
    border-radius:none !important;
    -webkit-box-shadow: none !important;
     box-shadow:none !important; 
}
.widget-footer.clearfix {
  margin: 1em 0 0 0;
}
div.selector, div.selector span, div.checker span, div.radio span, div.uploader, div.uploader span.action, div.button, div.button span {
  background: #fff;
  background-repeat: no-repeat;
  -webkit-font-smoothing: antialiased;
  border: 1px solid #CDCDCD;
}
div.checker, div.checker span, div.checker input {
  width: 19px;
  height: 19px;
}
div.checker span {
  display: -moz-inline-box;
  display: inline-block;
  zoom: 1;
  text-align: center;
  background-position: 0 -260px;
}
div.checker input {
  opacity: 0;
  filter: alpha(opacity=0);
  -moz-opacity: 0;
  border: none;
  background: none;
  display: -moz-inline-box;
  display: inline-block;
  zoom: 1;
}
.m-r-sm {
  margin-right: 15px;
  font-weight:400;
  font-size: 14px;
}
.form-control:focus {
    border-color:#ccc;
    outline: 0;
    -webkit-box-shadow:none ! important;
    box-shadow:none ! important;
}
.icon-state-warning {
  color:#b8c9f1;
}
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
  font-size: 0.85em;
  color:#000;
} 
.mailbox-content table tbody tr:hover {
  background: #EFF0F4;
}
.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
  padding:15px !important;
}
.table > thead > tr > th {
  border-bottom:1px solid #ACACAC !important;
}
.badge-success, .bg-green, .bootstrap-switch-success, .btn-success {
	border: none;
    background:#27cce4;
    padding: 9.5px 12px;
	outline:none;
}
.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open .dropdown-toggle.btn-success {
  color: #fff;
  background-color:#b8c9f1;
  border-color:#b8c9f1;
  outline:none;
}
.btn-toolbar {
  margin-left: 0 !important;
}
.note-editor {
  border: 1px solid #DCE1E4;
  border-radius: 0;
}
.note-editor .note-toolbar {
  border-bottom: 0;
  background: #fff;
  padding: 10px;
}
.note-editor .note-editable {
  padding: 10px 15px 15px;
  overflow: auto;
  outline: 0;
}
.note-editor .note-statusbar .note-resizebar {
  border: 0;
}
.note-editor .note-statusbar .note-resizebar {
  width: 100%;
  height: 8px;
  cursor: ns-resize;
  border-top: 1px solid #a9a9a9;
}
.col-md-8.inbox_right {
  padding-right: 0;
}
.editor1 {
  margin: 2em 0 0 0;
}
.mail-toolbar.clearfix {
	padding: 2.55em 1em;
    background: #fff;
    border-bottom: 1px solid #DBDBDB;
}
.table-fhr{
	background:#fff;
	margin-bottom: 0.5em;
}
.compose-message {
  overflow: hidden;
  padding: 0 0 10px;
}
.note-editor .note-statusbar {
  background: 0 0;
}
.note-editor .note-statusbar .note-resizebar {
  border: 0;
}
.note-editor .note-statusbar .note-resizebar {
  width: 100%;
  height: 8px;
  cursor: ns-resize;
}
.note-editor .note-statusbar .note-resizebar .note-icon-bar {
  width: 20px;
  margin: 1px auto;
  border-top: 1px solid #a9a9a9;
}
.note-editor {
  border: 1px solid #DCE1E4;
  border-radius: 0;
}
.note-editor .note-codable {
  display: none;
  width: 100%;
  padding: 10px;
  margin-bottom: 0;
  font-size: 14px;
  color: #ccc;
  background-color: #222;
  border: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  box-shadow: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
  resize: none;
}
i.icon_8{
  font-size: 13px;
  color: #555;
}
.btn_1{
	float:left;
}
a.btn.btn-default.mrg5R {
  float: left;
}
.pull-left {
  float: left!important;
  width: 50%;
  cursor: pointer;
}
ul.float-right {
    min-width: 180px;
    left: 31%;
}
.float-left{
  float: left!important;
  width: 15%;
  cursor: pointer;
}
.mrg5R {
  margin-right: 5px!important;
}
.dropdown-menu > li > a {
  font-size:13px;
}
.font-red, .has-error .help-block, .parsley-required, .text-danger {
  color:#F44336 !important;
}
i.icon_9{
  margin-right:10px;
}
.checkbox {
  position: relative;
  top:-3px;
  margin: 0 1rem 0 0;
  cursor: pointer;
}
.checkbox:checked:before {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .55rem;
  border-color: #27cce4;
  border-top-style: none;
  border-right-style: none;
}
blockquote {
  margin: 0 !important;
  border-left: 5px solid #eee;
}
.copy_layout{
  padding:1.5em 0;
  background:#fff;
  text-align:center;
  margin: 4em 0 0em 0;
}
.login{
	background:none;
	padding:0;
	margin:11em 0 0 0;
}
.register{
	margin:2em 0 0 0;
}
/* -- widgets --*/
.bg-info {
  background:#78cd51;
  padding: 3px 8px;
  color: #ffffff;
}
.tile-progress {
  padding: 30px;
  margin-bottom:1em;;
}
.col-sm-3.widget_1_box {
  padding: 0 5px;
}
.col-md-4.widget_1_box1 {
  padding: 0 0px 0 5px;
}
.tile-progress h4 {
  color: #ffffff;
  margin: 0px;
  text-align: center;
  white-space: nowrap;
  font-weight:300;
}
.tile-progress .progress {
  margin: 15px 0 10px 0;
  height: 7px;
  background: rgba(50, 50, 58, 0.5);
}
.progress {
  background: #f5f5f5;
  background-image: none;
  -webkit-box-shadow: inset 0 -1px 2px rgba(150, 150, 150, .1);
  -moz-box-shadow: inset 0 -1px 2px rgba(150, 150, 150, .1);
  box-shadow: inset 0 -1px 2px rgba(150, 150, 150, .1);
  border-radius: 0px;
  -o-border-radius: 0px;
  -ms-border-radius: 0px;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
}
.tile-progress span {
  color: #fff;
  display: block;
  text-align: center;
  margin: 0px;
  font-size: 14px;
  font-weight: 300;
}
.bg-success {
  background:#eae874;
  color: #ffffff;
}
.bg-danger {
  background:rgba(80, 204, 240, 1);
  color: #ffffff;
}
.bg-secondary {
  background:#fabb3d;
  color: #555555;
}
.tile-progress .progress .progress-bar {
  background: #ffffff;
}
.wid-social {
  display: inline-block;
  width: 100%;
  padding: 15px 15px 15px 15px;
  margin: 0px 0 1em 0;
}
.facebook {
  background-color:#3b5998 !important;
  color: #ffffff !important;
}
.icon-xlg {
  font-size: 70px;
}
.social-info h3 {
  display: inline-block;
}
.wid-social .social-info h3, .wid-social .social-info h4 {
  margin: 0px 0 15px 0;
  font-size: 15px;
}
span.percent {
  font-size: 13px;
  font-weight: 300;
}
h3.count.text-light {
  color: #fff;
  font-weight: 300;
  font-size: 40px;
}
.twitter {
  background-color:#00aced !important;
  color: #ffffff !important;
}
.google-plus {
  background-color: #313131 !important;
  color: #ffffff !important;
}
.dribbble {
  background-color:#ea4c89 !important;
  color: #ffffff !important;
}
.linkedin {
  background-color: #007bb5 !important;
  color: #ffffff !important;
}
.youtube {
  background-color: #e02f2f !important;
  color: #ffffff !important;
}
.skype {
  background-color: #00aaf1 !important;
  color: #ffffff !important;
}
.flickr {
  background-color: #ed1983 !important;
  color: #ffffff !important;
}
.coffee-top {
  position: relative;
  text-align: center;
}
.doe {
  position: absolute;
  top: 37%;
  text-align: center;
  width: 100%;
}
.doe h6 {
  color: #fff;
  font-size: 1em;
}
.doe p {
  color: #DC483A;
  font-size: 1em;
}
.coffee-top i {
  position: absolute;
  top: 84%;
  background: url(../images/1.png)no-repeat center;
  width: 80px;
  height: 80px;
  display: block;
  border-radius: 100px;
  left: 39%;
}
.follow {
  padding: 3em 1em 1em;
  background: #fff;
}
.two p {
  font-size: 0.875em;
  color: #2d2d2d;
}
.two span {
  font-size: 1.5em;
  color: #DC483A;
}
.online-top {
  background: #fff;
  padding:30px;
  border-bottom: 1px solid #E1E1E1;
}
.panel-body2 {
  padding: 21px;
}
.widget_1_box2{
	padding:0 5px;
}
.top-at {
  float: left;
  width: 20%;
}
.top-on {
  float: right;
  width: 71%;
  margin-top: 0px;
}
.top-on1 {
  float: left;
}
label.round {
  background:#8BC34A;
  width: 10px;
  height: 10px;
  display: block;
  float: right;
  border-radius: 100px;
  margin-top: 7%;
}
.online-top:hover {
  background:#EFEFEF;
}
.top-on1 span {
  font-size: 0.9em;
  color: #dc483a;
}
.top-on1 p {
  font-size: 1em;
  color: #000;
  font-weight:500;
}
.online-top1{
	border-bottom:none;
}
.widget_5{
	margin:1em 0 0 0;
}
.wid_blog{
	background:rgb(6, 217, 149);
	padding:3em 2em;
}
.wid_blog h1{
  color: #fff;
  font-size: 1.5em;
  line-height: 1.5em;
  font-weight: 300;
  margin-bottom: 0;
}
.wid_blog-desc{
	background:#fff;
	padding:2.6em 2em;
}
.wid_blog-left{
  float: left;
  width: 20%;
  margin-right: 5%;
}
.wid_blog-right{
  float: left;
  width:75%;
}
.wid_blog-right h2{
  color:#000;
  font-size:1.3em;
  font-weight:300;
}
.wid_blog-right p{
  color:#999;
  font-size:0.85em;
  font-weight:300;
  line-height:1.5em;
}
.list-inline {
  margin:1em 0 0 0;
}
.text-muted {
  color: #999999;
}
.text-orange {
  color:#DC483A;
}
.link1{
	padding:5px 8px;
	color:#000;
}
.editor-input.ng-scope p{
	color:#999;
	font-size:0.85em;
	line-height:1.8em;
}
.list-inline>li a{
   font-size:0.85em;	
}
/*-- media --*/
.bs-example5{
   background:#fff;
   padding:2em;
}
.media-heading {
  color: #000;
}
.sidebard-panel .feed-element, .media-body, .sidebard-panel p {
  font-size:14px;
  color:#999;
}
.example_6{
	margin:1.5em 0;
}
.demolayout {
  background:rgb(6, 217, 149);
  width: 60px;
  overflow: hidden;
}
.padding-5 {
  padding: 5px;
}
.demobox {
  background:#f0f0f0;
  color: #333;
  font-size: 13px;
  text-align: center;
  line-height:30px;
  display: block;
}
.padding-l-5 {
  padding-left: 5px;
}
.padding-r-5 {
  padding-right: 5px;
}
.padding-t-5 {
  padding-top: 5px;
}
.padding-b-5 {
  padding-bottom: 5px;
}
code {
  background:rgb(246, 255, 252);
  padding: 2px 2px;
  color: #000;
  border: 1px solid rgb(198, 255, 236);
}
.media_1-left{
  padding-left:0;
}
.table-hover {
    margin-bottom: 0;
}
.media_1-right{
  padding-right:0;
}
.media_box{
	margin-bottom:2em;
}
.media_box1{
	margin-top:2em;
}
.media {
  margin-top:40px !important;
}
.media:first-child {
  margin-top: 0 !important;
}
.panel_2{
	padding:2em 2em 0;
	background:#fff;
}
.panel_3{
	padding-bottom:1px;
}
.panel_2 h3{
	color:#000;
	font-size:1.1em;
}
.panel_2 p{
	color:#555;
	font-size:0.85em;
	margin-bottom:1em;
}
td.head {
  color: #000 !important;
  font-size: 1.2em !important;
}
/*-- login --*/
.login-logo {
  margin: 0;
  text-align: center;
  color: #fff;
  font-size: 18px;
  text-transform: uppercase;
  display: inline-block;
  width: 100%;
  padding: 50px 0;
}
h2.form-heading {
  margin: 0;
  text-align: center;
  color:#000;
  font-size: 18px;
  text-transform: uppercase;
  display: inline-block;
  width: 100%;
}
body#login{
  background: url(../images/bg.jpg)no-repeat;
  background-size:cover;
  -webkit-background-size:cover;
  -moz-background-size:cover;
  -o-background-size:cover;
  -ms-background-size:cover;
  min-height:850px;
}
.app-cam {
  width:22%;
  margin:3em auto auto auto;
}
.app-cam input[type="text"] {
  width: 100%;
  padding: 15px;
  color: #999;
  font-size: 0.85em;
  outline: none;
  font-weight: 300;
  border: none;
  background:#222224;
  margin:0 0 1em 0;
  border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -o-border-radius: 2px;
}
.app-cam input[type="password"] {
  width: 100%;
  padding: 15px;
  color:#999;
  font-size: 0.85em;
  outline: none;
  font-weight: 300;
  border: none;
  background:#222224;
  margin:0 0 1em 0;
  border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -o-border-radius: 2px;
}
.app-cam input[type="submit"], .btn-success1{
  font-size: 14px;
  font-weight: 300 !important;
  color: #fff;
  cursor: pointer;
  outline: none;
  padding: 10px 15px;
  width: 100%;
  border: none;
  background: rgb(6, 217, 149);
  border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -o-border-radius: 2px;
  text-transform: uppercase;
}
.app-cam input[type="submit"]:hover, .btn-success1:hover{
  background:rgb(1, 200, 136);
  color:#fff !important;
}
.login-social-link {
  display: inline-block;
  margin-top: 20px;
  margin-bottom: 15px;
  width: 100%;
}
.login-social-link a {
  color: #fff;
  padding: 13px 38px;
  border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -o-border-radius: 2px;
  width: 46.5%;
  text-align: center;
}
.login-social-link a.facebook {
  background: #3b5999;
  margin-right: 22px;
  float: left;
}
.login-social-link a:hover.facebook{
  background:#2B4886 !important;
  text-decoration:none;
}
.login-social-link a.twitter {
  background: #63c6ff;
  float: left;
}
.login-social-link a:hover.twitter{
  background:#46ACE7 !important;
  text-decoration:none;
}
ul.new {
  margin:2em 0 0 0;
  list-style:none;
  padding:0;
}
ul.new li.new_left{
  float: left;
}
ul.new li.new_left p, p.sign{
  font-weight:300;
} 
p.sign a, ul.new li.new_left p a{
  color:#000;
}
ul.new li.new_right{
  float: right;
}
.app-cam p {
  color:#000;
  font-size: 14px;
  margin: 1em 0;
}
.form-signin a, .registration, .login-body label {
  margin: 1em 0 0 0;
  font-weight: 300;
  font-size: 0.85em;
  text-align:center;
}
.radios input[type="radio"] {
  margin: 4px 0 0 0;
  vertical-align: top;
  cursor: pointer;
  color:#fff;
}
.radios label:first-child {
  margin-left: 0;
}
.radios label{
  margin-left: 15px;
}
div#char {
    height: 300px !important;
}
div#char1 {
    height: 240px !important;
}
.tab {
    background: #fff;
    margin: 0 0 4em;
}
div#container-speed1 {
    margin:0 0.9em !important;
}
div#container-rpm1{
	margin:0 1.07em !important;
}
.lamps_rate{
	background:#fff;
	padding:1em;
	margin:2em 1em 0;
	width: 96%;
}
.lamps_rate ul{
	padding:0;
	margin:0;
}
.lamps_rate ul li{
	font-size:14px;
	color:#999;
	margin:0 0 1em;
	list-style-type:none;
}
.switch-right iframe{
	width:100%;
	min-height:500px;
	margin:2em 0 0;
}
.position-center {
    width: 65%;
    margin: 0 auto;
}
.panel-body {
    padding:1em 2em;
}
button.rew:hover {
	border-color: #ccc !important;
    color: #999 !important;
}
.asd{
	outline:none;
	box-shadow:none;
}
/*-- login-form --*/
.login-form-info {
    width: 55%;
    margin: 0 auto;
    border: 1px solid #A3B4DC;
}
.login-header-left{
	float:left;
	}
.login-header-left h3{
	color: #E1F2ED;
    margin: 0;
    font-size: 1.5em;
	}
.login-header-right{
	float:right;
	}
.login-header-right p{
	color:#7B8BB3;
	margin:0;
	font-size: 15px;
	}
.login-header-right p a {
    color: #fff;
    font-size: 17px;
    text-decoration: underline;
    padding-left: 8px;
}
.login-header-right p a:hover{
	color:#a88add;
	}
.login-form1 {
	padding: 6em 0;
	background:#b8c9f1;
	}
.login-header {
	padding: 2em;
	}
.login-form-info input[type="text"],.login-form-info input[type="password"]{
	outline:none;
	border: 1px solid #f5f5f5;
	font-size:14px;
	padding:15px 10px 15px 45px;
	width:90%;
	margin: 0 auto;
	color:#E8E8E8;
	}
.login-form-info input[type="text"].men{
	background:url(../images/n.png) no-repeat 10px 11px;
	display:block;
	}
.login-form-info input[type="password"].lock{
	background:url(../images/i.png) no-repeat 10px 11px;
	display:block;
	}
.login-form-info input[type="password"]{
	margin:1.5em 0 1.5em 2.3em;
	}
.login-form-info input[type="submit"]{
	outline:none;
	border:1px solid #f5f5f5;
	background:none;
	color:#fff;
	font-size:20px;
	text-align:center;
	width:90%;
	margin-left: 1.6em;
    margin-bottom: 1.5em;
	padding:10px 0;
	transition:.5s all;
	-webkit-transition:.5s all;
	-moz-transition:.5s all;
	-o-transition:.5s all;
	-ms-transition:.5s all;
	}
.login-form-info input[type="submit"]:hover{
	background:#a88add;
	color:#fff;
	border:1px solid #a88add;
	}
.login-form-info p.for{
	margin:0 0 2em;
	text-align:center;
	}
.login-form-info p.for a{
	color:#555;
	font-weight:300;
	font-size:14px;
	font-style: normal;
	}
.login-form-info p.for a:hover{
	text-decoration:none;
	}
.new-people{
	margin:5em 0 0;
	text-align: center;
	}
.new-people h3{
	color: #fff;
    font-size: 1.5em;
    margin: 0;
	}
.new-people p{
	color: #666;
    font-size: 14px;
    margin: .5em 0 3em;
	}
.reg a{
	padding: 10px 30px;
    color: #fff;
    font-size: 16px;
    background: #a88add;
    transition: .5s all;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
	}
.reg a:hover{
	color:#a88add;
	background:#f5f5f5;
	text-decoration:none;
	}
.lgo{
	text-align:center;
	margin: 0 0 2em;
}
.lgo a{
	font-size:2em;
	color:#fff;
	text-decoration:none;
}
/*-- //login-form --*/
/*-- sign-up --*/
.sign-up-form{
	padding:6em 0;
	background:#b8c9f1;
	}
.sign-up{
	width: 60%;
	padding: 2em 1em;
	margin: 0 auto;
	}
.sign-up-form h3{
	color: #EEEEEE;
    font-size: 1.5em;
    margin: 0;
    text-align: center;
	}
.sign-up-form p{
	color:#90A2CC;
	font-size:16px;
	margin:.5em 0 3em;
	text-align:center;
	}
.sign-up1{
	float:left;
	width:27%;
	}
.sign-up1 h4{
	color:#fff;
	margin:1.6em 0 1em;
	font-size:18px;
	}
.sign-up2{
	float:right;
	width:70%;
	}
.sign-up2 input[type="text"],.sign-up2 input[type="password"]{
	outline:none;
	border: 1px solid #eee;
    background: none;
    font-size: 14px;
	padding:10px 10px;
	width:100%;
	margin:1em 0;
	}
.sign-up h5,.sign-up h6{
	margin: 0 0 1em;
    color:#8698C1;
    font-size: 1.5em;
	}
.sign-up h6{
	margin: 2em 0 1em !important;
	}
.sub-login-left{
	float:left;
	width:30%;
}
.sub-login-right{
	float:right;
}
.sub-login{
	margin:5em 0 0;
}
.sub-login-right p{
	font-size: 16px;
    color: #fff;
    margin: 0.8em 0 0;
}
.sub-login-right p a {
    color: #a88add;
    padding-left: 8px;
}
.sub-login-right p a:hover{
	color:#fff;
}
.sub-login-left input[type="submit"]{
	outline: none;
    border: none;
    background: #a88add;
    color: #fff;
    font-size: 16px;
    text-align: center;
    width: 100%;
    padding: 8px 0;
    transition: .5s all;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
	}
.sub-login-left input[type="submit"]:hover{
	background:#fff;
	color:#a88add;
	}
/*-- //sign-up --*/
/*-- blank_page --*/
h1.blank,h3.blank1 {
	font-size:2em;
	color:#999;
	margin:0 0 1em;
}
/*-- //blank_page --*/
/*-- grid_page --*/
.grid_table {
    padding: 0;
}
.grids_bottom{
	padding:0;
	margin:1em 0 0;
}
.grd_tble {
    margin-bottom: 0px;
}
.main-content1 {
    min-height: 1080px !important;
}
/*-- //grid_page --*/
/*-- widget_page --*/
.flexi_bottom {
    background-color: rgb(244, 67, 54);
    padding: 0em 1em;
}
.main-grid1-grids{
	background:url(../images/2.jpg) no-repeat 0px 0px;
	min-height:300px;
	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	-ms-background-size:cover;
	padding:3em 2em 0;
}
.friday{
	text-align:center;
}
.friday h4{
	font-size:3em;
	color:#fff;
	margin:0;
}
.friday-bottom{
	text-align:right;
	margin:3em 0 0;
}
.friday-bottom h5{
	font-size:2em;
	color:#fff;
	margin:0;
}
.friday-bottom p{
	font-size:14px;
	color:#fff;
	margin:0;
}
.friday h4 span{
	display:block;
	font-size:14px;
}
.widget_middle_left,.widget_bottom_left {
    padding-left: 0;
	padding-right: 1.5em;
}
.widget_middle_left:nth-child(3),.widget_bottom_left:nth-child(2){
	padding-right: 0em;
}
.widget_middle {
    margin: 1.5em 0;
}
a.lightbox i{
	margin: 0.5em 0;
    font-size: 2em;
    color: #fff;
    display: block;
}
a.lightbox:hover{
	text-decoration:none;
}
.degree {
	font-size:.5em;
	vertical-align:top;
}
.feets {
    padding: 4em 0;
	background: #F1DE92;
}
 #flexiselDemo3 {
	display: none;
}
.nbs-flexisel-container {
	position: relative;
	max-width: 100%;
}
.nbs-flexisel-ul {
	position: relative;
	width: 9999px;
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	text-align: center;
}
.nbs-flexisel-inner {
	overflow: hidden;
	margin: 0;
    padding: 1.8em 0;
}
.nbs-flexisel-item {
	float: left;
	margin:0px;
	padding:0px;
	cursor: pointer;
	position: relative;
	line-height: 0px;
}
li.nbs-flexisel-item{
border-left:1px solid #fff!important;
}
li.nbs-flexisel-item:nth-child(1){
 border:none!important;
}
.nbs-flexisel-item > img {
	cursor: pointer;
	position: relative;
	margin-top:10px;
	margin-bottom: 10px;
	max-width:250px;
	max-height:500px;
	
}
.grid-flex{
	margin:10px 0 20px 0;
}
.nbs-flexisel-item > img {
	cursor: pointer;
	positon: relative;
}
.biseller-info {
	margin:1em 0 0 0; 
}
/*** Navigation ***/
.nbs-flexisel-nav-left, .nbs-flexisel-nav-right {
    width: 20px;
    height:25px;
    position: absolute;
    cursor: pointer;
    z-index: 100;
    margin-top:2em;
}
.nbs-flexisel-nav-left {
    right: 0;
    background: none;
}
.nbs-flexisel-nav-right {
 left: 0;
  background: none;
}
li.nbs-flexisel-item {
 width:370px;
}
.biseller-column  p {
    font-size: 1em;
    color: #fff;
    margin: 0;
    text-align:center;
}
.panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
    color:#000;
    text-decoration: none;
}
.panel-title {
    font-size: 1.1em;
}
.panel-default > .panel-heading {
    background: #EFEFEF;
    border: none;
	cursor: pointer;
}
.panel-default {
    border: none;
}
.panel-group .panel-heading + .panel-collapse > .panel-body, .panel-group .panel-heading + .panel-collapse > .list-group {
    border: none;
}
.asd {
    padding: 1em 0;
	text-transform:capitalize;
}
.panel_text {
    font-size: 14px;
    color: #999;
    line-height: 1.8em;
}
.panel{
	box-shadow:none;
}
.pa_italic span{
	display:none;
}
.pa_italic i{
	left: -1em;
}
.collapsed span{
	display: inline-block;
    left: -1em;
}
.collapsed i{
	display:none;
}
.panel_text {
    background:#fff;
}
/*-- //widget_page --*/
/*-- forms --*/
.input-group1{
	float:none;
	width:100% !important;
	margin:0 !important;
}
/*-- //forms --*/
/*-- typo --*/
span.badge1 {
    min-width: 3rem;
    padding: 2px 9px;
    text-align: center;
    font-size: 0.85;
    line-height: inherit;
    color: #fff;
    position: absolute;
    right: 38px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border-radius: 2px;
}
/*-- //typo --*/
/*-- sign-in --*/
.sign-in-up{
	background:#f9f9f9 !important;
	min-height: 830px;
}
.sign-in-form{
	margin:2em auto 4em;
	width:35%;
}
.sign-in-wrapper{
	background:#f9f9f9;
}
.new_people{
	padding:3em 0 0;
	text-align:center;
}
.new_people h4{
	font-size:2em;
	color:#00ACED;
	margin:0;
}
.new_people p{
	color:#999;
	margin:1em 0 2em;
	font-size:14px;
	line-height:1.8em;
}
.new_people a{
	padding:12px 30px;
	border:1px solid #00ACED;
	color:#00ACED;
	text-decoration:none;
	font-size:1em;
}
.new_people a:hover{
	color:#F44336;
	border:1px solid #F44336;
}
.sign-in-form-top{
	background:url(../images/3.jpg) no-repeat 0px -55px;
	display:block;
	min-height:150px;
	padding:3em 0 0;
	text-align: center;
}
.sign-in-form-top p{
	color:#fff;
	margin:0;
	font-size:2em;
	font-weight:300;
	text-decoration:none;
}
.sign-in-form-top p a{
	color:#fff;
}
.sign-in-form-top p a:hover{
	text-decoration:none;
}
.sign-in-form-top p span{
	color:#8BC34A;
}
.signin {
    padding: 2em;
	position:relative;
	background: #fff;
}
.signin:after {
    content: '';
    background: url(../images/6.png) no-repeat 0px 0px;
    display: block;
    width: 595px;
    height: 20px;
    position: absolute;
    bottom: -20px;
    left: -7%;
    background-size: 100%;
}
.signin-rit {
  padding: 0.3em 0em 0em 0em;
}
.log-input input[type="text"],.log-input input[type="password"] {
  font-size: 0.95em;
  padding: 10px 15px 10px 37px;
  width: 98%;
  color: #A8A8A8;
  outline: none;
  border: 1px solid #D3D3D3;
  border-radius: 4px;
  background: #FFFFFF;
  margin: 0em 0em 1.5em 0em;
  border-style: solid;
}
.log-input input.user {
  background: url(../images/user.png)no-repeat 8px 10px #fff;
}
.log-input input.lock {
  background: url(../images/lock.png)no-repeat 8px 10px #fff;
}
.log-input-left {
  float: left;
  width: 90%;
}
span.checkbox1 {
  float: left;
  width: 43%;
}
.signin .checkbox {
	margin-bottom: 4px;
	font-size: 1.2em;
	line-height: 27px;
	cursor: pointer;
}
.signin .checkbox {
	position: relative;
    font-size: 1em;
    font-weight: normal;
    color: #999;
    padding: 0em 0.5em 0em 2em;
}
.signin .checkbox input {
	position: absolute;
    left: 0px;
    margin-left: 0;
    top: 3px;
}
/*--input check box--*/
span.checkbox2 {
  float: right;
  width: 8%;
  margin: 0.5em 0em 0em 0em;
}
.log-input .checkbox {
	margin-bottom: 4px;
	font-size: 1.2em;
	line-height: 27px;
	cursor: pointer;
}
.log-input .checkbox {
  position: relative;
  font-size: 0.95em;
  font-weight: normal;
  color: #999;
  padding: 0em 0.5em 0em 1.6em;
}
.log-input .checkbox i {
  position: absolute;
  bottom: -26px;
  left: 0;
  display: block;
  width: 18px;
  height: 18px;
  outline: none;
  background: #fff;
  border-radius: 17px;
}
.log-input:nth-child(1) {
    margin: 2em 0 0;
}
.log-input .checkbox input + i:after {
	content: '';
	background: url("../images/tick.png") no-repeat 5px 5px;
	top: -1px;
	left: -1px;
	width: 15px;
	height: 15px;
	font: normal 12px/16px FontAwesome;
	text-align: center;
}
.log-input .checkbox input + i:after {
	position: absolute;
	opacity: 0;
	transition: opacity 0.1s;
	-o-transition: opacity 0.1s;
	-ms-transition: opacity 0.1s;
	-moz-transition: opacity 0.1s;
	-webkit-transition: opacity 0.1s;
}
.log-input .checkbox input {
	position: absolute;
	left: -9999px;
}
.log-input .checkbox input:checked + i:after {
	opacity: 1;
}
.sign-in-form input[type="submit"] {
	font-size: 1.1em;
    color: #fff;
    background: #00ACED;
    border: none;
    padding: 0.7em 1em 0.7em 1em;
    width: 88.5%;
	margin-top: 0.5em;
	display: block;
	outline: none;
	border-radius: 4px;
	cursor:pointer;
}
.sign-in-form input[type="submit"]:hover {
	 background:#8BC34A;
	 transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
.signin-rit p {
	float: right;
    width: 30%;
	font-size: 1em;
}
.signin-rit p a{
  color: #999;
}
.clear{
	clear:both;
}
/*-- sign-up --*/
.sign-up{
	width: 40%;
    padding:2em 0 4em;
    margin: 0 auto;
	}
.sign-up h3 {
    text-align: center;
    font-size: 2em;
    color:#000;
    margin: 0 0 0.5em;
}
p.creating{
	color:#999;
	font-size:14px;
	margin:.5em 0 3em;
	line-height:1.8em;
	text-align:center;
	}
.sign-up1{
	float:left;
	width:27%;
	}
.sign-up1 h4{
	color:#3C4348;
	margin:1.6em 0 1em;
	font-size:18px;
	}
.sign-up2{
	float:right;
	width:70%;
	}
.sign-up2 input[type="text"]{
	outline:none;
	border:1px solid #BEBEBE;
	background:none;
	font-size:15px;
	padding:10px 10px;
	width:100%;
	margin:1em 0;
	}
.sign-up2 input[type="password"]{
	outline:none;
	border:1px solid #BEBEBE;
	background:none;
	font-size:15px;
	padding:10px 10px;
	width:100%;
	margin:1em 0;
	}
.sign-up h5{
	margin: 0 0 2em;
	color:#F44336;
	font-size: 20px;
	}
.sign-up h6{
	margin: 2em 0 1em;
	color:#F44336;
	font-size: 20px;
	}
.sign-up input[type="submit"]{
	outline: none;
    border: none;
    background: #F44336;
    color: #fff;
    font-size: 1em;
    text-align: center;
    width: 100%;
    padding: 10px 0;
    transition: .5s all;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    -o-transition: .5s all;
    -ms-transition: .5s all;
	}
.sign-up input[type="submit"]:hover{
	background:#27cce4;
	color:#fff;
	}
.sub_home {
    margin: 3em 0 0;
}
.sub_home_left{
	float:left;
	width:30%;
}
.sub_home_right{
	float:right;
}
.sub_home_right p{
	font-size:1em;
	color:#999;
	margin:.5em 0 0;
}
.sub_home_right p a{
	text-decoration:underline;
	color:#27cce4;
}
.sub_home_right p a:hover{
	color:#999;
}
/*-- //sign-up --*/
/*--404-starts-here--*/
.error {
  padding: 9em 0px 7em 0;
}
.error-main{
	text-align:center;
	margin: 2em 0 0;
}
.error-main h3{
    margin: 0;
    font-size: 7em;
    color: #F44336;
    font-weight: 100;
}
.error-main h3 span{
    display:block;
	color: #F44336;
}
.error-main span {
  color: #7b7b7b;
  font-size: 2em;
  font-weight: 400;
}
.error-main-left{
	text-align:right;
	margin:4em 0 0;
}
.error-main p {
  color: #7b7b7b;
  font-size: 1.6em;
  margin-top: 10px;
}
.error-btn {
	margin-top:4%;
}
.error-btn a {
  color:#00ACED;
  font-size: 25px;
}
.error-btn a:hover{
	color:#8BC34A;
	text-decoration:underline;
	transition: 0.5s all ease;
	-webkit-transition: 0.5s all ease;
	-moz-transition: 0.5s all ease;
	-o-transition: 0.5s all ease;
	-ms-transition: 0.5s all ease;
}
.error-main h3 i {
    color: #8BC34A;
}
/*--404-ends-here--*/
.dropdown-menu-right {
    min-width: 170px !important;
}
 /*-- responsive design --*/
@media (max-width:1680px){
	canvas#line {
		width: 507px !important;
	}
	canvas#bar {
		width: 507px !important;
	}
}
@media (max-width:1591px){
	.social_icons {
		width: 26%;
	}
}
@media (max-width:1529px){
	.social_icons {
		width: 27%;
	}
}
@media (max-width:1600px){
	canvas#line {
		width:480px !important;
	}
	canvas#bar {
		width: 480px !important;
	}
}
@media (max-width:1473px){
	.social_icons {
		width: 28%;
	}
}
@media (max-width:1440px){
.widget3 {
    padding: 0 1em;
}
div#container-speed{
	width:270px !important;
	height:190px !important;
}
div#container-rpm{
	width:270px !important;
	height:190px !important;
}
div#container-speed1{
	width:270px !important;
	height:190px !important;
}
div#container-rpm1{
	width:270px !important;
	height:190px !important;
}
.widget4 {
    padding: 0 1em;
}
.social_icons {
    width: 28%;
}
canvas#line {
    width: 428px !important;
}
canvas#bar {
    width: 428px !important;
}
.panel .panel-heading {
    padding: 17px 20px;
    height: 48px;
}
canvas#radar {
    width: 409px !important;
    height: 256px !important;
}
canvas#polarArea {
    width: 390px !important;
    height: 256px !important;
}
.legend {
    margin: 7em 0 0 2em;
}
canvas#pie {
    width: 415px !important;
    height: 267px !important;
}
canvas#line1 {
    height: 76px !important;
}
canvas#bar1 {
    height: 75px !important;
}
.sign-in-form {
    width: 39%;
}
.signin:after {
    background: url(../images/6.png) no-repeat 0px 0px;
    width: 590px;
    background-size: 100%;
}
.sign-up {
    width: 45%;
}
canvas#doughnut {
    width: 417px !important;
    height: 255px !important;
}
}
@media (max-width:1420px){
	.social_icons {
		width: 29%;
	}
}
@media (max-width:1371px){
	.social_icons {
		width: 30%;
	}
}
 /*-- responsive design --*/
@media (max-width:1366px){
.col-xs-8.activity-desc {
  width: 64.666667%;
  padding: 0;
}	
.activity-desc h5 {
  font-size: 0.85em;
}  
.svg{
  width: 600px !important;
  height: 400px;
}
canvas#line{
    width: 404px !important;
}
canvas#bar {
    width: 404px !important;
}
.panel .panel-heading {
    padding: 21px 20px;
    height: 55px;
}
.avatar_left {
  width: 65%;
}
.pull-left {
  width: 47%;
}
.login-social-link a.facebook {
  margin-right: 20px;
}
.widget3 {
    padding: 0 0em;
}
.widget4 {
    padding: 0 0em;
}
div#container-speed{
	width:250px !important;
	height:170px !important;
}
div#container-rpm{
	width:250px !important;
	height:170px !important;
}
div#container-speed1{
	width:250px !important;
	height:170px !important;
}
div#container-rpm1{
	width:250px !important;
	height:170px !important;
}
text.highcharts-yaxis-title {
    margin-top: 0 !important;
}
.social_icons {
    width: 30%;
}
canvas#doughnut {
    width: 390px !important;
    height: 240px !important;
}
canvas#radar {
    width: 392px !important;
    height: 242px !important;
}
canvas#polarArea {
    width: 375px !important;
    height: 242px !important;
}
canvas#pie {
    width:393px !important;
    height: 266px !important;
}
.error-main h3 {
    font-size: 5em;
}
.activity_box input[type="submit"] {
    width: 26%;
}
.signin:after {
    background: url(../images/6.png) no-repeat 0px 0px;
    width: 563px;
    background-size: 100%;
}
}
@media (max-width:1325px){
	.social_icons {
		width: 31%;
	}
}
@media (max-width:1280px){
.col-xs-8.activity-desc {
  width: 63.666667%;
}	
.activity-desc p {
  font-size: 12px;
}
.activity-desc h6 {
  font-size: 11px;
}
i.text-info {
  line-height: 39px;
  font-size: 1em;
}
.pull-left {
  width: 42%;
}
.login-social-link a {
  padding: 13px 25px;
  width: 45.5%;
}
div#container-speed{
	width:220px !important;
	height:160px !important;
}
div#container-rpm{
	width:220px !important;
	height:160px !important;
}
div#container-speed1{
	width:220px !important;
	height:160px !important;
}
div#container-rpm1{
	width:220px !important;
	height:160px !important;
}
.social_icons {
    width: 32%;
}
.r3_counter_box .fa {
    font-size: 3em;
}
.grow {
    left:32%;
}
.r3_counter_box h5 {
    font-size: 2.2em;
}
canvas#line {
    width: 376px !important;
    height: 100px !important;
}
canvas#bar {
    width: 376px !important;
    height: 100px !important;
}
canvas.overlay,canvas.base  {
    height: 100px;
}
.activity-img1 {
    width: 40%;
}
.activity-desc-sub:before {
    left: -11%;
}
.activity-desc-sub1:after {
    right: -8%;
}
.activity-row {
    margin-bottom: 1em;
    padding-bottom: 1em;
}
.scrollbar1 {
    height: 400px;
}
canvas#doughnut {
    width: 364px !important;
}
canvas#radar {
    width: 364px !important;
}
canvas#polarArea {
    width: 364px !important;
}
canvas#line1 {
    width: 530px !important;
	height: 63px !important;
}
canvas#bar1 {
    width: 540px !important;
	height: 50px !important;
}
canvas#pie {
    width: 340px !important;
    height: 225px !important;
}
.editor {
    padding: 1em 1.2em 2.5em 1.2em;
}
.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 16px !important;
}
.control2 {
    height: 272px;
}
.main-content6 {
    min-height: 1735px !important;
}
.signin:after {
    background: url(../images/6.png) no-repeat 0px 0px;
    width: 520px;
    background-size: 100%;
}
.sign-up {
    width: 50%;
}
.main-content4 {
    min-height: 2360px !important;
}
}
@media (max-width:1283px){
	.social_icons {
		width: 32%;
	}
}
@media (max-width:1243px){
	.social_icons {
		width: 33%;
	}
}
@media (max-width:1205px){
	.social_icons {
		width: 38%;
	}
}
@media (max-width:1169px){
	.social_icons {
		width: 35%;
	}
}
@media (max-width: 1136px){
	.social_icons {
		width: 36%;
	}
}
@media (max-width: 1104px){
	.social_icons {
		width: 37%;
	}
}
@media (max-width: 1075px){
	.social_icons {
		width: 38%;
	}
}
@media (max-width: 1046px){
	.social_icons {
		width: 40%;
	}
}
@media (max-width:1024px){	
.control2 {
    height: 205px;
}
.float-left {
    width:20%;
}
ul.collection li {
    margin-bottom: 1em;
}
ul.float-right {
    min-width: 140px;
}
.r3_counter_box .fa {
	line-height: 80px;
    font-size: 2em;
	height: 85px;
}
.r3_counter_box1 .fa {
  width: 50px;
  height: 50px;
  line-height: 50px;
}
.r3_counter_box h5 {
	margin: 0;
	font-size: 2em;
}
.r3_counter_box1 h5 {
  font-size: 20px;
}
.fa.pull-left {
    margin-right: 7% !important;
}
.stats span {
  font-size: 13px;
}
.activity-img {
  padding: 0 10px;
}
.col-xs-8.activity-desc {
  width: 58.666667%;
}
.scrollbar {
  padding: 10px;
}
.col-xs-1 {
  padding: 0;
}
.activity-row {
  margin-bottom: 1em;
}
.activity_box {
  min-height: 355px;
}
.single-bottom ul li input[type="checkbox"]+label,.switch-right-grid ul li {
    font-size: 13px;
}
.single-bottom ul li {
    padding: 0px 20px 12px;
}
.scrollbar {
  height: 278px;
}
.panel-title {
	font-size: 15px;
    padding-left: 2em;
}
.panel-heading {
  padding: 20px 0px 0px;
}
.stats-info ul li {
  padding: 7.4px 0;
  font-size: 12px;
}
div#vmap {
  height: 300px !important;
}
.bs-example1 {
  padding: 10px;
}
.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
  padding: 12px !important;
}
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
  font-size: 12px;
}
.col_2 {
  padding: 5px;
}  
.tiles_info .tiles-head {
  padding: 5px 5px;
  font-size: 11px;
}
.tiles_info .tiles-body {
  font-size: 22px;
  padding: 15px 15px;
}
.grid-date {
  padding: 10px;
}
p.date-in, span.date-on{
  font-size: 1em;
}  
.grid-date h4 {
  font-size: 3.5em;
  padding: 44px 0 15px 0;
}
.activity-desc h5 {
  font-size: 13px;
}
.pull-left {
  width: 35%;
}
.m-r-sm {
  margin-right: 0px;
}
.mrg10A {
  margin:1px!important;
}  
.tile-progress {
  padding: 15px;
}
i.fa.fa-facebook, i.fa.fa-twitter, i.fa.fa-google-plus, i.fa.fa-dribbble, i.fa.fa-linkedin, i.fa.fa-youtube, i.fa.fa-skype, i.fa.fa-flickr{
  font-size: 30px;
}
h3.count.text-light {
  font-size: 30px;
}
.coffee-top i {
  top: 70%;
  background: url(../images/1.png)no-repeat center;
  left: 31%;
  background-size: 70%;
}
.follow {
  padding: 3em 0px 2em;
}
.two p {
  font-size: 12px;
}
.two span {
  font-size: 1.3em;
}
.top-on1 p {
  font-size: 0.85em;
}
.wid_blog h1 {
  font-size: 1.3em;
}
.wid_blog {
  padding: 2em;
}
.editor {
  padding: 1em 1em 1.5em 1em;
}
.link1 {
  padding: 5px 5px;
}
.wid_blog-desc {
  padding:2.4em 1em;
}
.panel_2 {
  padding: 2em 1em 0;
}
.online-top {
  padding: 13.9px;
}
.friday h4 {
    font-size: 1.5em;
}
.friday-bottom h5 {
    font-size: 1.5em;
}
.main-grid1-grids {
    min-height: 180px;
	padding: 1em 2em 0;
}
.app-cam {
  width: 27%;
}
.navbar-right {
  margin-right: -10px;
}
.content-box-wrapper {
  padding: 1em;
}
i.icon_4 {
  margin-right: 10px;
}
span.badge {
	right: 17px;
	font-size: 9px;
    line-height: 11px;
    width: 15px;
    height: 15px;
}
.r3_counter_box1.for h5 {
    font-size: 32px;
}
.r3_counter_box1.for .stats span {
    font-size: 16px !important;
}
div#container-speed{
	width:165px !important;
	height:130px !important;
}
div#container-rpm{
	width:165px !important;
	height:130px !important;
}
div#container-speed1{
	width:165px !important;
	height:130px !important;
}
div#container-rpm1{
	width:165px !important;
	height:130px !important;
}
.spark-left span {
    left: 5px;
    top: 25px!important;
}
.login-form-info input[type="password"] {
    margin: 1.5em auto;
}
.login-form-info input[type="submit"] {
    margin-left: 1.2em;
}
.sign-up {
    width: 70%;
}
.sb-search.sb-search-open, .no-js .sb-search {
    min-width: 187px;
}
.social_icons {
    width: 39%;
}
.profile_details {
    margin: 0 3.1em 0 1em;
}
.sb-search {
    left: 80px;
}
.user-panel-top li {
    margin-left: 6px;
}
.grow {
    left: 28%;
    top: 41%;
}
.switch-right-grid ul {
    padding: 1em 0 1em;
}
canvas#line {
    width: 294px !important;
    height: 75px !important;
}
canvas#bar {
    width: 294px !important;
    height: 76px !important;
}
canvas.overlay, canvas.base {
    height: 76px;
}
.activity-img span {
    font-size: 10px;
}
.activity-desc-sub h5, .activity-desc-sub1 h5 {
    font-size: 13px;
    margin: 0 0 .1em;
}
.activity-desc-sub p, .activity-desc-sub1 p {
    font-size: 12px;
}
.activity-desc-sub:before {
    left: -14%;
}
.activity-desc1 {
    width: 10%;
}
.activity-desc-sub1:after {
    right: -10%;
}
.activity_box form {
    padding: 0 1em;
}
.activity_box input[type="text"] {
    padding: 6px 8px;
    font-size: 13px;
    width: 69%;
}
.activity_box input[type="submit"] {
    font-size: 14px;
    padding: 6px 0;
}
.single-bottom ul li input[type="checkbox"]+label span:first-child {
    width: 13px;
    height: 13px;
    border: 1px solid #C8C8C8;
    bottom: 3px;
}
.activity_box h3 {
    padding: .7em;
    font-size: 14px;
}
h1.blank, h3.blank1 {
    font-size: 1.7em;
}
.biseller-column p {
    font-size: 14px;
}
a.lightbox i {
    margin: 0.7em 0;
    font-size: 1.5em;
}
h4.asd label {
    font-size: 14px;
}
.panel .panel-heading {
    padding: 20px 20px;
    height: 53px;
}
.panel_text {
    font-size: 13px;
}
.editor {
    padding: 1em 1em 1em 1em;
}
.main-content2 {
    min-height: 1065px !important;
}
.main-content {
    min-height: 975px;
}
.input-group {
    width: 80%;
}
.main-content4 {
    min-height: 1995px !important;
}
ul.collection {
    padding: 1em;
}
span.badge1 {
    min-width: 2rem;
    right: 25px;
}
canvas#doughnut {
    width: 272px !important;
    height: 180px !important;
}
canvas#radar {
    width: 274px !important;
    height: 182px !important;
}
canvas#polarArea {
    width: 273px !important;
    height: 183px !important;
}
canvas#line1 {
    width: 405px !important;
	height: 127px !important;
}
.sign-in-form {
    width: 49%;
}
.error-main h3 {
    font-size: 4em;
}
.error-main p {
    font-size: 1.2em;
}
.legend {
    margin: 1em auto 2em;
    float: none;
}
canvas#pie {
    width: 410px !important;
    height: 270px !important;
}
canvas#bar1 {
    width: 410px !important;
    height: 140px !important;
}
.input-group.in-grp1 {
    margin: 0;
}
}
@media (max-width:1019px){
	.social_icons {
		width: 41%;
	}
}
@media (max-width:991px){
	.social_icons {
		width: 41%;
	}
	.social_icons-left {
		float: left;
	}
	.profile_details {
		margin: 0 3.1em 0 0em;
	}
	.user-panel-top li a {
		padding: 5px 1px;
	}
	.sb-search {
		left: 65px;
	}
	.widget1 {
		margin-right: 2%;
	}
	.widget {
		width: 23.5%;
		float: left;
	}
	.switch-right {
		width: 32%;
		float: left;
		margin-right: 2%;
	}
	canvas#line {
		width: 275px !important;
	}
	canvas#bar {
		width: 275px !important;
	}
	.span_8 {
		float: left;
	}
	.switches {
		margin: 1em 0 0;
	}
	.grid_box1 {
		margin-bottom: 1em;
	}
	.widget_1_box2 {
		padding: 0;
	}
	.widget_middle_left, .widget_bottom_left {
		padding-right: 0;
	}
	.main-content2 {
		min-height: 2020px !important;
	}
	.main-content3 {
		min-height: 3200px !important;
	}
	.inbox_right {
		padding-left: 0;
		margin: 1.5em 0 0;
	}
	.grid_2 {
		float: left;
		width: 33.33%;
		padding:0 10px;
	}
	canvas#doughnut {
		width: 266px !important;
		height: 170px !important;
	}
	canvas#radar {
		width: 265px !important;
		height: 170px !important;
	}
	canvas#polarArea {
		width: 265px !important;
		height: 170px !important;
	}
	.grid_2_bot {
		float: none;
		width: 100%;
	}
	.grid_2_bot:nth-child(2) {
		margin:1.5em 0 0;
	}
	.media_1-left {
		padding-right: 0;
	}
	.media_1-right {
		padding-left: 0;
		margin-top: 1.5em;
	}
	.main-content6 {
		min-height: 2200px !important;
	}
	.sign-in-form {
		width: 52%;
	}
	.error-main-right img {
		width: 50%;
	}
	
}
@media (max-width:966px){
.float-left {
    width: 14%;
}
.input-group {
    margin: 0 0 0 1em;
	width:40%;
}	
.navbar-right {
  margin-right:3px !important;
}
.col-md-3.widget {
  width:100%;
  float:none;
}
.span_7, .span_8, .col_4{
  padding:0;
}
.span_8, .stats-info, .col_4{
  margin-bottom:1em;
}
.span_4 {
  padding: 0;
  margin:1em 0;
}
.col_1_of_2.span_1_of_2 {
  width: 50%;
  float: left;
}
.graph_box {
  text-align: center;
}
.grid_2 {
  padding: 0;
  margin-bottom: 1em;
}
.graph_box1 {
  text-align: center;
}
.col-md-8.inbox_right {
  padding: 0;
  margin-top:1em;
}
.col-md-4.widget_1_box1 {
  margin-bottom: 1em;
}
.follow {
  padding: 1em;
}
.coffee-top{
	text-align:center;
}
.coffee-top img{
  display:inline-block;
}
.stats-info3{ 
  padding:0;
  margin-bottom:1em;
}
.widget_1_box2 {
  padding: 0;
  margin-top: 1em;
}
.wid_blog-desc {
  padding: 1em;
}
.copy_layout {
  margin: 1em 0 0em 0;
}
.login-social-link a.facebook {
  margin-right: 10px;
}
.app-cam {
  width: 30%;
}
.login-social-link a {
  padding: 10px 15px;
  width: 47.5%;
}
ul.new li.new_left, ul.new li.new_right {
  float: none;
}
.coffee-top i {
  top: 88%;
  background: url(../images/1.png)no-repeat center;
  left: 44%;
  background-size: 70%;
}
.logo-element {
  padding: 17px 0;
}
.col-md-3.widget.widget1 {
  width:100%;
}
.grid_box1 {
  margin-bottom: 5px;
}
.grid_4, .grid_5{
  padding: 20px 10px;
}
.modal-dialog {
  width: 400px !important;
}
.bs-example4, .bs-example5{
  padding: 1em;
}
ul.new {
  margin: 1em 0 0 0;
  text-align: center;
}
.spark-left {
    padding-left: 0;
    padding-right: 0;
    background: #fff;
}
.sparks-left {
    margin: 1em 0;
}
.spar-left {
    padding-right: 0;
    background: #fff;
}
.spar-right {
    margin-top: 1em;
}
.spark-right {
    margin-top: 1em;
}
.switches-right {
    padding-right: 1em;
}
div#container-speed{
	width:225px !important;
	height:170px !important;
}
div#container-rpm{
	width:225px !important;
	height:170px !important;
}
div#container-speed1{
	width:225px !important;
	height:170px !important;
}
div#container-rpm1{
	width:225px !important;
	height:170px !important;
}
div#char {
    height: 202px !important;
}
.map {
    margin:2em 0;
}
.login-form-info input[type="submit"] {
    margin-left: 0.9em;
}
.sign-up {
    width: 90%;
}
}
@media (max-width:960px){
	.social_icons {
		width: 42%;
	}
}
@media (max-width:937px){
	.social_icons {
		width: 44%;
	}
}
@media (max-width:894px){
	.social_icons {
		width: 45%;
	}
}
@media (max-width:875px){
	.social_icons {
		width: 50%;
	}
}
@media (max-width:800px){
	.profile_details_left {
		float: none;
	}
	.social_icons {
		float: left;
		width: 60%;
		margin-left: 1em;
		margin: 1em 0 1em 1em;
	}
	.sticky-header .main-content {
		padding-top: 100px;
	}
	.grow {
		left: 43%;
	}
	.switch-right {
		width: 100%;
		float: none;
		margin-right: 0%;
	}
	canvas#line,canvas#bar {
		width: 100% !important;
		height: auto !important;
	}
	.span_8 {
		float: none;
		width: 100%;
		margin-right: 0;
	}
	.left-side-collapsed .logo-icon {
		height: 100px;
	}
	.logo-icon a i {
		padding-top: 30px;
	}
	.activity-img1 {
		width: 17%;
	}
	.activity-desc-sub1:after {
		right: -4%;
	}
	.main-content2 {
		min-height: 2565px !important;
	}
	.panel-body.panel-body-inputin {
		padding: 1em 0;
	}
	.form-horizontal .control-label {
		float: left;
		width: 13%;
		padding: 0;
	}
	.input-group {
		width: 55%;
		float: left;
	}
	.main-content3 {
		min-height: 2815px !important;
	}
	.panel-body1 {
		padding: 1em;
		margin: 1em 0 0 0;
	}
	.panel-warning {
		margin-top: 1em;
	}
	.main-content4 {
		min-height: 1910px !important;
	}
	.main-content3copy {
		min-height: 1475px !important;
	}
	.grid_2 {
		float: none;
		width: 100%;
	}
	.main-content5 {
		min-height: 2080px !important;
	}
	.sign-in-form {
		width: 64%;
	}
	.new_people h4 {
		font-size: 1.7em;
	}
	.error-main-right {
		margin-top: 3em;
	}
	.main-content2copy {
		min-height: 1100px !important;
	}
}
@media (max-width:768px){
	.user-panel-top li a {
		padding: 10px 10px 0;
	}
	.sb-search {
		left: 105px;
		top: 5px;
	}
	.sb-search.sb-search-open, .no-js .sb-search {
		min-width: 300px;
	}
	span.badge {
		top: 4px;
		right: 22px;
	}
	.main-content1 {
		min-height: 1855px !important;
	}
	.panel .panel-heading {
		padding: 15px 20px;
		height: 45px;
	}
	.widget_middle {
		margin: 1.5em 0 0.5em;
	}
	.main-content2 {
		min-height: 2505px !important;
	}
	.main-content3 {
		min-height: 2850px !important;
	}
	.float-left {
		width: 20%;
	}
	.main-content3copy{
		min-height: 1465px !important;
	}
	.graph_box {
		margin-bottom: 0em;
	}
	.label {
		padding: .2em .3em .3em;
	}
	.main-content6 {
		min-height: 2285px !important;
	}
	.sign-in-form-top {
		background: url(../images/3.jpg) no-repeat 0px -80px;
		min-height: 115px;
	}
	.sign-in-form {
		width: 66%;
	}
	.new_people a {
		padding: 10px 30px;
		font-size: 14px;
	}
	.error-main h3 {
		font-size: 3.5em;
	}
	.error-main-right img {
		width: 60%;
	}
	.main-content2copy {
		min-height: 800px !important;
	}
	.jlkdfj1 {
		padding: 0;
	}
	.input-group.in-grp1 {
		margin: 0 1em;
		width: 65%;
	}
	.form-horizontal .control-label {
		width: 16%;
		margin: 0 0 1em;
	}
	.input-icon > i, .input-icon .icon {
		margin: 47px 8px;
	}
}
@media (max-width: 739px){
	.float-left {
		width: 15%;
	}
}
@media (max-width:736px){
.navbar-right~.navbar-right {
  display: block;
}
.navbar-right {
  display: none;
}
p.monday {
  font-size: 1em;
}
.grid-date h4 {
  font-size:2.5em;
  padding:20px 0 0px 0;
}
.copy {
  padding: 1em 0;
}
ul.new {
  text-align: center;
}
.grid_box1{
  margin-bottom:5px;
}
.navbar-default .navbar-toggle {
  border-color:#000;
  background-color:#000 !important;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
  border-color: rgb(189, 195, 199);
}
form.navbar-form.navbar-right {
  margin: 0;
}
.sidebar-nav.navbar-collapse {
  margin: 0;
}
.media_1-right {
  padding:0;
}
div#container-speed{
	width:320px !important;
	height:220px !important;
}
div#container-rpm{
	width:320px !important;
	height:220px !important;
}
div#container-speed1{
	width:320px !important;
	height:200px !important;
}
div#container-rpm1{
	width:320px !important;
	height:200px !important;
}
.navbar-brand {
    padding: 4px 14px !important;
}
.main-content3 {
    min-height: 3005px !important;
}
}
@media (max-width:667px){
div#container-speed{
	width:300px !important;
	height:210px !important;
}
div#container-rpm{
	width:300px !important;
	height:210px !important;
}
div#container-speed1{
	width:300px !important;
	height:200px !important;
}
div#container-rpm1{
	width:300px !important;
	height:200px !important;
}
.grow {
    left: 41%;
}
}
@media (max-width:655px){
	.social_icons {
		width: 64%;
	}
}
@media (max-width:642px){
	.social_icons {
		width: 63%;
	}
}
@media (max-width:640px){
div#container-speed{
	width:280px !important;
	height:200px !important;
}
div#container-rpm{
	width:280px !important;
	height:200px !important;
}
div#container-speed1{
	width:280px !important;
	height:200px !important;
}
div#container-rpm1{
	width:280px !important;
	height:200px !important;
}
.float-left {
    width: 30%;
}
.input-group {
    margin: 0 0 1em;
    width: 70%;
}
.login-form-info input[type="submit"] {
    margin-left: 1.05em;
}
.login-form-info {
    width: 70%;
}
.social_icons {
    width: 63%;
}
.widget1 {
    margin-bottom: 1em;
}
.user-panel-top li:first-child {
    margin: .2em 0 0;
}
h1.blank, h3.blank1 {
    font-size: 1.5em;
}
.grid_box1 {
    margin-bottom: 1em;
}
.main-content1 {
    min-height: 2085px !important;
}
.main-content2 {
    min-height: 2595px !important;
}
.main-content3 {
    min-height: 3315px !important;
}
footer {
    position: inherit;
}
.main-content3copy {
    min-height: 1465px !important;
}
.sign-in-form {
    width: 81%;
}
.sign-in-form-top {
    padding: 2em 0 0;
}
.sign-up1 h4 {
    font-size: 16px;
}
.main-content2copy {
    min-height: 700px !important;
}
.error-main {
    margin: 2em 0 5em;
}
body.sticky-header {
    background: #000;
}
.sticky-left-side {
    position: absolute;
}
.sticky-header .logo {
    position: absolute;
}
.form-horizontal .control-label {
    margin: 1em 0 1em 1em;
    width: 100%;
    text-align: left;
}
.jlkdfj1 {
    padding-left: 1em;
}
.input-icon > i, .input-icon .icon {
    margin: 66px 8px;
}
}
@media (max-width: 625px){
	.social_icons {
		float: none;
		width: 100%;
	}
	.profile_details {
		float: none;
		width:94%;
	}
	.user-panel-top li:first-child {
		margin: 0.5em 0 0.5em 2em;
	}
	.user-name p span {
		display: block;
		float: none;
		width: 100%;
	}
	.user-name {
		width:14%;
	}
	.user-panel-top li:first-child {
		margin: 0.5em 0 0.5em 0em;
	}
	.user-panel-top li a i {
		float: left;
	}
	.profile_details_drop a {
		padding: 0px 0px 8px !important;
	}
	li.dropdown.profile_details_drop{
		margin-left: 2em;
	}
	ul.dropdown-menu.drp-mnu {
		left: 7%;
	}
	.sticky-header .main-content {
		padding-top: 163px;
	}
	.left-side-collapsed .logo-icon {
		height: 159px;
	}
	.logo-icon a i {
		padding-top: 60px;
	}
	.user-panel-top li {
		margin-top: 8px;
	}
}
@media (max-width:600px){
	.main-content {
		position: relative;
	}
div#container-speed{
	width:260px !important;
	height:190px !important;
}
div#container-rpm{
	width:260px !important;
	height:190px !important;
}
div#container-speed {
    margin: 0 !important;
}
div#container-speed1{
	width:260px !important;
	height:190px !important;
}
div#container-rpm1{
	width:260px !important;
	height:190px !important;
}
.sticky-header.left-side-collapsed .header-section {
    left: 0;
}
.sticky-header .header-section {
    position: absolute;
	left: 0;
}
.menu-right {
    margin: 6px 0px 0px 0;
}
div#page-wrapper {
    padding: 2em 2em 0.1em;
}
.activity-img1 {
    width: 25%;
}
.activity-desc-sub1:after {
    right: -6%;
}
.main-content3 {
    min-height: 3415px !important;
}
.main-content4 {
    min-height: 1935px !important;
}
.main-content3copy {
    min-height: 1465px !important;
}
.main-content6 {
    min-height: 2560px !important;
}
.signin:after {
    background: url(../images/6.png) no-repeat 0px 0px;
    width: 482px;
    background-size: 100%;
}
.error-btn a {
    font-size: 1em;
}
.error-main p {
    font-size: 1em;
}
.error-main-left {
    margin: 1em 0 0;
}
.error-main-right {
    margin-top: 1em;
}
}
@media (max-width:568px){
div#container-speed{
	width:256px !important;
	height:180px !important;
}
div#container-rpm{
	width:256px !important;
	height:180px !important;
}
div#container-speed1{
	width:256px !important;
	height:180px !important;
}
div#container-rpm1{
	width:256px !important;
	height:180px !important;
}
div#page-wrapper {
    padding: 2em 1em;
}
.sb-search.sb-search-open, .no-js .sb-search {
    min-width: 260px;
}
div#page-wrapper {
    padding: 1em 1em .1em;
}
}
@media (max-width:480px){
	.user-panel-top li {
		margin-top: 0px;
	}
	.tab {
		margin: 0;
	}
	.pagination {
	  margin: 6px 0;
	}
	.main-content {
		min-height: 855px;
	}
span.label.label-default{
  line-height: 2em;
}
button.btn.btn-lg, button.btn{
  margin-bottom:3px;
}
.modal-dialog {
  width: 370px !important;
}
.coffee-top i {
  top: 82%;
  left: 39%;
}
.well1 {
  padding: 1em;
}
.panel-body1 {
  margin: 1em 0 0 0;
}
.panel-warning {
  margin-top: 1em;
}
.app-cam {
  width: 50%;
  margin: 2em auto auto auto;
}
.app-cam input[type="text"], .app-cam input[type="password"]{
  padding: 10px;
}  
.login-logo {
  padding: 40px 0;
}
.pull-left {
  width: 50%;
}
.mail-toolbar.clearfix {
  padding: 1em 0;
}
.copy_layout {
  padding: 10px;
}
button.btn.btn-success {
  padding:9px 12px;
}
.xs h3, .widget_head {
  font-size: 1.5em;
  margin-bottom: 15px;
}
.follow {
  padding: 1em 0;
}
.widget_1_box2 {
  margin-top: 0;
}
.wid_blog h1 {
  font-size: 1em;
}
.wid_blog {
  padding: 1em;
}
.widget_5 {
  margin: 0;
}
.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
  padding: 5px !important;
}
td.head {
  font-size:1em !important;
}
div#container-speed{
	width:210px !important;
	height:150px !important;
}
div#container-rpm{
	width:210px !important;
	height:150px !important;
}
div#container-speed1{
	width:210px !important;
	height:150px !important;
}
div#container-rpm1{
	width:210px !important;
	height:150px !important;
}
.switches-right1 {
    padding:0;
}
ul.collection, .mailbox-content {
    padding: 1em 1em;
    background: #fff;
}
.float-left {
    float: none !important;
    width: 100%;
	margin:0 0 .5em;
}
.float-right, .pull-right {
    float: none !important;
}
.position-center {
    width: 100%;
    margin: 0 auto;
}
.form-group {
    margin-bottom: 0.5em !important;
}
.btn-block {
    display: block !important;
    width: 94% !important;
    margin: 0 auto !important;
}
.login-form-info {
    width: 90%;
}
.login-form-info input[type="submit"] {
    margin-left: 0.9em;
}
.sign-up1 {
    float: left;
    width: 38%;
}
.sign-up2 {
    float: left;
    width: 62%;
}
ul.dropdown-menu {
    min-width: 215px;
}
.toggle-btn {
    margin: .4em 1em 0 1em;
}
.sb-search.sb-search-open, .no-js .sb-search {
    min-width: 185px;
}
li.dropdown.profile_details_drop {
    margin-left: 1em;
}
.social_icons {
    margin: 0;
}
.user-panel-top li:first-child {
    margin: 0;
}
ul.dropdown-menu li {
    margin: 0;
}
.profile_details {
    margin: .5em 0 0 1em;
}
ul.dropdown-menu.drp-mnu {
    left: 0;
}
.menu-right {
    margin: .2em 0px 1em 0;
}
.sticky-header .main-content {
    padding-top: 145px;
}
.grow {
    left: 38%;
}
.left-side-collapsed .logo-icon {
    height: 140px;
}
.logo-icon a i {
    padding-top: 50px;
}
.grid_box1 {
    margin-bottom: .5em;
}
.main-content1 {
    min-height: 1680px !important;
}
.main-content2 {
    min-height: 2770px !important;
}
.main-content3 {
    min-height: 3005px !important;
}
.main-content4 {
    min-height: 1470px !important;
}
.panel-body-com-m {
    padding: 1em !important;
}
.main-content3copy {
    min-height: 1390px !important;
}
canvas#line1 {
    width: 380px !important;
}
canvas#pie {
    width: 380px !important;
    height: 245px !important;
}
canvas#bar1 {
    width: 380px !important;
}
.main-content5 {
    min-height: 1995px !important;
}
.grid_3 {
    margin-bottom: 1em;
}
.media_1-right {
    margin-top: 1em;
}
.main-content6 {
    min-height: 2605px !important;
}
.sign-in-form-top p {
    font-size: 1.7em;
}
.sign-in-form-top {
    min-height: 95px;
}
span.checkbox1 {
    width: 55%;
}
.log-input:nth-child(1) {
    margin: 1em 0 0;
}
.sign-in-form input[type="submit"] {
    font-size: 1em;
    padding: 0.5em 1em 0.5em 1em;
}
.signin:after {
    background: url(../images/6.png) no-repeat 0px 0px;
    width: 405px;
    background-size: 100%;
}
.error-main h3 {
    font-size: 2.5em;
}
.main-content2copy {
    min-height: 700px !important;
}
}
@media (max-width:445px){
	.social_icons-left {
		padding-left: .5em;
	}
}
@media (max-width:424px){
	.social_icons-left a {
		padding: .6em 0.5em .5em;
	}
	.user-name {
		width: 25%;
	}
	.sb-search.sb-search-open, .no-js .sb-search {
		min-width: 145px;
	}
}
@media (max-width:414px){
div#container-speed{
	width:180px !important;
	height:125px !important;
}
div#container-rpm{
	width:180px !important;
	height:125px !important;
}
div#container-speed1{
	width:200px !important;
	height:150px !important;
}
div#container-rpm1{
	width:200px !important;
	height:150px !important;
}
div#char {
    height: 150px !important;
}
ul.float-right {
    left: 15%;
}
.alert {
    padding: 10px;
    font-size: 14px;
}
i.icon_4 {
    width: 35px;
    height: 35px;
    font-size: 1em;
    line-height: 34px;
}
span.email-title {
    font-size: 14px;
}
.grid_1 h4 {
    font-size: 1.2em;
    padding: 1em 0 0.5em;
}
.request {
    padding: 0;
    margin: 5em 1em;
}
.form-horizontal .form-group {
    padding: 0 !important;
}
.btn-block {
    width: 100% !important;
}
.login-form1 {
    padding: 2em 0;
}
.new-people {
    margin: 3em 0 0;
}
.new-people p {
    font-size: 13px;
    margin: 1em 0 2em;
    line-height: 1.7em;
}
.new-people h3 {
    font-size: 1.3em;
}
.login-form-info input[type="submit"] {
    margin-left: 0.6em;
}
.sign-up-form {
    padding: 2em 0;
    background: #b8c9f1;
}
.sign-up-form p {
    font-size: 14px;
    margin: 1em 0 2em;
    line-height: 1.7em;
}
.sign-up {
    width: 100%;
}
.sign-up {
    padding: 1em 0em;
}
.sign-up1 h4 {
    margin: 1.6em 0 1em;
    font-size: 15px;
}
.sign-up1 {
    float: left;
    width: 42%;
}
.sign-up2 {
    float: left;
    width: 58%;
}
.sub-login {
    margin: 2em 0 0;
}
.sign-up-form p {
   margin: 0.4em 0 2em;

}
#loginBox {
    right: -58px;
}
.r3_counter_box h5 {
    font-size: 1.5em;
}
.r3_counter_box .fa {
    font-size: 1.5em;
	line-height: 60px;
	height: 70px;
}
.stats {
    padding: 1.2em;
}
.grow {
    left: 35%;
	top: 37%;
}
.activity-img1 {
    width: 39%;
}
.activity-desc-sub1:after {
    right: -9%;
}
.left-side-collapsed .custom-nav li a span {
    padding: 9px;
    min-width: 110px;
	top: 6px;
}
.left-side-collapsed .custom-nav li.nav-hover ul {
    min-width: 110px;
}
.grid_box1 {
    margin-bottom: 0.1em;
}
.main-content2 {
    min-height: 2655px !important;
}
.main-content4 {
    min-height: 1490px !important;
}
canvas#pie {
    width: 325px !important;
    height: 210px !important;
}
canvas#line1 {
    width: 308px !important;
}
canvas#bar1 {
    width: 310px !important;
}
.main-content5 {
    min-height: 1810px !important;
}
.main-content6 {
    min-height: 3140px !important;
}
.sign-in-form {
    width: 95%;
}
.error-main-right img {
    width: 100%;
}
.user-panel-top li {
    margin-top: 0px;
}
ul.dropdown-menu {
    min-width: 175px;
}
.notification_desc p {
    white-space: initial;
}
}
@media (max-width:384px){
div#container-speed{
	width:160px !important;
	height:120px !important;
}
div#container-rpm{
	width:160px !important;
	height:120px !important;
}
div#container-speed1{
	width:200px !important;
	height:150px !important;
}
div#container-rpm1{
	width:200px !important;
	height:150px !important;
}
.switches1 {
    margin: 5.3em 0em 0;
}
.login-form-info {
    width: 100%;
}
.login-header {
    padding: 1.5em 1em;
}
#loginBox {
    right: -100px;
}
.dropdown-menu2 {
    right: -12px;
}
.social_icons-left a {
    font-size: .7em;
}
.user-panel-top li a {
    padding: 10px 5px 0;
}
.sb-search {
    left: 80px;
}
h4.asd label {
    font-size: 13px;
    padding-left: .5em;
}
.main-content2 {
    min-height: 2680px !important;
}
footer p {
    font-size: 13px;
}
.main-content3 {
    min-height: 3080px !important;
}
.main-content4 {
    min-height: 1640px !important;
}
.mailbox-content, .request {
    margin: 0.5em 0em 0em;
}
.main-content3copy {
    min-height: 1390px !important;
}
canvas#pie {
    width: 295px !important;
    height: 190px !important;
}
canvas#line1 {
    width: 290px !important;
}
canvas#bar1 {
    width: 285px !important;
}
.main-content6 {
    min-height: 3485px !important;
}
}
@media (max-width:375px){
	ul.dropdown-menu {
		min-width: 167px;
	}
}
@media (max-width:320px){
	.main-content {
		min-height: 1180px;
	}
	.form-control1, .form-control_2.input-sm {
		padding: 5px 10px;
		font-size: 13px;
		height: 28px;
	}
	button.btn.btn-success {
		padding: 4px 12px;
	}
	.mailbox-content h2 {
    font-size: 1em;
    padding: 1em 0;
}
.login-logo {
  padding:20px 0;
}
.login-logo img{
  width:40%;
}
.app-cam {
  width: 70%;
  margin: 1em auto auto auto;
}
h2.form-heading {
  font-size: 16px;
}  
.login-social-link a {
  padding: 8px 15px;
}
.pagination-lg>li>a, .pagination-lg>li>span {
  padding: 6px 13px;
  font-size: 16px;
}
.modal-dialog {
  width:240px !important;
}
.grid_3 {
  margin-bottom: 1em;
}
ul.collection li {
  margin-bottom: 1em;
}
.m-r-sm {
  font-size: 13px;
}
a.btn.btn-default.dropdown-toggle {
  padding: 3px 6px;
  font-size: 13px;
}
a.btn.btn-default {
  padding: 3px 9px;
}
.btn.btn_1.btn-default.mrg5R {
  padding: 3px 10px;
}
a#home-tab {
  padding: 7px 5px;
}
.btn-warng1{
  padding:5px;
}
.coffee-top i {
  top: 73%;
  left: 37%;
}
body#login {
  min-height: 500px;
}
h1#h1{
  font-size:17px !important;
}
h2#h2{
  font-size:16px !important;
}
h3#h3{
  font-size:15px !important;
}
h4#h4{
  font-size:14px !important;
}
button.btn.btn_5 {
  font-size: 13px;
  padding: 8px 10px;
}
button.btn.btn-lg, button.btn {
  margin-bottom: 3px;
}
span.btn_6{
  font-size: 55%;
}
span.btn_7{
  font-size: 64%;
}
div#container-speed{
	width:140px !important;
	height:110px !important;
}
div#container-rpm{
	width:140px !important;
	height:110px !important;
}
div#container-speed1{
	width:160px !important;
	height:130px !important;
}
div#container-rpm1{
	width:160px !important;
	height:130px !important;
}
.r3_counter_box1 {
	min-height:0px;
    background: #ffffff;
}
.r3_counter_box1.for h5 {
    font-size: 23px;
}
.r3_counter_box1.for .stats span {
    font-size: 14px !important;
}
.r3_counter_box1.for {
    min-height: 79px;
    padding: 12px;
}
div#char {
    height: 140px !important;
}
.dropdown-menu2 {
    right: -73px;
}
#loginBox {
    right: -150px;
}
.user-panel-top li a i {
    font-size: 0.8em;
    width: 17px;
    height: 20px;
}
span.badge {
    right: 13px;
}
.toggle-btn {
    font-size: 12px;
    padding: 6px 0 0;
    width: 30px;
    height: 30px;
}
.sb-search {
    left: 65px;
}
.sb-search.sb-search-open, .no-js .sb-search {
    min-width: 115px;
}
.profile_img span {
    width: 30px;
    height: 30px;
}
.user-name {
    width: 55%;
    margin-top: 2px;
    margin-left: 9px;
}
.user-name p {
    font-size: 13px;
}
.profile_details ul li {
    width: 50%;
}
a.yui {
    padding: .6em .7em .5em !important;
}
.social_icons {
    margin-left: 0.5em;
    width: 97%;
}
.social_icons-left a {
    font-size: .6em;
	padding: .6em 0.5em .5em;
}
.left-side-collapsed .logo-icon {
    height: 123px;
}
.sticky-header .main-content {
    padding-top: 128px;
}
.left-side-collapsed .custom-nav li a i {
    font-size: 1em;
}
.left-side-collapsed .custom-nav li a {
    padding: 6px;
}
.left-side-collapsed .custom-nav li a span {
    padding: 8px;
    min-width: 105px;
    top: 2px;
    font-size: 13px;
}
.custom-nav .sub-menu-list > li > a {
    font-size: 12px;
}
.left-side-collapsed .custom-nav li.nav-hover ul {
    min-width: 105px;
	top: 36px;
}
.grow p {
    font-size: 10px;
}
.grow {
    width: 75px;
    height: 24px;
    padding: .3em 0 0;
	top: 42%;
}
.switch-right-grid1 {
    padding: 1em 1em 0;
}
.switch-right-grid h3 {
    font-size: 14px;
}
.switch-right-grid ul {
    padding: 0.5em 0 1em;
}
.activity-desc h5 {
    font-size: 14px;
}
.activity-desc p,.grid_3 p,span.badge1,.list-group-item,.sidebard-panel .feed-element, .media-body, .sidebard-panel p {
    font-size: 13px;
}
.bs-example5.example_6 {
    display: none;
}
.panel_2 {
    padding: 1em 1em 0;
    margin-top: 1em;
}
.main-content6 {
    min-height: 3220px !important;
}
span.checkbox1 {
    width: 70%;
}
.signin-rit p {
    font-size: 14px;
}
.log-input input[type="text"], .log-input input[type="password"] {
    margin: 0em 0em 1em 0em;
}
.signin {
    padding: 1em;
}
.sign-in-form-top p {
    font-size: 1.5em;
}
.sign-in-form input[type="submit"] {
    margin-top: 0;
}
.alert {
    font-size: 13px;
    margin-bottom: 10px;
}
.signin:after {
    background: url(../images/6.png) no-repeat 0px 0px;
    width: 305px;
    background-size: 100%;
}
.new_people h4 {
    font-size: 1.3em;
}
.new_people p {
    margin: 0.5em 0 2em;
    font-size: 13px;
}
.sign-up h3 {
    font-size: 1.5em;
}
p.creating {
    font-size: 13px;
    margin: 0 0 2em;
}
.sign-up h5 {
    margin: 0 0 1em;
    font-size: 18px;
}
.sign-up2 input[type="text"],.sign-up2 input[type="password"] {
    font-size: 13px;
    padding: 8px 10px;
    margin: 0.5em 0;
}
.sub_home {
    margin: 1em 0 0;
}
.sign-up input[type="submit"] {
    font-size: 14px;
    padding: 6px 0;
}
.sub_home_right p {
    font-size: 14px;
}
.error-main span {
    font-size: 1.5em;
}
.error-main p {
    font-size: 13px;
}
.error-main-right img {
    width: 55%;
    margin: 1em auto 0;
}
.error-main-left,.error-main-right {
    float: none;
    width: 100%;
    text-align: center;
    margin: 0;
}
.new_people a {
    padding: 7px 20px;
}
.new_people {
    padding: 2em 0 0;
}
.activity_box {
    min-height: 320px;
}
.activity_box1,.activity_box2 {
    min-height: 345px;
}
.activity-row {
    margin-bottom: 0.5em;
	padding-bottom: .5em;
}
.activity-img1 {
    width: 50%;
}
.activity-desc-sub1:after {
    right: -12%;
}
.activity_box input[type="submit"] {
    font-size: 13px;
    padding: 4px 0;
    width: 25%;
    margin-left: 0em;
}
.activity_box form {
    padding: 0;
}
.activity_box input[type="text"] {
    padding: 3px 8px;
    font-size: 12px;
}
h1.blank, h3.blank1 {
    font-size: 1.3em;
    margin: 0 0 0.7em;
}
.table td, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 5px !important;
    display: block;
}
.main-content1 {
    min-height: 1480px !important;
}
label.round {
    float: none;
    margin-top: 45%;
}
.panel .panel-heading {
    padding: 5px 15px 0;
    height: 73px;
}
.main-content2 {
    min-height: 3050px !important;
}
.collapsed span {
    padding-left: 7em;
}
.pa_italic i {
    padding-left: 7em;
}
.main-content3 {
    min-height: 2785px !important;
}
.input-group {
    width: 100%;
}
.panel-body.no-padding {
    padding: 1em;
}
.main-content4 {
    min-height: 4545px !important;
}
.com-mail input[type="submit"] {
    padding: 5px 25px;
}
.main-content3copy {
    min-height: 1390px !important;
}
canvas#doughnut {
    width: 230px !important;
    height: 150px !important;
}
canvas#radar {
    width: 225px !important;
    height: 150px !important;
}
canvas#polarArea {
    width: 225px !important;
    height: 150px !important;
}
canvas#pie {
    width: 230px !important;
    height: 150px !important;
}
canvas#line1,canvas#bar1 {
    width: 230px !important;
    height: auto !important;
}
.main-content5 {
    min-height: 1470px !important;
}
.well {
    font-size: 13px;
	margin-bottom: 10px;
}
.main-content2copy {
    min-height: 700px !important;
}
.logo a {
    font-size: 0.6em;
}
.nav>li>a {
    font-size: 14px;
}
.left-side {
    width: 160px;
}
.sticky-header .logo {
    width: 160px;
}
.main-content {
    margin-left: 160px;
}
ul.dropdown-menu {
    min-width: 130px;
}
.progress {
    height: 4px;
    margin-bottom: 0px;
}
.notification_bottom a {
    padding: 0.2em 0 !important;
    font-size: 13px;
}
.notification_bottom {
    margin-top: .5em;
}
.notification_header h3 {
    line-height: 1.5em;
}
.notification_desc p {
    white-space: initial;
}
.input-icon > i, .input-icon .icon {
    margin: 54px 8px;
}
.has-feedback label~.form-control-feedback {
    top: 22px !important;
}
.panel.panel-warning .panel-heading {
    height: 25px;
}
textarea.form-control1.control2 {
    height: 100px;
}
.form-group {
    margin-bottom: 0.2em !important;
}
.input-group.in-grp1 {
    margin: 0 1em 0 0;
    width: 100%;
}
}

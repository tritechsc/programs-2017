<?php 
session_start(); 
$_SESSION['pagename'] = "Tri-Tech-Programs";
include 'db/db.php'; include '../db/error.php'; 
include 'db/pushprogram.php';
?>


<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252"><title>Tri-Tech Skills Center Programs</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}
html {
    font-family: "Lucida Sans", sans-serif;
}
.header {
    background-color: #000;
    color: #ffffff;
    padding: 5px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

a{
	  font-family: "Lucida Sans", sans-serif;
	  text-decoration: none;
	  color: #fff;

}

.menu  li  {
    padding: 4px;
    margin-bottom: 7px;
    background-color: #f00;
    color: #ffffff;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    text-decoration: none;
}
.menu li:hover {
    background-color: #000;
}
.aside {
    background-color: #0099cc;
    padding: 15px;
    color: #ffffff;
    text-align: left;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.footer {
    background-color: #0099cc;
    color: #ffffff;
    text-align: center;
    font-size: 12px;
    padding: 15px;
}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}

</style>
</head>
<body>

<div class="header">
  <h1>Tri-Tech Skills Center Programs</h1>
</div>

<div class="row">

<div class="col-3 menu">
<ul>
<li><a href="http://tritechsc.org/programs/autobody/" target="_blank">	Auto Body Technology	</a> </li>
<li><a href="http://tritechsc.org/programs/auto/" target="_blank">	Auto Systems Technology	</a> </li>
<li><a href="http://tritechsc.org/programs/healthcare/" target="_blank">	Careers in Health Care</a> </li>
<li><a href="http://tritechsc.org/programs/cyber/" target="_blank">	Computer Science/Cyber Security</a> </li>
<li><a href="http://tritechsc.org/programs/construction/" target="_blank">	Construction Trades</a> </li>
<li><a href="http://tritechsc.org/programs/cosmetology/" target="_blank">	Cosmetology</a> </li>
<li><a href="http://tritechsc.org/programs/culinaryarts/" target="_blank">	Culinary Arts</a> </li>
<li><a href="http://tritechsc.org/programs/dental/" target="_blank">	Dental Assisting</a> </li>
<li><a href="http://tritechsc.org/programs/diesel/" target="_blank">	Diesel Technology</a> </li>
<li><a href="http://tritechsc.org/programs/digitalarts/" target="_blank">	Digital Arts &amp; Filmmaking</a> </li> 
<li><a href="http://tritechsc.org/programs/ece/" target="_blank">		Early Childhood Education	</a> </li>
<li><a href="http://tritechsc.org/programs/fire/" target="_blank">		Firefighting	</a> </li>
<li><a href="http://tritechsc.org/programs/gamedesign/" target="_blank">		Game Design	</a> </li>
<li><a href="http://tritechsc.org/programs/law/" target="_blank">		Law Enforcement	</a> </li>
<li><a href="http://tritechsc.org/programs/nursing/" target="_blank">		Pre-Nursing	</a> </li>
<li><a href="http://tritechsc.org/programs/vettech/" target="_blank">		Pre-Veterinary Technician	</a> </li>
<li><a href="http://tritechsc.org/programs/radio/" target="_blank">		Radio Broadcasting and Production	</a> </li>  
<li><a href="http://tritechsc.org/programs/teen/" target="_blank">		Teen Parenting 	</a>  </li>
<li><a href="http://tritechsc.org/programs/welding/" target="_blank">		Welding Technology	</a> </li>
<li><a href="http://tritechsc.org/programs/tritech/" target="_blank">		Tri-Tech Overview	</a> </li>
  </ul>
</div>

<div class="col-6">
   <p></p><h1>The City
 Tri-Tech partners with your high school to offer advanced technical and
 professional training. This tuition free training is available to all 
area public, private, and home-schooled students age 16-20 who has yet 
to receive a high school diploma. <p></p>
	<br>
	Click the link on the left to learn more about our programs.
	</h1>
	<p></p>
</div>

<div class="col-3 right">
  <div class="aside">
    <h2>Tri-Tech Skills Center<br>
5929 W. Metaline Avenue<br>
Kennewick, WA 99336<br>
Main Office: (509) 222-7300<br>
Fax: (509) 222-7301<br>
<br>
Paul Randall<br>
Director<br>
(509) 222-7322<br>	
<br>
Lisa McKinney<br>
Assistant Director<br>
(509) 222-7322	<br>
<br>
Charity Upton<br>
Director’s Secretary<br>
(509) 222-7322	<br>
<br>
Abby Mattson<br>
Assistant Director<br>
(509) 222-7322	<br>
</h2>
  </div>
</div>

</div>

<div class="footer">
  <p>Tri-Tech Skills Center Program Links to youtube.com videos.</p>
</div>



</body></html>

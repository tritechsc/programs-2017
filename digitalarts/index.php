<!DOCTYPE html >
<html>
<head><title>Digital Arts & Filmmaking</title>
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>

body {margin: 0; padding: 0;
background-color: #000;
color:#fff;
font-family:"Arial","sans-serif";color:#fff;font-size:48px;}
pre{margin: 10; padding: 10;font-family:"Arial","sans-serif";color:#ddd;font-size:18px;}

a{
font-family:"Arial","sans-serif";
font-size:18px;
font-size:1em;
color: #fff;
background-color:#f00;
text-decoration:none;

}

a:hover {
font-family: arial, san-serif;
font-size:18px;
font-size:1em;
background-color: #111;
color: #f00;
text-decoration:none;

}


</style>
<body>
<?php 
session_start(); 
$_SESSION['pagename'] = "Digital-Arts-Filmmaking";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';

//header('Location: https://www.youtube.com/watch?v=vam5WktVSP0');
//exit;
// 170105
?>

<!--  start youtube embed   -->
<div class="container">
      <h1>Digital Arts & Filmmaking </h1> 
	<div id="ytplayer"></div>
<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '390',
      width: '640',
      videoId: 'vam5WktVSP0'
    });
  }
</script>
<hr />
<p>
<h1 />
Are you a visual person who enjoys the creative process? The Digital Arts & Filmmaking program will help you get a jump start into an exciting career in digital media, including graphic design, animation, social media, and film production. You will be able to design and produce your own graphic materials and films and also be introduced to interactive marketing. Qualifying students will have the opportunity to job shadow and intern at local multimedia companies, design firms, TV stations and independent production companies. The program will provide students the opportunity to express their personal creativity while developing the ability to conceptualize story ideas and effectively translate these ideas in film productions, animations, graphic designs and websites.
</p>
  </div>
<!-- end youtube embed -->


</body>
</html>



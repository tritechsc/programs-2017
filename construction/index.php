<!DOCTYPE html >
<html>
<head><title>Constructions Trades</title>
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
$_SESSION['pagename'] = "Construction-Trades";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=NlTt2l7zOmA');
//exit;
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Constructions Trades </h1> 
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
      videoId: 'NlTt2l7zOmA'
    });
  }
</script>
<hr />
<p>
<h1 />
The Construction Trades program provides a foundation in basic residential and commercial construction preparing you for a successful career in the construction industry fields of skilled craft person, construction management or engineering. Instruction includes the proper and safe use of tools, footings and foundations, metal and wood framing and roof structures, estimation of labor and materials, city and county building codes, lot development and design process and blueprint reading.
</p>
  </div>
<!-- end youtube embed -->

</body>
</html>










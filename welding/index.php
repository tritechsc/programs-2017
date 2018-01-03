<!DOCTYPE html >
<html>
<head><title>Welding Technology</title></head>
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
$_SESSION['pagename'] = "Welding-Technology";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=Hreg838LUIY');
//exit;
//170105
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Welding Technology </h1> 
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
      videoId: 'Hreg838LUIY'
    });
  }
</script>
<hr />
<p>
<h1 />
The Welding program works to train you in the basic skills of oxy-acetylene welding, and cutting, shielded metal arc welding, gas metal and flux cored arc welding, gas tungsten arc welding, and many other areas. This program trains you in blueprint reading, math, layout and fit-up, and fabrication of a wide variety of projects. Numerous jobs are available in the shipyards, manufacturing and welding shops. Apprentices are needed in sheet metal, iron working, pipefitting, and boiler making. Your certification opportunities include progress towards American Welding Society certificates.
</p>
  </div>
<!-- end youtube embed -->


</body>
</html>

<link href="../dist/css/bootstrap.min.css" rel="stylesheet">


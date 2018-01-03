<!DOCTYPE html >
<html>
<head><title>Diesel Technology</title>
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
$_SESSION['pagename'] = "Diesel-Technology";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=Cscs976mCJU');
//exit;
//170105
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Diesel Technology </h1> 
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
      videoId: 'Cscs976mCJU'
    });
  }
</script>
<hr />
<p>
<h1 />
The Diesel Technology program is designed to train you in the technical knowledge and mechanical skills required to service, repair, and test various types of machinery and equipment. The program includes instruction in the theory of internal combustion engines, diesel fuel systems, electrical, hydraulics, power trains, and machinery maintenance. The program also includes training in basic shop skills, safety, and instrumentation.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>














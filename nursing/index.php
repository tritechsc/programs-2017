<!DOCTYPE html >
<html>
<head><title>Pre-Nursing</title></head>
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
$_SESSION['pagename'] = "Pre-Nursing";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=bML15H4CPK8');
//exit;
//170105
?>
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
<!--  start youtube embed   -->
<div class="container">
      <h1>Pre-Nursing </h1> 
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
      videoId: 'bML15H4CPK8'
    });
  }
</script>
<hr />
<p>
<h1 />
The Pre-Nursing program has been developed to meet the needs of students interested in the medical field. The program will prepare you for initial certification as a Nursing Assistant as well as continued training in nursing and health care. Students spend time in the classroom and clinical settings learning many procedures for patient care including blood pressure, temperature, pulse and respiration, as well as learning how to bathe, groom, feed, transfer, position and exercise patients. During this time students will become familiar with anatomy, physiology, signs and symptoms and prevention of disease. A portion of the year is spent in a supervised clinical experience working with patients.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>

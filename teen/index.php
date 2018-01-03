<!DOCTYPE html >
<html>
<head><title>Teen Parenting</title>
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
$_SESSION['pagename'] = "Teen-Parenting";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=RunOznc73H8 ');
//exit;
170105
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Teen Parenting</h1> 
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
      videoId: 'RunOznc73H8'
    });
  }
</script>
<hr />
<p>
<h1 />
Teen Parent is a program for pregnant and parenting teens. During the first semester you will receive instruction in the trimesters of pregnancy, effects of alcohol and other drugs, nutrition and healthy life styles and birth. Second semester focuses on childcare, new baby care, brain development and other developmental areas, infant and toddler feeding, discipline, abuse, health and safety, childcare and employment readiness.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>





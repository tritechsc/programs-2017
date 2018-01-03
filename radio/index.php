<!DOCTYPE html >
<html>
<head><title>Radio Broadcasting and Production</title>
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
$_SESSION['pagename'] = "Radio-Broadcasting";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=_DYJGD7b3dk');
//exit;
//170106
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Radio Broadcasting and Production</h1> 
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
      videoId: '_DYJGD7b3dk'
    });
  }
</script>
<hr />
<p>
<h1 />
If you are smart and hardworking can you expect to succeed? You may have the best and brightest ideas but if you are unable to convey them, no one will ever know. In the Radio Broadcasting program, you will hone your communication skills every day by running 88.1, a student-operated radio station. You will learn to speak and present to small and large groups, record music, produce and record announcements and gain experience in the music entertainment industry. Students have the opportunity to participate in job shadow and internships throughout the year.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>






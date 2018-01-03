<!DOCTYPE html >
<html>
<head><title>Auto Systems Technology</title>
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
$_SESSION['pagename'] = "Auto-Systems-Technology";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';

//header('Location: https://www.youtube.com/watch?v=VxuVvCbw1kA');
//exit;
//170105
?>

<!--  start youtube embed   -->
<div class="container">
      <h1>Auto Systems Technology </h1> 
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
      videoId: 'VxuVvCbw1kA'
    });
  }
</script>
<hr />
<p>
<h1 />
The Automotive Systems Technology program will train you for a variety of jobs within the industry, including automotive service industry in an environment set up like an auto service department. You will service and diagnose vehicles, gaining experience in engine fundamentals, maintenance, tune-up and repair, brake and suspension repair, and wheel alignment. The course is designed as a two-year program, providing the skills and training necessary for Automotive Service Excellence certification in brakes, suspension and steering, electrical and electronics systems, and engine performance. In preparation for advanced training in this program, students must demonstrate commitment and a professional interest in the automotive service industry.
</p>

  </div>
  
<!-- end -->




</body>
</html>

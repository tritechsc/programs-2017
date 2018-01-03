<!DOCTYPE html >
<html>
<head><title>Auto Body Technology</title>

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
$_SESSION['pagename'] = "Auto-Body-Technology";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=Ww_Y4vKJ8vY');
//exit;

?>

<div class="container">
      <h1>Auto Body Technology </h1> 
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
      videoId: 'Ww_Y4vKJ8vY'
    });
  }
</script>
<hr />
<p>
<h1 />
The Auto Body Technology program provides training in auto body work using a combination of textbook assignments, lecture, lab demonstrations, and one-on-one assistance. The program focuses on safety, tool identification and proper use, vehicle construction, minor body repair, sanding, painting components and techniques, estimating damaged vehicles, welding and other operations related to vehicle repair. You will develop the necessary technical skills, knowledge, and attitude to be successful in the industry and continued education. The program includes use of I-CAR professional training materials to meet National Automotive Technical Education Foundation requirements and standards, and earn related certifications.
</p>

  </div>

</body>
</html>

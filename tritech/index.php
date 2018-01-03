
<html>
<head>
<title>Tri-Tech Overview</title>
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
	background-color:#000;
	color: #fff;
}
</style>
</head>
<body>
<?php 
session_start(); 
$_SESSION['pagename'] = "Tri-Tech";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';

//header('Location: https://www.youtube.com/watch?v=fh93XznQfl4');

//exit;
?>
	<div class="container">
      <h1>Tri-Tech Skills Center Overview </h1> 
 
    
	
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
      videoId: '4C0MT5Ach2U'
    });
  }
</script>
<hr />
<p>
<h1>
You are about to learn of the exceptional opportunities you can take advantage of by attending TRI-TECH SKILLS CENTER. Tri-Tech partners with your high school to offer advanced technical and professional training. This tuition free training is available to all area public, private, and home-schooled students age 16-20 who has yet to receive a high school diploma.
</h1>
</p>

  </div>
</body>
</html>

<!DOCTYPE html >
<html>
<head><title>Law Enforcement</title>
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
$_SESSION['pagename'] = "Law-Enforcement";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
#header('Location: https://www.youtube.com/watch?v=MYXDLolwE7Y');
#exit;
//170105
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Law Enforcement</h1> 
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
      videoId: 'MYXDLolwE7Y'
    });
  }
</script>
<hr />
<p>
<h1 />
The Law Enforcement course is an overview of the criminal justice system and the careers available in this growing employment field such as homeland security. You will investigate the roles of local and state law enforcement agencies, federal agencies, corrections and supporting careers. Learning opportunities include: field trips to criminal justice and public service facilities. Students will receive training in critical analysis, conflict resolution, record keeping, technical writing, fingerprinting, investigative procedures, patrol procedures and criminal/traffic laws. How laws are created, the difference between criminal and civil laws, and law enforcement ethics will also be explored.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>





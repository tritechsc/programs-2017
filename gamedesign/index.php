<!DOCTYPE html >
<html>
<head><title>Game Design</title>
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
$_SESSION['pagename'] = "Game-Design";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=qXTjECpHxLY');
//exit;
//170105
?>

<!--  start youtube embed   -->
<div class="container">
      <h1>Game Design</h1> 
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
      videoId: 'qXTjECpHxLY'
    });
  }
</script>
<hr />
<p>
<h1 />
Creating technology, not just using it, is what the Video Game Design 
program is all about. The program focuses on computer animation and programming for video games. In the Video Game Design program you will be trained in object-oriented programming languages, paradigms, and software engineering techniques and practices. You will also study the core building blocks of computer mathematics using trigonometry and higher math, computer programming in C#, 2D and 3D computer animation, and computer science. Additionally, game animation and programming requires teamwork to successfully complete projects, one of many valuable skills developed in this program. Many graduates have secured positions with companies such as Nintendo, Interplay, Dreamworks Interactive, KnowWonder and Valve.
</p>
  </div>
<!-- end youtube embed -->

</body>
</html>










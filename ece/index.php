<!DOCTYPE html >
<html>
<head><title>Early Childhood Educationy</title>
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
$_SESSION['pagename'] = "Early-Childhood-Education";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=a1juZ8jSj4A');
//exit;
// 170105
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Early Childhood Education</h1> 
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
      videoId: 'a1juZ8jSj4A'
    });
  }
</script>
<hr />
<p>
<h1 />
Tri Tech’s Early Childhood Education program teaches you about working with young children. The program covers the developmental stages of pre-school children and how to create lessons and work with young children. The Tri-Tech Preschool is only laboratory preschool in the Tri-City area. You will gain hands-on experience with preschoolers in individual and group settings. Students can earn college credits towards Early Childhood degree at Columbia Basin College.
</p>
  </div>
<!-- end youtube embed -->


</body>
</html>

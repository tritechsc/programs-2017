<!DOCTYPE html >
<html>
<head><title>Cosmetology</title>
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
$_SESSION['pagename'] = "Cosmetology";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=9gudnJNrf0A');
//exit;
//170106
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Cosmetology</h1> 
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
      videoId: '9gudnJNrf0A'
    });
  }
</script>
<hr />
<p>
<h1 />
The Cosmetology program will prepare you for licensing by the Washington State Board of Cosmetology. Licensing requirements consist of theory and practical application of theory. Instruction and practice in the program include training for shampooing, scalp and hair analysis, haircutting and trimming, removal and trim of facial hair, and thermal, wet and dry styling. You will have to complete time in the adult program to become licensed. There are two options for Tri Tech students. Paul Mitchell in Richland, or Victoria’s Academy of Cosmetology in Kennewick.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>




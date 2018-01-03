<!DOCTYPE html >
<html>
<head><title>Cyber Security</title>
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
$_SESSION['pagename'] = "Cyber-Security";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';

//header('Location: https://www.youtube.com/watch?v=fh93XznQfl4');
//exit;

?>

<!--  start youtube embed   -->
<div class="container">
      <h1>Cyber Security</h1> 
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
      videoId: 'fh93XznQfl4'
    });
  }
</script>
<hr />
<p>
<h1 />
The Computer Science Cyber Security program is designed to prepare you for a career in the fast growing, high paying Cyber Security industry. You will gain knowledge and experience in computer hardware, networking, IT security and Linux. Successful students are prepared to enter the industry as an entry-level IT security administrator. The program utilizes up to date, cutting-edge web based curriculum available 24/7 allowing students to advance at their own pace, classroom instruction and hands on labs.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>












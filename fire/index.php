<!DOCTYPE html >
<html>
<head><title>Firefighting</title>
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
$_SESSION['pagename'] = "Firefighting";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=gWCh_vtVEFI');
//exit;
//170106
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Firefighting</h1> 
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
<h1 />
The Fire Fighting program introduces you to structural and wildland fire fighting and the emergency medical system. The program utilizes state of the art equipment and facilities, including an onsite training tower and fire engine. The program develops the required teamwork, leadership mental and physical skills to be a success in the fire service. You will have the opportunity to earn fire service certifications and college credit. Select students may apply for the 2nd year program where they may apply to be Conditional Volunteers and attend the Volunteer Structure Academy.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>

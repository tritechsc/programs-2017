<!DOCTYPE html >
<html>
<head><title>Dental Assisting</title>
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
$_SESSION['pagename'] = "Dental-Assisting";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=80W1chgCcyA');
//exit;
//170106
?>
<!--  start youtube embed   -->
<div class="container">
      <h1>Dental Assisting</h1> 
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
      videoId: '80W1chgCcyA'
    });
  }
</script>
<hr />
<p>
<h1 />
In the Dental Assisting program, you will learn oral anatomy, sterilization and disinfection, oral pathology, preventive dentistry and radiography. Other course objectives include chair-side procedures, impressions and study models, safety standards and regulations, observations and internships. You will need to be able to work independently in a diverse environment and as a team member. Good manual dexterity and eye-hand coordination are required. Other aids to success in this program are the ability to work under pressure and think on your feet. You will be memorizing dental terms and procedures, including anatomy and physiology. Completion of this course provides a natural vehicle for pre-requisite studies toward advanced training in dental hygiene.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>



<!DOCTYPE html >
<html>
<head><title>Pre-Veterinary Technician</title></head>
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
$_SESSION['pagename'] = "Pre-Veterinary-Technician";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=l0E-FiVlvX0');
//exit;
170105
?>
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
<!--  start youtube embed   -->
<div class="container">
      <h1>Pre-Veterinary Technician</h1> 
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
      videoId: 'l0E-FiVlvX0'
    });
  }
</script>
<hr />
<p>
<h1 />
The Pre-Veterinary Technician program is designed to prepare you to enter the animal health care field. You will become familiar with anatomy, physiology and basic terminology. Areas of training are: safety and zoonotic diseases, restraint techniques, physical examination and patient history, client education and dental care. The program includes both theory and practical application of skills and concepts. You will gain hands on experience in area clinics. After completion of the program, the you’ll be well prepared to enter a college Vet Tech program or have a good start on your way to becoming a veterinarian.
</p>
  </div>
<!-- end youtube embed -->
</body>
</html>



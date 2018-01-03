<!DOCTYPE html >
<html>
<head><title>Careers in Health Care</title>
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
$_SESSION['pagename'] = "Careers-in-Health-Care";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';
//header('Location: https://www.youtube.com/watch?v=tMdgQStiqsg');
//exit;
//170106
?>
</body>
</html>
<!--  start youtube embed   -->
<div class="container">
      <h1>Careers in Health Care</h1> 
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
      videoId: 'tMdgQStiqsg'
    });
  }
</script>
<hr />
<p>
<h1 />
From entry level positions in a hospital or health care facility to the chief executive, the career opportunities are limitless for those who enjoy working with people and are good with technology. The Careers in Healthcare program is designed for students interested in a health care career but not in hands-on patient care. To be successful, you must be proficient in basic vitals, anatomy, physiology, medical terminology, medical coding, electronic records, scheduling/reception, and all information privacy requirements. You will have the opportunity to participate in off-site internships. Careers in Healthcare specialists will work in hospitals, physician offices, medical billing companies, insurance companies and electronic medical records companies.

</p>
  </div>
<!-- end youtube embed -->

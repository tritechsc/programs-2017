<!DOCTYPE html >
<html>
<head><title>Culinary Arts</title>
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
$_SESSION['pagename'] = "Culinary-Arts";
include '../db/db.php'; include '../db/error.php'; 
include '../db/pushprogram.php';

//header('Location: https://www.youtube.com/watch?v=ViObXK_cbLc');

//exit;
//170105
?>

<!--  start youtube embed   -->
<div class="container">
      <h1>Culinary Arts </h1> 
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
      videoId: 'ViObXK_cbLc'
    });
  }
</script>
<hr />
<p>
<h1 />
Culinary Arts at Tri-Tech is designed to prepare you for a promising career in the food or hospitality industry. Your training will prepare you to work in restaurants, hotels and resorts. Participants learn kitchen procedures, sanitation and safety, dining room service, menu planning and costing, baking and food preparation, banquet and catering service, hosting and storeroom management. The well-respected Sodexo Corporation is an instruction partner for this program. You will receive training towards American Culinary Federation Certification.
</p>
  </div>
<!-- end youtube embed -->


</body>
</html>















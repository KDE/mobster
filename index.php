<?php

/*
   if ($_SERVER["SERVER_NAME"] == "kubuntu.plasma-mobile.org") {
      Header( "HTTP/1.1 301 Moved Permanently" );
      header("location: http://neon.plasma-phone.org"); 
   }
*/

?>
<!DOCTYPE html>
<html>
<head>
<title>Plasma Mobile Images</title>
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<style>
pre {
      background: white;
      border: thin dashed #C6DDFF;
    }
body {
     font-family: 'Oxygen';
     background: #F1FFFD;
     background-image: url(15020612107_4561b13fff_k.jpg);
     background-size: cover;
     padding: 0px;
}
.opacity {
     opacity: 0.8;
     background-color:#ffffff;
     margin: 0px;
     padding: 20px;
     animation-name: dropHeader;
     animation-iteration-count: 1;
     animation-timing-function: ease-in;
     animation-duration: 0.5s;
}
@keyframes dropHeader {
  0% {
    transform: rotateX(180deg) rotateZ(180deg);
  }
  100% {
    transform: rotateX(0deg) rotateZ(0deg);
  }
}
</style>

</head>
<body>
<div class="opacity">
<a href="http://plasma-mobile.org/"><img src="plasma-mobile-logo.png" width="491" height="170" /></a>
<!-- <img src="neon.png" width="218" height="205" /> -->
<h1>Plasma Mobile Reference Images</h1>

<p>All very experimental</p>

<p>Get a Nexus 5 and unlock it, put into firmware mode and run:</p>

<code>ubuntu-device-flash --server="http://kubuntu.plasma-mobile.org/" touch --channel="neon-mobile/devel" --bootstrap --developer-mode --password 1234
</code>
<p>
Last Available Image :
<?php
$string = file_get_contents("neon-mobile/devel/hammerhead/index.json");
$json = json_decode($string, true);
echo $json["images"][0]["description"];
?>
</p>

<p>or for latest dev image run:</p>

<code>ubuntu-device-flash --server="http://kubuntu.plasma-mobile.org/" touch --channel="neon-mobile/devel-proposed" --bootstrap --developer-mode --password 1234
</code>
<p>
Last Available Image :
<?php
$string = file_get_contents("neon-mobile/devel-proposed/hammerhead/index.json");
$json = json_decode($string, true);
echo $json["images"][0]["description"];
?>
</p>

<p>and log in with <code>adb shell</code></p>

<ul>
<li><a href="neon-mobile">plasma-mobile reference images meta files</a></li>
<li><a href="pool">pool files</a></li>
</ul>

<p>More information on <a href="https://community.kde.org/Plasma/Mobile/">Plasma Mobile wiki pages</a>.</p>

</div>
</body>
</html>


<?php

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");

echo "
<body>
<div id='wrapper'>
<div id='top'><div id='logo'></div></div>
<div id='content'>
<h1>Online Cryptographical Tool</h1>
<div id='left-nav'>";
include("left-nav.php");

echo "
</div>
<div id='main'>
<table><tr><td>
<p>
Online cryptographical tool provides various cryptography algorithms and various hash functions.This tool cannot track the user activities.The cryptosystem performs all operation at client side in order to ensure the confidentality of the users information.If the client information is saved at server there is a scope of cryptanalysis.Please take care of your data and save them because we are here for providing you facility to utilize, not to break your privacy </p>
<td>
<video width=400 controls>
  <source src=oct.mp4 type=video/mp4>
</video>
</div>
</table>
<div id='bottom'></div>
</div>
</body>
</html>";

?>

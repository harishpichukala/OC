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
<br><h2><marquee><font color=red>CryptoSystem</font></marquee></h2>
<div id='left-nav'>";
include("left-nav.php");
echo "
</div>
<div id='main'>
<table>
<tr>
<td>
<a href=hashes.php target=_blank>hashes</a>
<td><a href=affine.php target=_blank>affine</a>
<td><a href=caser.php target=_blank>caser</a><br>
<tr>
<td><a href=aes.php target=_blank>AES</a>
<td><a href=des.php target=_blank>DES</a>
<td><a href=rabbit.php target=_blank>Rabbit</a><br>
<tr>
<td><a href=vigenere.php target=_blank>vigenere</a>
<td><a href=tutorials.php target=_blank>Tutorials</a>
</table><br><br>
<video width=400 controls>
  <source src=mov.mp4 type=video/mp4>
</video>

</div>
<div id='bottom'></div>
</div>
</body>
</html>";

?>

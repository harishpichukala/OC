<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header1.php");

echo "
<h1>Tutorials</h1><ul>
<li><a href=mc.docx>WHAT IS CRYPTOGRAPHY</a>
<li><a href=c.docx>CASER</a>
<li><a href=v.docx>VIGENERE</a>
<li><a href=a.docx>Affine</a><br>
<li><a href=h.htm>Hash Functions</a><br>
<table><tr><td>
AES:<br>
<video width=400 controls>
  <source src=aes.mp4 type=video/mp4>
</video>
<br><td>
DES:<br>
<video width=400 controls>
  <source src=des.mp4 type=video/mp4>
</video>
<tr><td>
hashes:<br>
<video width=400 controls>
  <source src=hmac.mp4 type=video/mp4>
</video>
</table>
</ul></body>
</html>";
?>
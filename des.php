<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header1.php");

echo 
"
<script src=CryptoJS/rollups/tripledes.js></script>
<script src=CryptoJS/components/core-min.js></script>
<script src=CryptoJS/components/enc-utf16-min.js></script>
<script src=CryptoJS/components/enc-base64-min.js></script>

<script>
function desencrypt()
{

var msg=document.f.m.value;
var key=document.f.k.value;
var cipher=DES_ENCRYPT(msg,key);
document.f.m.value=cipher;
}
function desdecrypt()
{
var msg=document.f.m.value;
var key=document.f.k.value;
var pt=DES_DECRYPT(msg,key);
document.f.m.value=pt;
}
function DES_ENCRYPT(msg,key)
{
var encrypted = CryptoJS.DES.encrypt(msg,key);
return encrypted;
}

function DES_DECRYPT(cipher,key)
{
var decrypted = CryptoJS.DES.decrypt(cipher,key);
var plaintext=decrypted.toString(CryptoJS.enc.Utf8);
alert(plaintext);
return plaintext;
}

</script>
</head>
<body><center>
<h1><font color=red>DES</font></h1><hr>
<form name=f>
Enter Text:<br><textarea name=m rows=9 cols=20></textarea><br><br>
Enter key:<input type=text name=k><br><br>
<input type=button value=encrypt onclick=desencrypt()>
<input type=button value=decrypt onclick=desdecrypt()>
</form>
</body>
</html>";
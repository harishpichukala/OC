<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header1.php");
echo 
"<script src=CryptoJS/rollups/rabbit.js></script>
<script src=CryptoJS/components/core-min.js></script>
<script src=CryptoJS/components/enc-utf16-min.js></script>
<script src=CryptoJS/components/enc-base64-min.js></script>
<script>
function rencrypt()
{   
msg=document.f1.k.value;
   key=document.f1.key.value;
 
 var encrypted = CryptoJS.Rabbit.encrypt(msg,key);
alert(encrypted);
document.f1.k.value=encrypted;
}
function rdecrypt()
{
cipher=document.f1.k.value;
   key=document.f1.key.value;
    var decrypted = CryptoJS.Rabbit.decrypt(cipher,key);
alert(decrypted);
var plaintext=decrypted.toString(CryptoJS.enc.Utf8);
alert(plaintext);
document.f1.k.value=plaintext;

}


</script>
</head>
<body><center>
<h1><font color=red>RABBIT</h1></font><hr>
<form name=f1>
Enter Text:<br><textarea  name=k rows=10 cols=30 required></textarea><br><br>
Enter Key: <input type=text name=key required><br><br>
<input type=button value=encrypt onclick=rencrypt()>
<input type=button value=decrypt onclick=rdecrypt()>
</form>
</center>
</body>
</html>";
?>

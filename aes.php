<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header1.php");

echo "
<script src=CryptoJS/rollups/aes.js></script>
<script>
function AES_ENCRYPT(msg,key){
    var JsonFormatter = {
        stringify: function (cipherParams) {
            // create json object with ciphertext
            var jsonObj = {
                ct: cipherParams.ciphertext.toString(CryptoJS.enc.Base64)
            };

            // optionally add iv and salt
            if (cipherParams.iv) {
                jsonObj.iv = cipherParams.iv.toString();
            }
            if (cipherParams.salt) {
                jsonObj.s = cipherParams.salt.toString();
            }

            // stringify json object
            return JSON.stringify(jsonObj);
        },

        parse: function (jsonStr) {
            // parse json string
            var jsonObj = JSON.parse(jsonStr);

            // extract ciphertext from json object, and create cipher params object
            var cipherParams = CryptoJS.lib.CipherParams.create({
                ciphertext: CryptoJS.enc.Base64.parse(jsonObj.ct)
            });

            // optionally extract iv and salt
            if (jsonObj.iv) {
                cipherParams.iv = CryptoJS.enc.Hex.parse(jsonObj.iv)
            }
            if (jsonObj.s) {
                cipherParams.salt = CryptoJS.enc.Hex.parse(jsonObj.s)
            }

            return cipherParams;
        }
    };

    var encrypted = CryptoJS.AES.encrypt(msg,key, { format: JsonFormatter });

    //alert(encrypted); 
	
	return encrypted;


    //alert(decrypted.toString(CryptoJS.enc.Utf8)); // Message
}

function AES_DECRYPT(cipher,key){
    var JsonFormatter = {
        stringify: function (cipherParams) {
            // create json object with ciphertext
            var jsonObj = {
                ct: cipherParams.ciphertext.toString(CryptoJS.enc.Base64)
            };

            // optionally add iv and salt
            if (cipherParams.iv) {
                jsonObj.iv = cipherParams.iv.toString();
            }
            if (cipherParams.salt) {
                jsonObj.s = cipherParams.salt.toString();
            }

            // stringify json object
            return JSON.stringify(jsonObj);
        },

        parse: function (jsonStr) {
            // parse json string
            var jsonObj = JSON.parse(jsonStr);

            // extract ciphertext from json object, and create cipher params object
            var cipherParams = CryptoJS.lib.CipherParams.create({
                ciphertext: CryptoJS.enc.Base64.parse(jsonObj.ct)
            });

            // optionally extract iv and salt
            if (jsonObj.iv) {
                cipherParams.iv = CryptoJS.enc.Hex.parse(jsonObj.iv)
            }
            if (jsonObj.s) {
                cipherParams.salt = CryptoJS.enc.Hex.parse(jsonObj.s)
            }

            return cipherParams;
        }
    };

    
    var decrypted = CryptoJS.AES.decrypt(cipher,key, { format: JsonFormatter });

    //alert(decrypted.toString(CryptoJS.enc.Utf8)); // Message
    return decrypted.toString(CryptoJS.enc.Utf8);
}
function aesencrypt()
{

var msg=document.f.m.value;
var key=document.f.k.value;
var cipher=AES_ENCRYPT(msg,key);
document.f.m.value=cipher;
}
function aesdecrypt()
{
var msg=document.f.m.value;
var key=document.f.k.value;
var pt=AES_DECRYPT(msg,key);
document.f.m.value=pt;
}


</script>
</head>
<body>
<div id=wrapper>
<div id=top><div id='logo'></div></div>
<div id='content'>
<h1>Online Cryptographical Tool</h1>
<br><h2><marquee><font color=red>CryptoSystem</font></marquee></h2>
<div id='left-nav'>";
include('left-nav.php');
echo "
</div>
<div id='main'>
<form name=f>
Enter Text:<br>
<textarea name=m rows=9 cols=20></textarea><br><br>
Enter key:<input type=text name=k><br><br>
<input type=button value=encrypt onclick=aesencrypt()>
<input type=button value=decrypt onclick=aesdecrypt()>
</form></center>
</body>
</html>";
?>
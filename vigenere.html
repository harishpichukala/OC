<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header1.php");

echo "
<script type='text/javascript'> 
function vEncrypt() {
    plaintext = document.f1.p.value.toLowerCase().replace(/[^a-z]/g, '');  
    k = document.f1.k.value.toLowerCase().replace(/[^a-z]/g, ''); 
    // do some error checking
    if(plaintext.length < 1){ alert('please enter some plaintext (letters and numbers only)'); return; }    
    if(k.length <= 1){ alert('keyword should be at least 2 characters long'); return; }
    ciphertext='';
    for(i=0; i<plaintext.length; i++){ 
        ciphertext += String.fromCharCode((((plaintext.charCodeAt(i)-97) + (k.charCodeAt(i%k.length)-97)+26)%26)+97); 
    } 
    document.f1.p.value = ciphertext; 
} 
 
function vDecrypt() { 
    ciphertext = document.f1.p.value.toLowerCase().replace(/[^a-z]/g, '');  
    k = document.f1.k.value.toLowerCase().replace(/[^a-z]/g, ''); 
    // do some error checking 
    if(ciphertext.length < 1){ alert('please enter some ciphertext (letters and numbers only)'); return; }    
    if(k.length <= 1){ alert('keyword should be at least 2 characters long'); return; }
    plaintext='';
    for(i=0; i<ciphertext.length; i++){ 
        plaintext += String.fromCharCode((((ciphertext.charCodeAt(i)-97) - (k.charCodeAt(i%k.length)-97)+26)%26)+97); 
    } 
    document.f1.p.value = plaintext; 
} 
</script>
</head>
<body><center>
<h1><font color='red'>VIGENERE</font></h1><hr>
<form name=f1>Enter text:<br>
<textarea id=p rows=4 cols=50 wrap=soft>defend the east wall of the castle</textarea> <br>
<p> keyword = <input id=k name=k size=20 value=fortification type=text></p> <br>
<p><input id=e name=e value=Encrypt onclick=vEncrypt() type=button> 
<input id=d name=d value=Decrypt onclick=vDecrypt() type=button></p> 
</center>
</form>
 </body>
</html>";
?>
<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header1.php");
echo 
"<script type=text/javascript> 
function Encrypt() {
    plaintext = document.f1.p.value.toLowerCase();  
    if(plaintext.length < 1){ alert('please enter some plaintext'); return; }    
    var shift = parseInt(document.f1.key.value);
    ciphertext = '';    var re = /[a-z]/;
    for(i=0; i<plaintext.length; i++){ 
        if(re.test(plaintext.charAt(i))) ciphertext += String.fromCharCode((plaintext.charCodeAt(i) - 97 + shift)%26 + 97); 
        else ciphertext += plaintext.charAt(i); 
    } 
    document.f1.p.value = ciphertext; 
} 
 
function Decrypt(f) { 
    ciphertext =document.f1.p.value.toLowerCase();
    // do some error checking 
    if(ciphertext.length < 1){ alert('please enter some ciphertext (letters only)'); return; }    
    var shift = parseInt(document.f1.key.value);
    plaintext = '';    var re = /[a-z]/;
    for(i=0; i<ciphertext.length; i++){ 
        if(re.test(ciphertext.charAt(i))) plaintext += String.fromCharCode((ciphertext.charCodeAt(i) - 97 + 26 - shift)%26 + 97); 
        else plaintext += ciphertext.charAt(i); 
    } 
    document.f1.p.value = plaintext; 
} 
</script>
</head>
<body>
<h1><font color=red>Caser cipher</font></h1>
<form name=f1>
Enter Text:<br>
<textarea id=p name=p rows=4 cols=50>attack at dawn</textarea> 
<p>  enter the key(0-26):<input type=text name=key >


<p><input name=btnEn value=Encrypt onclick=Encrypt() type=button > 
<input name=btnDe value=Decrypt onclick=Decrypt() type=button ></p> 
</center>
</form>
</body>
</html>";
?>
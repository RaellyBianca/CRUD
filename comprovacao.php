<?php

$passwordform = "12345678gwert";
//Sempre a mesma criptografia
echo md5($passwordform).'<br>';
//Criptografia com senha hash
echo sha1($passwordform).'<br>';

echo password_hash($passwordform, PASSWORD_DEFAULT).'<br>';

password =  password_hash ($passwordform, PASSWORD_DEFAULT);

if(password_verify("123456789",$passwordbd)){
    echo "Password correto";
}
else{
    echo "Password incorreto";
}


?>
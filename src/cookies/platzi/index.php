<?php 

if(!isset($_COOKIE["example_cookie"])){
  setcookie(
    name: "example_cookie",
    value: "text",
    expires_or_options:0,
    // expires_or_options: time() + 60*60*24,
    path: "/",// /:Siempre disponible en todo el sitio, /setting Solo disponible en /setting. 
    // El path se configura a partir del dominio.
    // Si se configura en /setting, todo los subdominios a apartir de /setting estará disponible la cookie
    domain:"localhost",//dominio donde estara disponible
    secure:false, //true: solo se define si el dominio tiene un certificado ssl
    httponly:true,//true: disponible en html, false: no disponible para javascript
  );
}

echo "Cookie create!";

echo "<pre>";

var_dump($_COOKIE);

echo "</pre>";

?>
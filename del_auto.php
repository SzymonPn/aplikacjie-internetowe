<?php 
function checkCookie($cookie_name){
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    };
};
setcookie("auto","cupra",time()-24*60*60*2);
checkCookie("auto");
?>
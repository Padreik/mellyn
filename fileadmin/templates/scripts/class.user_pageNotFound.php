<?php
define(LOGIN_URL, "http://mellyn.pgirard.net/index.php");
define(NOTFOUND_URL, "http://mellyn.pgirard.net/");

class user_pageNotFound {
 function pageNotFound($param, $ref) {
   if ($param["pageAccessFailureReasons"]["fe_group"] != array(""=>0)) {
     header("HTTP/1.0 403 Forbidden");
     $url = LOGIN_URL."?redirect_url=" . $param["currentUrl"];
   } else {
     $url = NOTFOUND_URL;
   }

   header("Location:$url");
 }
}
?> 

 <?php
if (!function_exists('ourl_decode')) { 

      function ourl_decode($str) {
         //return $str;
         $str = base64_decode(strtr($str, '-_,', '+/='));
         for ($i = 1; $i < 9; $i++) {
             $str = base64_decode($str);
         }
         return urldecode($str);
     }

 }

if (!function_exists('ourl_encode')) { 
    function ourl_encode($str) {
         for ($i = 1; $i < 9; $i++) {
             $str = base64_encode($str);
         }
         return urlencode(strtr(base64_encode($str), '+/=', '-_,'));
     }
 
}
?>
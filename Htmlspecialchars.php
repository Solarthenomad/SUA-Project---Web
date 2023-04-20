<?php 

   $string = '<a href = "http://www.ewha.ac.kr/">이화여대</a>';
   $result = htmlspecialchars($string, ENT_QUOTES);
   print $result;

?>
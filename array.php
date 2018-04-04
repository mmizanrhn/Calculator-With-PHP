<!--  PHP 5 Multidimensional Arrays  -->
<?php
$cars = array(
  array("BMW","22","17"),
  array("TOYOTA","12","27"),
  array("PREMIO","18","15"),
  array("LEXUS","12","17")
  );

  echo $cars[0][0]." Stocks ".$cars[0][1]." Sold ".$cars[0][2]."<br>";
  echo $cars[1][0]." Stocks ".$cars[1][1]." Sold ".$cars[1][2]."<br>";
  echo $cars[2][0]." Stocks ".$cars[2][1]." Sold ".$cars[2][2]."<br>";
  echo $cars[3][0]." Stocks ".$cars[3][1]." Sold ".$cars[3][2];

?>
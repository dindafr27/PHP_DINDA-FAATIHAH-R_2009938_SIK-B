<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Chocolate",3,30),
  array("Marshmallow",25,10),
  array("Regal",19,50),
  array("Lotus",10,30)
);
  
echo $cars[0][0].": Available: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": Available: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": Available: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": Available: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>

</body>
</html>
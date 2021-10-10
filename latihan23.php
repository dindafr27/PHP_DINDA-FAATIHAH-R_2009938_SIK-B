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
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

</body>
</html>

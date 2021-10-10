<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and you will recieve this message to mood up your day:</p>";

if ($t < "10") {
  echo "Have a blessed morning!";
} elseif ($t < "20") {
  echo "Have a blessed day!";
} else {
  echo "Have a blessed night!";
}
?>
 
</body>
</html>

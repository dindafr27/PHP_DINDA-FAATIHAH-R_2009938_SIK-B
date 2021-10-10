<!DOCTYPE html>
<html>
<body>

<?php
$str = "Let go to the movie!";
$pattern = "/movie/i";
echo preg_replace($pattern, "park", $str);
?>

</body>
</html>

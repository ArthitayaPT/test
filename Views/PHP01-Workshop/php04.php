<!DOCTYPE html>
<html>
<head>
<title>HTML01</title>
</head>
<body>
<?php
echo "String : ".$total = "Software Engineering";
$total = array_count_values( str_split( $total ) );
arsort( $total );
echo "<br>";

echo "Largest Character : ".array_values( $total )[0]."<br>";
echo "For the Character : ".array_keys( $total )[0];
?>
</body>
</html>
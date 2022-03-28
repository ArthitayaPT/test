<!DOCTYPE html>
<html>
<head>
<title>PHP03</title>
</head>
<body>
<?php
 $arry = array("red","green","yellow","blue","pink","black","white");
 echo "MyArray Value : ";
 foreach($arry as $value){
    echo "$value " ;
}
 echo "<br>" ;
 $reverse = array_reverse($arry);
 echo "Expected Value : ";
 foreach($reverse as $value){
     echo "$value " ;
 }
?>
</body>
</html>
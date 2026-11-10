<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Variables Demo</h1>
    <p>
<?php
// integer variable 
$integer1 = 12;
$integer2 = 34;
// string variable
$string1 = "first string";
$string2 = "second string";
// float variable
$float1 = 1.23;
$float2 = 4.56;
// boolean variable
$bool1 = true;
// array variable
$array1 = array("one", "two", "three");
$array2 = array(4, 5, 6);


echo "integer addition: " . ($integer1 + $integer2);
echo "<br/>";
echo "string concatenation: " .$string1 . " " . $string2. "!";
echo "<br/>";
echo "float division: " . ($float1/$float2);
echo "<br/>";
echo "boo1 evaluation: ";
var_export($bool1);
echo "<br/>";
echo "array display:" .$arr1[2];
echo "<br/>";
echo "array display:" .$arr2[2];

?>
</p>

    

</body>
</html>
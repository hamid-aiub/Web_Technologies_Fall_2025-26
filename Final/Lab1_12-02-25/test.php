

<html>
<?php 
$name = "Webtechnology";
echo "<h1><i>Hi, this is echo from php </i></h1>";
echo "This is $name course";

$courses = array("WT", "DS", "IP", "OOP1", "OOP2");

$len = count($courses);
echo "</br>";
for($i = 0; $i < $len; $i++){
    $position = $i + 1;
    echo "Course $position is $courses[$i] </br>";
}
$hasResultPublished = true;
echo "</br>";
if($hasResultPublished){
    echo "The result has been published";
}else{
    echo "The result has not been published yet";
}

?>
<body>
    <h1>Hello, this is introduction to PHP</h1>
</body>
</html>
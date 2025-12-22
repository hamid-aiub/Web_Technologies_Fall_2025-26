<html>
    <head>
        <title>Into to PHP</title>
    </head>

    <?php 
    $name = "AIUB";
    echo "I have passed from $name";
        echo "<h2><i>Hi, this is printing from php echo</i></h2>";

    $isPassed = false;

    if($isPassed){
        echo "yes, he passed";
    }else{
        echo "He failed";
    }
    echo "</br>";
    $courses = array("DS", "OOP1", "WT");
    $count = count($courses);
    for($i = 0; $i < $count; $i++){
        $position = $i +1;
        echo "$position : $courses[$i] </br>";
    }

    $n = 3;

    while($n >= 0 ){
        $position = $n;
        echo "<h1 style='color:red;'>$position</h1>";
        $n--;
    }

    ?>


    <body>
        <h1>Hello, this is my first php application</h1>
    </body>
</html>
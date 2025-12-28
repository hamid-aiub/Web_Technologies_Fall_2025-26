<html>
    <?php 
    echo "<h1 style='color:green'>Hello world</h1>";

    $university = "American International University Bangladesh";
     
    $test = substr($university,0,8);
    $tt = str_replace("University", "Play Station", $university);

    echo "<br>$tt <br>";

    function Test($a, int $b){
        return $a+ $b;
    }
    $sum = Test(10.5, 20);
    echo "$sum";
    


    ?>
    <body>
        <h1>Hi, this is my first title</h1>
    </body>
</html>
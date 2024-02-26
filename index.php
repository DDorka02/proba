<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>
    <?php
        echo ('<h1>Ezt a PHP alapok.</h1>');
        print ('<h2>print eredménye</h2>');
        echo ('<p>Ezt a PHP írta.</p>');
        define("GREETING","Hello you! How are you today?");
        echo constant("GREETING");
        $szoveg1 = 'Fáradt'; 
        $szoveg2 = "vagyok";
        echo "<br>  A két szöveg együtt: ".$szoveg1." ".$szoveg2;
        echo "<br>2.A két szöveg együtt: $szoveg1 $szoveg2";
        $tort1 = 3.56;
        $tort2 = 3.44;
        echo "<br>  A két szám összege: ".$tort1+$tort2;
        $alap = 2.0;
        $kitevo =3;
        echo "<br>A $alap a $kitevo hatványon:" .pow($alap,$kitevo);
        $logikai1 = true;
        $logikai2 = false;
        echo "<br  >A két logikai érték: $logikai1 $logikai2";
        echo '0:        '.(boolval(0) ? 'true' : 'false')."<br>";
        echo '42:       '.(boolval(42) ? 'true' : 'false')."<br>";
        echo '0.0:      '.(boolval(0.0) ? 'true' : 'false')."<br>";
        echo '4.2:      '.(boolval(4.2) ? 'true' : 'false')."<br>";
        echo '"":       '.(boolval("") ? 'true' : 'false')."<br>";
        echo '"string": '.(boolval("string") ? 'true' : 'false')."<br>";
        echo '"0":      '.(boolval("0") ? 'true' : 'false')."<br>";
        echo '"1":      '.(boolval("1") ? 'true' : 'false')."<br>";
        echo '[1, 2]:   '.(boolval([1, 2]) ? 'true' : 'false')."<br>";
        echo '[]:       '.(boolval([]) ? 'true' : 'false')."<br>";
        echo 'stdClass: '.(boolval(new stdClass) ? 'true' : 'false')."<br>";
        $a = array("red", "green", "blue");
        print_r($a);
        var_dump($a);
        $tomb0 = array(1,2,3,4,5);
        $tomb1 = array();
        $tomb2[0] = "Ady Endre";
        $tomb2[1] = "József Attila";
        $tomb3 = ["Milan Kundera", "Hermann Hesse"];
        echo "<br>1. tömb:";
        print_r($tomb0);
        echo "<br>2. tömb";
        print_r($tomb1);
        echo "<br>3. tömb:";
        print_r($tomb2);
        $tomb2[] = "Tóth Árpád";
        array_push($tomb2, "Tóth Árpád");
        $elemSzam = count($tomb2);
        $tomb4 = array_merge($tomb2, $tomb3);
        echo ("<br>");
        $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        print_r($b);
        $tomb1["elso"]="Ady";
        $tomb1["masodik"]="József";
        $tomb1["masodik"]="Karinthy";
        #echo $a;
        echo ("<br>");
        define('ANIMALS', array(
            'dog',
            'cat',
            'bird'
        ));
        echo ANIMALS[1];
        

    ?>
</body>
</html>
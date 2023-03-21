<html>

<body>

    <?php
    echo "Hello World" . "<br>";

    $text = "Hello World" . "<br>";
    echo $text;


    //If else with with operators

    $marks = 20;

    if ($marks >= 80 && $marks <= 100) {
        echo "You got A+";
    } elseif ($marks >= 70 && $marks <= 79) {
        echo "You got A";
    } elseif ($marks >= 60 && $marks <= 69) {
        echo "You got A-";
    } elseif ($marks >= 50 && $marks <= 59) {
        echo "You got B";
    } elseif ($marks >= 40 && $marks <= 49) {
        echo "You got C";
    } elseif ($marks >= 33 && $marks <= 39) {
        echo "You got D";
    } elseif ($marks >= 0 && $marks <= 32) {
        echo "You got F" . "<br>";
    } else {
        echo "invalid Number";
    }


    //switch 

    $x = 1;
    switch ($x) {
        case 1:
            echo "Number 1" . "<br>";
            break;
        case 2:
            echo "Number 2";
            break;
        case 3:
            echo "Number 3";
            break;
        default:
            echo "No number between 1 and 3";
    }

    //Numeric Array

    //Assigned automatically$cars=array ("Saab","Volvo","BMW","Toyota");
    //Referring to the array name and index
    $cars[0] = "Saab";
    $cars[1] = "Volvo";
    $cars[2] = "BMW";
    $cars[3] = "Toyota";

    echo $cars[2] . " and " . $cars[1] . " are Swedish cars." . "<br>";


    //Associative Arrays

    $ages['A'] = "20";
    $ages['B'] = "21";
    $ages['C'] = "23";

    echo "A is " . $ages['A'] . " years old." . "<br>";



    //Multidimensional Arrays

    $earth = array(
        "Bangladesh" => array(
            "Dhaka",
            "Khulna"
        ),
        "India" => array(
            "Mumbai",
            "Chennai"
        ),
        "Brown" => array(
            "Cleveland",
            "Loretta"
        )
    );

    echo "Is " . $earth['Bangladesh'][1] ." ". "a part of Earth" . "<br>";



    //while loop
    $i = 1;
    while ($i <= 5) {
        echo "The number is " . $i . "<br>";
        $i++;
    }

    //do while loop


    $i = 1;
    do {
        $i++;
        echo "The number is " . $i . "<br>";
    } while ($i <= 5);



    //for loop


    for ($i = 1; $i <= 5; $i++) {
        echo "The number is " . $i . "<br>";
    }


    //foreach loop

    $x = array("one", "two", "three");
    foreach ($x as $value) {
        echo $value . "<br>";
    }



    //Functions

    function writeName()
    {
        echo "Sakib";
    }
    echo "My name is ";
    writeName();


    //Adding parameter in function



    function write_name($fname)
    {
        echo $fname . "<br>";
    }
    echo "<br>" . "My name is ";
    write_name("Sakib");
    echo "My sister's name is ";
    write_name("Fatima");
    echo "My sister's name is ";
    write_name("Lopa");

    //Adding two parameter


    function write_a_name($f_name, $punctuation)
    {
        echo $f_name . $punctuation . "<br />";
    }
    echo "My name is ";
    write_a_name("Sakib", ".");
    echo "My sister's name is ";
    write_a_name("Fatima", "!");
    echo "My sister's name is ";
    write_a_name("Lopa", "!!");


    ?>


















</body>

</html>
<h1>
    <?php
    echo "hello World";
    
    $output = 'Hello Mr Mark !';
    echo $output;
    $num1 = 5;
    echo $num1;
    $floatValue = 2.5;
    echo $floatValue;
    $booleanValue = true;
    $anotherBool = false;
    echo $booleanValue;
    echo $anotherBool;
    $number1 = 20;
    $number2 = 40;
    $sum = $number1+$number2;
    echo $sum;

    $string1 = "Mark";
    $string2 = "Zuckerbarg";
    echo $number1+$number2;
    $fullString = $string1 . ' ' . $string2;
    echo $fullString;

    $easierWay = '$string1 $string2'; // it prints exactly what is there in the single quotes. $string1 $string2
    echo $easierWay;
    $perfectEasierWay = "$string1 $string2";
    echo $perfectEasierWay;   //Mark Zuckerbarg
    $string3 = 'They\'re here';
    echo $string3;
    $string4 = "ther\'are here !";
    echo $string4;
    $string5 = "He said, \"Hey Sandeep!\".";
    echo $string5;
    define('Greeting','Hello, everyone !');
    echo Greeting; // not echo $GREETING. $ must not be used in constant.
    ?>
</h1>
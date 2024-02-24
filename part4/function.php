<?php
function simpleFunction(){
    echo 'Hello World';
}
simpleFunction();
function sayHello($name){
    echo "hello $name <br>";
}
sayHello("Niharika");
sayHello('Vishal Babu');
function newFunction($name = 'World') {
    echo "Hello $name <br>";
}
newFunction();
newFunction("Niharika");
function addNumbers ($num1, $num2) {
    echo $num1 + $num2;
}
addNumbers(2, 3);
echo '<br>';
function subNumber($num1, $num2) {
    return $num1 - $num2;
}

echo subNumber(5, 2);

echo '<br>';
$myNum =10;
function addFive($num){
    $num +=5;
}
function addTen(&$num){
    $num+=10;
}
addFive($myNum);
echo "Value: $myNum <br>";
addTen($myNum);
echo "Value: $myNum <br>";
?>
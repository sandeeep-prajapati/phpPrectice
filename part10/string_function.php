<?php
$output = substr('Hello',1);
echo $output;
echo '<br>';
$output = substr('Hello', 0);
echo $output; // Hello
echo '<br>';
$output = substr('Hello',3);
echo $output;
echo '<br>';
$output = substr('Hello',1,3);
echo $output;
echo '<br>';
$output = substr('Hello',-2);
echo $output;
echo '<br>';
$output = strpos('Hello World','o');
echo $output;
echo '<br>';
$output = strrpos('Hello World', 'o');
echo $output;
echo '<br>';
$text = 'Hello World';
var_dump($text);
echo '<br>';

$output = strtoupper('Hello World');
echo $output;
echo '<br>';
$output = strtolower('Hello World');
echo $output;
echo '<br>';
$output = ucwords('hello world');
echo $output;
echo '<br>';

$text = 'Hello World';
$output = str_replace('World', 'Everyone', $text);
echo $output;
echo '<br>';
$val = 'Hello';
$output = is_string($val);
echo $output;
echo '<br>';
$val2 = 2;
$output = is_string($output);
echo $output;
echo '<br>';
$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
foreach($values as $value) {
    if(is_string($value)) {
        echo "{$value} is a string <br>";
    }
}
$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Voluptas officia id maiores debitis laudantium provident nisi placeat ducimus 
    delectus totam, unde quis cum necessitatibus minus suscipit praesentium explicabo 
    repellat autem. Quisquam adipisci animi aut temporibus nulla, quos voluptatem 
    possimus, inventore vero neque vitae molestias dolores? Accusamus delectus maiores quia 
    temporibus?";
$compressed = gzcompress($string);
echo $compressed; // unreadable but compressed text
echo '<br>';

// uncompressing
$original = gzuncompress($compressed);
echo $original;
echo '<br>';
?>
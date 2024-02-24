<?php
for($i= 0;$i<=10;$i++){
    echo 'Number '.$i;
    echo '<br>';
}
$i = 0;
while($i <10){
    echo $i;
    echo '<br>';
    $i++;  
}
$i = 0;
do {
    echo $i;
    echo '<br>';
    $i++;
}
while ($i < 10);
$people = array('Niharika','Aditya','Subhi','Sandeep');
foreach($people as $p){
    echo $p;
    echo '<br>';
}
$morePeople = array(
    'Niharika' => 'Niharika@gmail.com',
    'Aditya' => 'Aditya@gmail.com',
    'Subhi' => 'Subhi@gmail.com',
    'Sanddep' => 'Sandeep@gmail.com'
);

foreach ($morePeople as $singlePeople => $email) {
    echo $singlePeople . ' : ' . $email;
    echo '<br>';
}
?>
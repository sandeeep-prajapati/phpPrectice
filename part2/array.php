<?php
    $people = array('Sanddep', 'Ujjwal', 'Om');
    echo $people[1];
    echo $people[0];
    $ids = array(23,55,12);
    echo $ids[1];
    $cars = ['Honda', 'Toyota', 'Ford'];
    echo $cars[1];
    $cars[3] = 'Chevy';
    echo $cars[3];
    $cars[] = 'BMW'; // automatically saves to the new latest index position
    echo $cars[4];

    echo count($cars);
    print_r($cars);
    // (
    //     [0] => Honda
    //     [1] => Toyota
    //     [2] => Ford
    //     [3] => Chevy
    //     [4] => BMW
    // )
    var_dump($cars);
    // array(5) {
    //     [0]=>
    //     string(5) "Honda"
    //     [1]=>
    //     string(6) "Toyota"
    //     [2]=>
    //     string(4) "Ford"
    //     [3]=>
    //     string(5) "Chevy"
    //     [4]=>
    //     string(3) "BMW"
    //   }
    $people = array('Sandeep'=>22,'Mark'=>39,'Tony Stark'=>28);
    echo $people['Sandeep'];
    $people['Hero'] = 52;
    echo $people['Hero'];
    print_r($people);
    var_dump($people);
    $newCars = array(
        array('Honda',20,10),
        array('Toyota',30,20),
        array('Ford',22,12)
    );
    echo $newCars[1][2];
?>
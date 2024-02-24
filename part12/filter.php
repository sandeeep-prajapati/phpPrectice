<?php
    if(filter_has_var(INPUT_POST,'data')){
        echo 'Data Found';
    }else{
        echo 'No Date';
    }
    if(filter_has_var(INPUT_POST, 'data')) {

        $email = $_POST['data'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email . '<br>';
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Email is NOT valid';
        }
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is valid';
        } else {
            echo 'Email is NOT valid';
        }
    }
?>
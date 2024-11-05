<?php
$servername = 'localhost';
$username = 'roots';
$password = '';

try {
    $connection = new mysqli($servername, $username, $password);

    if (!$connection) {
        die('The coonection with database is faild' . $connection->error);
    } else {
        echo 'The coonection with database is suceesful';
    }
} catch (Exception $e) {
    die($e->getMessage());
}
/*
if(isset($_POST['submit']))
{
    if(empty($_POST['username']))
    {
        $errors['username']='username is required';
    }
    if(empty($_POST['password']))
    {
        $errors['password']='password is required';
    }


}

if (count($errors) == 0) {
    $isLoggedIn = true;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
}





*/

?>
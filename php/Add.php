<?php
include 'crud.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];

addData($firstname, $lastname, $email);

?>
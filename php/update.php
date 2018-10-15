<?php
include 'crud.php';

$firstname = $_POST['updatefirstname'];
$lastname = $_POST['updatelastname'];
$email = $_POST['updateemail'];

updateData($firstname, $lastname, $email);

?>
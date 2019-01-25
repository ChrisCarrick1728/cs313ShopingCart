<?php
session_start();

$firstName = htmlspecialchars($_POST['firstName']);
$lastName = htmlspecialchars($_POST['lastName']);
$address1 = htmlspecialchars($_POST['address1']);
$address2 = htmlspecialchars($_POST['address2']);
$city = htmlspecialchars($_POST['city']);
$state = htmlspecialchars($_POST['state']);
$zip = htmlspecialchars($_POST['zip']);

?>

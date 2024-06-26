<?php


include 'dbconnect.php';

$username = mysqli_real_escape_string($connexion, $_POST['username']);
$mail =  mysqli_real_escape_string($connexion, $_POST['mail']);
$phone = mysqli_real_escape_string($connexion,  $_POST['phone']);
$comment = mysqli_real_escape_string($connexion, $_POST['comment']);

print_r($_POST['username']);

$contactSQL = "INSERT INTO `contact` (`id_user`, `name_user`, `mail_user`, `phone_user`, `comment_user`, `dateComment_user`) VALUES (NULL, '$username', '$mail', '$phone', '$comment', current_timestamp())";

mysqli_query($connexion, $contactSQL);
header("Location: ../pages/contactSent.html");

mysqli_close($connexion);
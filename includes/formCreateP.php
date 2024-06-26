<?php

include 'dbconnect.php';

$name = mysqli_real_escape_string($connexion, $_POST['name']);
$image = mysqli_real_escape_string($connexion, $_POST['image']);
$description = mysqli_real_escape_string($connexion, $_POST['description']);
$link = mysqli_real_escape_string($connexion, $_POST['url']);

$projetSQL = "INSERT INTO `projets` (`id_projet`, `name_projet`, `img_projet`, `descr_projet`, `link_projet`) VALUES (NULL, '$name', 'img/image.jpg', '$description', '$link')";

mysqli_query($connexion, $projetSQL);
header("Location: ../administration/projetsAdmin.php?addProject=success");

mysqli_close($connexion);
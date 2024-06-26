<?php

include 'dbconnect.php';

$id_projet = mysqli_real_escape_string($connexion, $_POST['id_projet']);

$delProjetSQL =  "DELETE FROM `projets` WHERE `projets`.`id_projet`='$id_projet'";
mysqli_query($connexion, $delProjetSQL);

header("Location: ../administration/projetsAdmin.php?deleteProject=success");

mysqli_close($connexion);
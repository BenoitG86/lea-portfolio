<?php

include '../includes/dbconnect.php';

$showProjetsSQL = "SELECT * FROM `projets` ";
$readProjetsSQL =  mysqli_query($connexion, $showProjetsSQL);
$readProjetsCheck = mysqli_num_rows($readProjetsSQL);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Administration - Projets</title>
      <link rel="stylesheet" href="../styles/styleAdmin.css">
</head>

<body id="haut">
      <h1>Administration - Page de projets</h1>
      <nav>
            <ul>
                  <li><a href="indexAdmin.php">Page d'accueil</a></li>
                  <li><a href="contactAdmin.php">Page Contact</a></li>
            </ul>
      </nav>
      <div class="formProjet">
            <form action="../includes/formCreateP.php" method="POST">
                  <div>
                        <label for="name">Nom : <input type="text" id="name" name="name" placeholder="Nom du projet"></label>
                        <label for="image">Image : <input type="file" name="image" id="image" placeholder="Lien de l'image"></label>
                        <label for="url">URL : <input type="url" name="url" id="url" placeholder="Adresse du projet"></label>
                        <textarea id="description" placeholder="Texte de présentation du projet..." name="description"></textarea>
                  </div>
                  <div>
                        <input type="submit">
                        <input type="reset">
                  </div>
            </form>
      </div>
      <div class="showProjet">

            <?php
            if ($readProjetsCheck > 0) {
                  $projets = mysqli_fetch_all($readProjetsSQL, MYSQLI_ASSOC);
                  foreach ($projets as $projet) {
                        echo
                              '<h2>' . $projet['name_projet'] . '</h2>
                              <a href="' . $projet['link_projet'] . '"><img src="../' . $projet['img_projet'] . '" alt="" style="imgProjet"></a>
                              <p class="description">' . $projet['descr_projet'] . '</p>
                              <form action="../includes/formDeleteP.php" method="post" onsubmit="return confirm(`Do you really want to submit the form?`);">
                                    <input type="text" name="id_projet" value="' . $projet['id_projet'] . '">                  
                                    <input type="submit" value="Supprimer">
                              </form>';
                  }
            } else {
                  echo "Erreur : " . mysqli_error($connexion);
            }
            mysqli_close($connexion);
            ?>

      </div>
      <a href="#haut">Haut de page</a>
</body>

</html>
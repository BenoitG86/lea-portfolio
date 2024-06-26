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
      <meta name="keywords" content="HTML, CSS, JavaScript, php, dev, web">
      <meta name="author" content="Rainemaker">
      <meta name="description"
            content="Ce portfolio a été entièrement réalisé par votre dévoué.e afin de démontrer mes connaissances en HTML, CSS, php et JS.">
      <title>Réalisations - Mx BGM</title>
      <link rel="shortcut icon" href="../favicon.svg" type="image/x-icon">
      <link rel="stylesheet" href="../styles/reset.css">
      <link rel="stylesheet" href="../styles/style.css">
      <script src="../app/password.js" defer></script>
</head>

<body id="haut">
      <header>
            <div class="heroheader">
                  <img src="../img/heroheader.jpeg" alt="">
            </div>
            <h1>Mes projets et réalisations</h1>
            <nav>
                  <a href="../index.html">Accueil</a>
                  <a href="curriculum.html">Curriculum Vitae</a>
                  <a href="contact.html">Contact</a>
            </nav>
      </header>

      <main>
      <?php
            if ($readProjetsCheck > 0) {
                  $projets = mysqli_fetch_all($readProjetsSQL, MYSQLI_ASSOC);
                  foreach ($projets as $projet) {
                        echo
                        '<div class="projet">
                              <h2>' . $projet['name_projet'] . '</h2>
                              <a href="' . $projet['link_projet'] . '"><img src="../' . $projet['img_projet'] . '" alt="" style="imgProjet"></a>
                              <p class="description">' . $projet['descr_projet'] . '</p>
                        </div>
'
                        ;
                  }
            } else {
                  echo "Erreur : " . mysqli_error($connexion);
            }
            mysqli_close($connexion);
            ?>


      </main>

      <footer>
            <div class="footerContainer">
                  <p>Mentions légales : &copy; BGM 2024</p>
                  <nav class="navContainer">
                        <a href="../index.html">Accueil</a>
                        <a href="curriculum.html">Curriculum</a>
                        <a href="contact.html">Contact</a>
                  </nav>
                  <a href="#haut" class="smoothUp">Revenir en haut de page</a>
            </div>
      </footer>

</body>

</html>
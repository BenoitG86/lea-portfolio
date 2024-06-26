<?php

function showContact () {
      include '../includes/dbconnect.php';
      
      // Requête SQL
      
      $showContactSQL = "SELECT * FROM `contact` ";
      $readContactSQL =  mysqli_query($connexion, $showContactSQL);
      $readContactCheck = mysqli_num_rows($readContactSQL);
      
      // Vérification entrée existante
      
      if ($readContactCheck > 0) {
            $contacts = mysqli_fetch_all($readContactSQL, MYSQLI_ASSOC);
            foreach ($contacts as $contact) {
                  echo '<ul class="contactList">
                              <li> <em>Adresse mél :</em> ' . $contact['mail_user'] . '</li>
                              <li> <em>Numéro de téléphone :</em> ' . $contact['phone_user'] . '</li>
                              <li> <em>Commentaire :</em> ' . $contact['comment_user'] . '</li>
                              <li> <em>Date du commentaire :</em> ' . $contact['dateComment_user'] . '</li>
                        </ul>';
            }
      } else {
            echo "Erreur : " . mysqli_error($connexion);
      }
      
      mysqli_close($connexion);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Administration - Contact</title>
      <link rel="stylesheet" href="../styles/styleAdmin.css">
</head>

<body>
      <h1>Administration - Page de contact</h1>

      <div>
            <?php showContact() ?>
      </div>

      <nav>
            <ul>
                  <li><a href="indexAdmin.php">Page d'accueil</a></li>
                  <li><a href="projetsAdmin.php">Page Projets</a></li>
            </ul>
      </nav>
</body>

</html>
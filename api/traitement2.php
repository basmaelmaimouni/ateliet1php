<?php
    // Traitement PHP après clic sur Envoyer
    if (isset($_POST['valider'])) {
        // Récupération des données avec $_POST
        $num = htmlspecialchars($_POST['num_inscription']);
        $nom = htmlspecialchars($_POST['nom_prenom']);
        $ville = $_POST['ville'];
        $date = $_POST['date_naissance'];
        $sexe = $_POST['sexe'];
        $infos = nl2br(htmlspecialchars($_POST['infos']));

        // Gestion des checkbox (tableau PHP)
        $loisirs = isset($_POST['loisirs']) ? implode(", ", $_POST['loisirs']) : "Aucun";

        // Affichage récapitulatif sous forme de tableau
        echo "<h3>Récapitulatif des informations</h3>";
        echo "<table>
                <tr><th>Champ</th><th>Valeur</th></tr>
                <tr><td>Numéro d'inscription</td><td>$num</td></tr>
                <tr><td>Nom et Prénom</td><td>$nom</td></tr>
                <tr><td>Ville</td><td>$ville</td></tr>
                <tr><td>Date de Naissance</td><td>$date</td></tr>
                <tr><td>Sexe</td><td>$sexe</td></tr>
                <tr><td>Loisirs</td><td>$loisirs</td></tr>
                <tr><td>Infos Complémentaires</td><td>$infos</td></tr>
              </table>";
    }
    ?>
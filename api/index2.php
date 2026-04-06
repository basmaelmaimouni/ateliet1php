<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<style>
        body { font-family: sans-serif; margin: 20px; line-height: 1.6; }
        form { max-width: 600px; border: 1px solid #ccc; padding: 20px; border-radius: 8px; }
        .field { margin-bottom: 15px; }
        label { display: block; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Formulaire d'Inscription Étudiant</h2>

    <!-- Le formulaire -->
    <form action="" method="POST">
        <div class="field">
            <label>Numéro d'inscription :</label>
            <input type="text" name="num_inscription" required>
        </div>

        <div class="field">
            <label>Nom et prénom :</label>
            <input type="text" name="nom_prenom" required>
        </div>

        <div class="field">
            <label>Ville :</label>
            <select name="ville">
                <option value="Casablanca">Casablanca</option>
                <option value="Rabat">Rabat</option>
                <option value="Tanger">Tanger</option>
                <option value="Marrakech">Marrakech</option>
            </select>
        </div>

        <div class="field">
            <label>Date de naissance :</label>
            <input type="date" name="date_naissance" required>
        </div>

        <div class="field">
            <label>Sexe :</label>
            <input type="radio" name="sexe" value="Homme" checked> Homme
            <input type="radio" name="sexe" value="Femme"> Femme
        </div>

        <div class="field">
            <label>Loisirs :</label>
            <input type="checkbox" name="loisirs[]" value="Sport"> Sport
            <input type="checkbox" name="loisirs[]" value="Lecture"> Lecture
            <input type="checkbox" name="loisirs[]" value="Voyage"> Voyage
        </div>

        <div class="field">
            <label>Informations complémentaires :</label>
            <textarea name="infos" rows="4" cols="40"></textarea>
        </div>

        <button type="submit" name="valider">Envoyer</button>
    </form>

    <hr>

    

</body>
</html>








    
</body>
</html>

<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container{
            width: 420px;
            margin: 40px auto;
            background-color: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1{
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label{
            display: block;
            margin-top: 12px;
            margin-bottom: 6px;
            font-weight: bold;
            color: #444;
        }

        input, select{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        input[type="file"]{
            padding: 6px;
        }

        .btn{
            width: 100%;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover{
            background-color: #0056b3;
        }

        .lien-retour{
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #007bff;
        }

        .lien-retour:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Formulaire d'inscription</h1>

        <form action="/traitement.php" method="post" enctype="multipart/form-data">
            
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <label for="ville">Ville</label>
            <select id="ville" name="ville" required>
                <option value="">-- Choisir une ville --</option>
                <option value="Casablanca">Casablanca</option>
                <option value="Rabat">Rabat</option>
                <option value="Fès">Fès</option>
                <option value="Marrakech">Marrakech</option>
                <option value="Tanger">Tanger</option>
                <option value="Agadir">Agadir</option>
                <option value="Oujda">Oujda</option>
            </select>

            <label for="photo">Choisir une photo</label>
            <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png,.gif" required>

            <button type="submit" class="btn">S'inscrire</button>
        </form>

        <a href="/" class="lien-retour">Retour à l'accueil</a>
    </div>

</body>
</html>
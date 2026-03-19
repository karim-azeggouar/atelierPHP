<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription CV</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:linear-gradient(135deg, #dbeafe, #eff6ff);
            min-height:100vh;
            padding:30px;
        }

        .container{
            max-width:1100px;
            margin:auto;
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:25px;
        }

        .card{
            background:white;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.10);
            padding:30px;
        }

        h1{
            color:#1d4ed8;
            margin-bottom:20px;
            text-align:center;
        }

        h2{
            color:#1d4ed8;
            margin-bottom:15px;
        }

        label{
            display:block;
            margin-top:12px;
            margin-bottom:6px;
            font-weight:bold;
            color:#333;
        }

        input, select{
            width:100%;
            padding:12px;
            border:1px solid #cbd5e1;
            border-radius:10px;
            outline:none;
            font-size:15px;
        }

        input:focus, select:focus{
            border-color:#2563eb;
        }

        button{
            width:100%;
            margin-top:20px;
            padding:14px;
            border:none;
            border-radius:12px;
            background:#2563eb;
            color:white;
            font-size:16px;
            cursor:pointer;
            font-weight:bold;
        }

        button:hover{
            background:#1d4ed8;
        }

        .cv{
            display:none;
        }

        .cv-header{
            background:#2563eb;
            color:white;
            padding:25px;
            border-radius:18px;
            display:flex;
            align-items:center;
            gap:20px;
            margin-bottom:20px;
        }

        .cv-header img{
            width:120px;
            height:120px;
            object-fit:cover;
            border-radius:50%;
            border:4px solid white;
            background:white;
        }

        .cv-header h3{
            font-size:28px;
            margin-bottom:8px;
        }

        .section{
            margin-bottom:20px;
        }

        .section h4{
            color:#1d4ed8;
            margin-bottom:10px;
            border-bottom:2px solid #dbeafe;
            padding-bottom:6px;
        }

        .section p, .section li{
            color:#374151;
            line-height:1.7;
        }

        ul{
            padding-left:20px;
        }

        .loading{
            text-align:center;
            margin-top:15px;
            color:#2563eb;
            font-weight:bold;
        }

        @media(max-width:900px){
            .container{
                grid-template-columns:1fr;
            }
        }
    </style>
</head>
<body>

<div class="container">
    
    <div class="card">
        <h1>Formulaire d'inscription</h1>

        <form id="form">
            <label>Nom</label>
            <input type="text" name="nom" required>

            <label>Prénom</label>
            <input type="text" name="prenom" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Ville</label>
            <select name="ville" required>
                <option value="">Choisir une ville</option>
                <option>Casablanca</option>
                <option>Rabat</option>
                <option>Fès</option>
                <option>Marrakech</option>
                <option>Tanger</option>
                <option>Agadir</option>
                <option>Oujda</option>
            </select>

            <label>Photo</label>
            <input type="file" id="photo" accept="image/*" required>

            <button type="submit">Créer mon CV</button>
        </form>

        <div class="loading" id="loading"></div>
    </div>

    <div class="card cv" id="cv">
        <div class="cv-header">
            <img id="cvPhoto" src="" alt="Photo">
            <div>
                <h3 id="cvNom"></h3>
                <p id="cvEmail"></p>
                <p id="cvVille"></p>
            </div>
        </div>

        <div class="section">
            <h4>Profil</h4>
            <p id="cvProfil"></p>
        </div>

        <div class="section">
            <h4>Informations personnelles</h4>
            <p><strong>Nom complet :</strong> <span id="infoNom"></span></p>
            <p><strong>Email :</strong> <span id="infoEmail"></span></p>
            <p><strong>Ville :</strong> <span id="infoVille"></span></p>
        </div>

        <div class="section">
            <h4>Compétences</h4>
            <ul>
                <li>HTML / CSS</li>
                <li>JavaScript</li>
                <li>PHP débutant</li>
                <li>Création de formulaires</li>
                <li>Upload d'images avec Cloudinary</li>
            </ul>
        </div>

        <div class="section">
            <h4>Objectif</h4>
            <p>Développer mes compétences en création d'applications web et en conception d'interfaces modernes.</p>
        </div>
    </div>

</div>

<script>
document.getElementById("form").addEventListener("submit", async function(e){
    e.preventDefault();

    let file = document.getElementById("photo").files[0];
    let loading = document.getElementById("loading");
    loading.innerText = "Envoi de l'image en cours...";

    let data = new FormData();
    data.append("file", file);
    data.append("upload_preset", "atelier_php");

    let res = await axios.post(
        "https://api.cloudinary.com/v1_1/dvbg86sl2/image/upload",
        data
    );

    let photo = res.data.secure_url;
    let nom = this.nom.value;
    let prenom = this.prenom.value;
    let email = this.email.value;
    let ville = this.ville.value;
    let nomComplet = prenom + " " + nom;

    document.getElementById("cvPhoto").src = photo;
    document.getElementById("cvNom").innerText = nomComplet;
    document.getElementById("cvEmail").innerText = "Email : " + email;
    document.getElementById("cvVille").innerText = "Ville : " + ville;
    document.getElementById("cvProfil").innerText =
        "Je suis " + nomComplet + ", résident à " + ville + ", motivé à apprendre le développement web et à créer des projets modernes et pratiques.";
    document.getElementById("infoNom").innerText = nomComplet;
    document.getElementById("infoEmail").innerText = email;
    document.getElementById("infoVille").innerText = ville;

    document.getElementById("cv").style.display = "block";
    loading.innerText = "";
});
</script>

</body>
</html>
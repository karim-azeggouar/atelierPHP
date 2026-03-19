<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Atelier PHP</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            min-height:100vh;
            background:linear-gradient(135deg, #dbeafe, #eff6ff);
            display:flex;
            align-items:center;
            justify-content:center;
            padding:30px;
        }

        .card{
            width:100%;
            max-width:900px;
            background:white;
            border-radius:24px;
            box-shadow:0 12px 35px rgba(0,0,0,0.10);
            overflow:hidden;
            display:grid;
            grid-template-columns:1.1fr 0.9fr;
        }

        .left{
            padding:50px 40px;
        }

        .right{
            background:#2563eb;
            color:white;
            padding:50px 35px;
            display:flex;
            flex-direction:column;
            justify-content:center;
        }

        .badge{
            display:inline-block;
            background:#dbeafe;
            color:#1d4ed8;
            padding:8px 14px;
            border-radius:999px;
            font-size:14px;
            font-weight:bold;
            margin-bottom:18px;
        }

        h1{
            font-size:42px;
            color:#1e3a8a;
            margin-bottom:15px;
            line-height:1.2;
        }

        .subtitle{
            color:#475569;
            font-size:17px;
            line-height:1.8;
            margin-bottom:28px;
        }

        .actions{
            display:flex;
            gap:14px;
            flex-wrap:wrap;
        }

        .btn{
            text-decoration:none;
            padding:14px 22px;
            border-radius:12px;
            font-weight:bold;
            transition:0.2s;
            display:inline-block;
        }

        .btn-primary{
            background:#2563eb;
            color:white;
        }

        .btn-primary:hover{
            background:#1d4ed8;
        }

        .btn-secondary{
            background:#eff6ff;
            color:#1d4ed8;
            border:1px solid #bfdbfe;
        }

        .btn-secondary:hover{
            background:#dbeafe;
        }

        .info-box{
            background:#f8fafc;
            border:1px solid #e2e8f0;
            border-radius:16px;
            padding:20px;
            margin-top:28px;
        }

        .info-box p{
            margin:8px 0;
            color:#334155;
        }

        .right h2{
            font-size:28px;
            margin-bottom:15px;
        }

        .right p{
            line-height:1.8;
            margin-bottom:18px;
            color:#e0ecff;
        }

        .right ul{
            padding-left:20px;
        }

        .right li{
            margin-bottom:10px;
            line-height:1.6;
        }

        @media(max-width:850px){
            .card{
                grid-template-columns:1fr;
            }

            .left, .right{
                padding:35px 25px;
            }

            h1{
                font-size:34px;
            }
        }
    </style>
</head>
<body>

<div class="card">
    <div class="left">
        <span class="badge">Atelier PHP • Vercel • Cloudinary</span>

        <h1>Bienvenue sur l’atelier PHP</h1>

        <p class="subtitle">
            Cette petite application permet de remplir un formulaire d’inscription,
            d’ajouter une photo et d’afficher les informations sous forme de CV moderne.
        </p>

        <div class="actions">
            <a href="/inscription.php" class="btn btn-primary">Commencer l’inscription</a>
            <a href="/profil.php" class="btn btn-secondary">Voir une autre page</a>
        </div>

        <div class="info-box">
            <p><strong>Projet :</strong> Atelier PHP</p>
            <p><strong>Technologies :</strong> PHP, HTML, CSS, Axios, Cloudinary</p>
            <p><strong>Objectif :</strong> Créer une inscription avec photo et affichage CV</p>
        </div>
    </div>

    <div class="right">
        <h2>Hello from Vercel 👋</h2>
        <p>
            Cette page d’accueil est liée à votre mini projet web déployé sur Vercel.
            Elle sert de point d’entrée vers le formulaire d’inscription.
        </p>

        <ul>
            <li>Interface moderne et simple</li>
            <li>Formulaire d’inscription stylé</li>
            <li>Upload d’image avec Cloudinary</li>
            <li>Affichage automatique sous forme de CV</li>
        </ul>
    </div>
</div>

</body>
</html>
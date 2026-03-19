<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Atelier PHP</title>
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
            max-width:950px;
            background:white;
            border-radius:24px;
            box-shadow:0 12px 35px rgba(0,0,0,0.10);
            overflow:hidden;
            display:grid;
            grid-template-columns:320px 1fr;
        }

        .sidebar{
            background:#2563eb;
            color:white;
            padding:35px 25px;
            text-align:center;
        }

        .photo{
            width:140px;
            height:140px;
            border-radius:50%;
            object-fit:cover;
            border:4px solid white;
            margin-bottom:20px;
            background:white;
        }

        .sidebar h1{
            font-size:28px;
            margin-bottom:10px;
        }

        .sidebar p{
            margin:8px 0;
            color:#e0ecff;
        }

        .badge{
            display:inline-block;
            margin-top:14px;
            background:rgba(255,255,255,0.18);
            padding:8px 14px;
            border-radius:999px;
            font-size:14px;
            font-weight:bold;
        }

        .content{
            padding:40px 35px;
        }

        .section{
            margin-bottom:28px;
        }

        .section h2{
            color:#1d4ed8;
            font-size:22px;
            margin-bottom:12px;
            border-bottom:2px solid #dbeafe;
            padding-bottom:8px;
        }

        .section p, .section li{
            color:#334155;
            line-height:1.8;
        }

        ul{
            padding-left:20px;
        }

        .actions{
            margin-top:25px;
            display:flex;
            gap:14px;
            flex-wrap:wrap;
        }

        .btn{
            text-decoration:none;
            padding:12px 18px;
            border-radius:12px;
            font-weight:bold;
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

        @media(max-width:850px){
            .card{
                grid-template-columns:1fr;
            }

            .content{
                padding:30px 22px;
            }
        }
    </style>
</head>
<body>

<div class="card">
    <div class="sidebar">
        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400" alt="Photo profil" class="photo">
        <h1>Dev Web</h1>
        <p>Email : devweb@gmail.com</p>
        <p>Ville : Casablanca</p>
        <span class="badge">Profil Développeur</span>
    </div>

    <div class="content">
        <div class="section">
            <h2>À propos</h2>
            <p>
                Je suis un profil passionné par le développement web, la création
                d’interfaces modernes et l’apprentissage des technologies comme PHP,
                JavaScript et le déploiement sur Vercel.
            </p>
        </div>

        <div class="section">
            <h2>Informations personnelles</h2>
            <ul>
                <li><strong>Nom :</strong> Dev</li>
                <li><strong>Prénom :</strong> Web</li>
                <li><strong>Email :</strong> devweb@gmail.com</li>
                <li><strong>Ville :</strong> Casablanca</li>
            </ul>
        </div>

        <div class="section">
            <h2>Compétences</h2>
            <ul>
                <li>HTML / CSS</li>
                <li>JavaScript</li>
                <li>PHP Débutant</li>
                <li>Formulaires Web</li>
                <li>Cloudinary</li>
                <li>Déploiement sur Vercel</li>
            </ul>
        </div>

        <div class="section">
            <h2>Objectif</h2>
            <p>
                Construire des applications web simples, dynamiques et bien présentées,
                avec une logique claire entre formulaire, traitement et affichage.
            </p>
        </div>

        <div class="actions">
            <a href="/" class="btn btn-primary">Retour à l'accueil</a>
            <a href="/inscription.php" class="btn btn-secondary">Aller à l'inscription</a>
        </div>
    </div>
</div>

</body>
</html>
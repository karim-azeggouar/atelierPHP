<?php

// récupérer données
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$ville = $_POST['ville'];

// Cloudinary (TES vraies valeurs)
$cloudName = 'dvbg86sl2';
$uploadPreset = 'atelier_php';

// image
$tmp = $_FILES['photo']['tmp_name'];

// envoi avec cURL
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.cloudinary.com/v1_1/$cloudName/image/upload");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'file' => new CURLFile($tmp),
    'upload_preset' => $uploadPreset
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$res = curl_exec($ch);
curl_close($ch);

// récupérer lien image
$data = json_decode($res, true);
$photo = $data['secure_url'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>CV</title>
</head>
<body>

<h1><?php echo $prenom . " " . $nom; ?></h1>

<img src="<?php echo $photo; ?>" width="150"><br><br>

<p>Email : <?php echo $email; ?></p>
<p>Ville : <?php echo $ville; ?></p>

<a href="/inscription.php">Retour</a>

</body>
</html>
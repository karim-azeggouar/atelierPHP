<form id="form">
    <input type="text" name="nom" placeholder="Nom" required><br>
    <input type="text" name="prenom" placeholder="Prénom" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="ville" placeholder="Ville" required><br>
    <input type="file" id="photo" required><br><br>

    <button type="submit">Envoyer</button>
</form>

<div id="result"></div>

<script>
document.getElementById("form").addEventListener("submit", async function(e){
    e.preventDefault();

    let file = document.getElementById("photo").files[0];

    let data = new FormData();
    data.append("file", file);
    data.append("upload_preset", "atelier_php");

    let res = await fetch("https://api.cloudinary.com/v1_1/dvbg86sl2/image/upload", {
        method: "POST",
        body: data
    });

    let json = await res.json();

    let photo = json.secure_url;

    let nom = this.nom.value;
    let prenom = this.prenom.value;
    let email = this.email.value;
    let ville = this.ville.value;

    document.getElementById("result").innerHTML = `
        <h1>${prenom} ${nom}</h1>
        <img src="${photo}" width="150"><br>
        <p>Email : ${email}</p>
        <p>Ville : ${ville}</p>
    `;
});
</script>
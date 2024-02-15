function reset(){
    var lenom = document.getElementById("name")
    var lepass = document.getElementById("password")

    if (lenom.value.trim() === '') {
        alert("Le champs d'identification est vide !");
    }else{
        lenom.value = '';
        lenom.placeholder = '';
    }

    if (lepass.value.trim() === '') {
        alert("Le mot de passe est vide !");
    }else{
        lepass.value = '';
        lepass.placeholder = '';
    }
}

function affichermdp(){
    var mdp = document.getElementById("password");
    var afficherMotDePasse = document.getElementById("afficherMotDePasse");

    if (afficherMotDePasse.checked) {
        mdp.type = "text";
    } else {
        mdp.type = "password";
    }
}

function verification(){
    var mdp = document.getElementById("password");
    if(mdp.includes("\"","\'","")) {
        alert("le mots de passe ne peut contenir les caractères utiliser")
    }
}

function send(event) {
    event.preventDefault();
    var identifiant = document.getElementById("name").value;
    var motDePasse = document.getElementById("password").value;

    fetch('./verification.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ name: identifiant, passeword: motDePasse}),
    })
    .then(response => response.json())
    .then(data => {
        var messageContainer = document.getElementById("infoBulle");
        if (data.success) {
            messageContainer.innerHTML = "valide : " + data.message;
        } else {
            messageContainer.innerHTML = "invalide : " + data.message;
        }
    })
    .catch((error) => {
        console.error('Erreur lors de l\'envoi des données:', error);
    });
}

<?php
// Paramètres de connexion à la base de données
$databaseFile = './user.db';

// Récupération des informations du formulaire
$name = $_POST['name'];
$passeword = $_POST['passeword'];

// Création de l'objet SQLite3 et gestion des erreurs
try {
    $db = new SQLite3($databaseFile);
} catch (Exception $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Requête pour vérifier les informations d'authentification
$query = "SELECT * FROM utilisateurs WHERE name = :name AND passeword = :passeword";
$stmt = $db->prepare($query);
$stmt->bindValue(':name', $name, SQLITE3_TEXT);
$stmt->bindValue(':passeword', $passeword, SQLITE3_TEXT);
$result = $stmt->execute();

// Vérification des résultats
if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    // Utilisateur authentifié avec succès
    echo "Bienvenue, " . $row['name'] . "!";
} else {
    // Échec de l'authentification
    echo "Nom d'utilisateur ou mot de passe incorrect.";
}

// Fermeture de la connexion à la base de données
$db->close();
?>

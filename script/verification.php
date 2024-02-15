<?php
header('Content-Type: application/json');

$identifiantAttendu = 'Nawfoel';
$motDePasseAttendu = 'Test';

$identifiant = $_POST['name'] ?? '';
$motDePasse = $_POST['password'] ?? '';

if ($identifiant === $identifiantAttendu && $motDePasse === $motDePasseAttendu) {
    $response = array('success' => true, 'message' => 'Connexion réussie.');
} else {
    $response = array('success' => false, 'message' => 'Identifiant ou mot de passe incorrect.');
}

echo json_encode($response);
?>

<?php
$nom = $_POST['nom'] ?? null;
$sexe = $_POST['sexe'] ?? null;

if (!$nom || !$sexe) {
    echo "Erreur : Nom ou sexe manquant.";
    exit;
}

if ($sexe === "Homme") {
    echo "Bonjour Monsieur $nom";
} else {
    echo "Bonjour Madame $nom";
}

<?php

require __DIR__ . '/vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

try {
    // Demander à l'utilisateur d'entrer un lien
    echo "Entrez le lien pour générer le QR Code : ";
    $handle = fopen("php://stdin", "r"); // Ouvrir l'entrée standard
    $url = trim(fgets($handle)); // Lire et nettoyer l'entrée utilisateur
    fclose($handle); // Fermer l'entrée standard

    // Valider que le lien n'est pas vide
    if (empty($url)) {
        echo "Erreur : Aucun lien fourni.\n";
        exit(1);
    }

    $result = Builder::create()
        ->writer(new PngWriter())
        ->data($url)
        ->size(300)
        ->margin(10)
        ->build();

    $outputFile = __DIR__ . '/qrcode.png';
    $result->saveToFile($outputFile);

    echo "QR Code généré avec succès ! Fichier enregistré dans : $outputFile\n";
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage() . "\n";
    exit(1);
}
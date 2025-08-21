<?php
// Daten abrufen
$sql = "SELECT * FROM knowHow ORDER BY id DESC";
$statement = $pdo->query($sql);
$daten = $statement->fetchAll(PDO::FETCH_ASSOC);

// JSON-Datei erzeugen
file_put_contents($knowHowAPI, json_encode($daten, JSON_PRETTY_PRINT));
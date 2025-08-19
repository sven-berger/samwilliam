<?php
// Daten abrufen
$sql = "SELECT id, headline, content, created_at, changed_at FROM blog ORDER BY id DESC";
$statement = $pdo->query($sql);
$daten = $statement->fetchAll(PDO::FETCH_ASSOC);

// JSON-Datei erzeugen
file_put_contents($blogAPI, json_encode($daten, JSON_PRETTY_PRINT));
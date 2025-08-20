<h1 class="text-7xl mb-20 font-bold">
  Eintrittspreis hinzufügen
</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alterVon = trim($_POST['alterVon']);
    $alterBis  = trim($_POST['alterBis']);
    $preis  = trim($_POST['preis']);


    $statement = $pdo->prepare('INSERT INTO eintrittspreise (alterVon, alterBis, preis) VALUES (:alterVon, :alterBis, :preis)');
    $statement->execute([':alterVon' => $alterVon, ':alterBis'  => $alterBis, ':preis' => $preis]);

    if (!$statement) {
        echo "<section class='content mb-20'>Fehler beim <span class='font-bold'>Eintragen</span> des Eintrittpreises.</section>";
    } else {
        header("Location: index.php?page=eintrittspreise-list");
        exit;
    }
}
?>

<form method="POST" class="space-y-4">
    <label>Alter von</label>
    <input type="number" name="alterVon" required>

    <label>Alter bis</label>
    <input type="number" name="alterBis" required>

    <label>Preis</label>
    <input type="number" name="preis" required>

    <button type="submit">Speichern</button>
    <button type="reset">Zurücksetzen</button>
</form>

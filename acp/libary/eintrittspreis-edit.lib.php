<h1 class="text-7xl mb-20 font-bold">
  Eintrittspreis bearbeiten
</h1>

<?php
if (!isset($_GET['id'])) {
    echo "<div class='text-red-500'>Keine ID übergeben.</div>";
    return;
}

$id = (int) $_GET['id'];

// Datensatz abrufen
$sql = "SELECT * FROM eintrittspreise WHERE id = ?";
$statement = $pdo->prepare($sql);
$statement->execute([$id]);
$eintrittspreise = $statement->fetch(PDO::FETCH_ASSOC);

if (!$eintrittspreise) {
    echo "<div class='text-red-500'>Eintrag nicht gefunden.</div>";
    return;
}

// Verarbeiten des Formulars
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alterVon = $_POST['alterVon'];
    $alterBis = $_POST['alterBis'];
    $preis = $_POST['preis'];

    $updateSql = "UPDATE eintrittspreise SET alterVon = ?, alterBis = ?, preis = ? WHERE id = ?";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->execute([$alterVon, $alterBis, $preis, $id]);

    header("Location: index.php?page=eintrittspreise-list");
    exit;
}
?>

<form method="POST" class="space-y-4">
    <div>
        <label class="block font-medium">Alter von</label>
        <input type="number" name="alterVon" value="<?= htmlspecialchars($eintrittspreise['alterVon']) ?>" required>
    </div>

    <div>
        <label class="block font-medium">Alter bis</label>
        <input type="number" name="alterBis" value="<?= htmlspecialchars($eintrittspreise['alterBis']) ?>" required>
    </div>

    <div>
        <label class="block font-medium">Preis</label>
        <input type="number" name="preis" value="<?= htmlspecialchars($eintrittspreise['preis']) ?>" required>
    </div>

    <button type="submit">Speichern</button>
</form>
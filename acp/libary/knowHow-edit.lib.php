<h1 class="text-7xl font-bold mb-20">
    KnowHow-Artikel bearbeiten
</h1>

<?php
if (!isset($_GET['id'])) {
    echo "<div class='text-red-500'>Keine ID übergeben.</div>";
    return;
}

$id = (int) $_GET['id'];

// Datensatz abrufen
$sql = "SELECT * FROM knowHow WHERE id = ?";
$statement = $pdo->prepare($sql);
$statement->execute([$id]);
$eintrag = $statement->fetch(PDO::FETCH_ASSOC);

if (!$eintrag) {
    echo "<div class='text-red-500'>Eintrag nicht gefunden.</div>";
    return;
}

// Verarbeiten des Formulars
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $headline = $_POST['headline'];
    $content = $_POST['content'];
    $description = $_POST['description'];
    $changed_at = date('Y-m-d H:i:s'); // aktueller Zeitstempel

    $updateSql = "UPDATE knowHow SET headline = ?, description = ?, content = ? WHERE id = ?";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->execute([$headline, $description, $content, $id]);

    header("Location: index.php?page=knowHow-list");
    exit;
}
?>

<form method="POST" class="space-y-4">
    <label>Titel</label>
    <input type="text" name="headline" value="<?= htmlspecialchars($eintrag['headline']) ?>" required>

    <label>Beschreibung</label>
    <textarea name="description" rows="8" required><?= htmlspecialchars($eintrag['description']) ?></textarea>

    <label>Inhalt</label>
    <textarea name="content" rows="8" required><?= htmlspecialchars($eintrag['content']) ?></textarea>

    <label>Veröffentlichung</label>
    <input type="datetime-local" name="created_at" value="<?= htmlspecialchars($eintrag['created_at']) ?>" required>

    <button type="submit">KnowHow-Artikel speichern</button>
    <button type="reset">Zurücksetzen</button>
</form>
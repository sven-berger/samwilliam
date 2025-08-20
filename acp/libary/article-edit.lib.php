<h1 class="text-7xl font-bold mb-40">
    Blog-Artikel bearbeiten
</h1>

<?php
if (!isset($_GET['id'])) {
    echo "<div class='text-red-500'>Keine ID übergeben.</div>";
    return;
}

$id = (int) $_GET['id'];

// Datensatz abrufen
$sql = "SELECT * FROM blog WHERE id = ?";
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
    $changed_at = date('Y-m-d H:i:s'); // aktueller Zeitstempel

    $updateSql = "UPDATE blog SET headline = ?, content = ? WHERE id = ?";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->execute([$headline, $content, $id]);

    header("Location: index.php?page=blog-list");
    exit;
}
?>

<form method="POST" class="space-y-4">
    <label>Titel</label>
    <input type="text" name="headline" value="<?= htmlspecialchars($eintrag['headline']) ?>" required>

    <label>Inhalt</label>
    <textarea name="content" rows="8" required><?= htmlspecialchars($eintrag['content']) ?></textarea>
    
    <button type="submit">Artikel speichern</button>
    <button type="reset">Zurücksetzen</button>
</form>
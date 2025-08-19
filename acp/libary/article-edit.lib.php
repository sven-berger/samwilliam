<h1 class="text-7xl mb-20 font-bold">
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
    $created_at = $_POST['created_at'];
    $changed_at = date('Y-m-d H:i:s'); // aktueller Zeitstempel

    $updateSql = "UPDATE blog SET headline = ?, content = ?, created_at = ? WHERE id = ?";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->execute([$headline, $content, $date, $id]);

    header("Location: index.php?page=blog-list");
    exit;
}
?>

<form method="POST" class="space-y-4">
    <div>
        <label class="block font-medium">Titel</label>
        <input type="text" name="headline" value="<?= htmlspecialchars($eintrag['headline']) ?>" class="w-full border px-3 py-2" required>
    </div>

    <div>
        <label class="block font-medium">Inhalt</label>
        <textarea name="content" rows="8" class="w-full border px-3 py-2" required><?= htmlspecialchars($eintrag['content']) ?></textarea>
    </div>

    <div>
        <label class="block font-medium">Veröffentlichung</label>
        <input type="created_at" name="created_at" value="<?= date('d.m.Y H:i', strtotime($eintrag['created_at'])) ?>" class="border px-3 py-2" required>
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Speichern</button>
</form>
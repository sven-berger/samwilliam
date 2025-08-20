<h1 class="text-7xl mb-20 font-bold">
  Box bearbeiten
</h1>

<?php
if (!isset($_GET['id'])) {
    echo "<div class='text-red-500'>Keine ID übergeben.</div>";
    return;
}

$id = (int) $_GET['id'];

// Datensatz abrufen
$sql = "SELECT * FROM contentBoxen WHERE id = ?";
$statement = $pdo->prepare($sql);
$statement->execute([$id]);
$boxen = $statement->fetch(PDO::FETCH_ASSOC);

if (!$boxen) {
    echo "<div class='text-red-500'>Eintrag nicht gefunden.</div>";
    return;
}

// Verarbeiten des Formulars
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $boxTitle = $_POST['boxTitle'];
    $content = $_POST['content'];
    $page = $_POST['page'];

    $updateSql = "UPDATE contentBoxen SET boxTitle = ?, content = ?, page = ? WHERE id = ?";
    $updateStmt = $pdo->prepare($updateSql);
    $updateStmt->execute([$boxTitle, $content, $page, $id]);

    header("Location: index.php?page=blog-list");
    exit;
}
?>

<form method="POST" class="space-y-4">
    <div>
        <label class="block font-medium">Boxtitel</label>
        <input type="text" name="boxTitle" value="<?= htmlspecialchars($boxen['boxTitle']) ?>" required>
    </div>

    <div>
        <label class="block font-medium">Inhalt</label>
        <textarea name="content" rows="8" required><?= htmlspecialchars($boxen['content']) ?></textarea>
    </div>

    <div>
        <label class="block font-medium">Zuhörige Seite</label>
        <input type="text" name="page" value="<?= htmlspecialchars($boxen['page']) ?>" required>
    </div>

    <button type="submit"∂>Speichern</button>
</form>
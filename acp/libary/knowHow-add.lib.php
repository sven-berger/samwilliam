<h1 class="text-7xl font-bold mb-20">
    KnowHow-Artikel schreiben
</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $headline = trim($_POST['headline']);
    $description = trim($_POST['description']);
    $content = trim($_POST['content']);
    $created_at  = trim($_POST['created_at']);

    $statement = $pdo->prepare('INSERT INTO knowHow (headline, description, content, created_at) VALUES (:headline, :description, :content, :created_at)');
    $statement->execute([':headline' => $headline, ':description' => $description, ':content'  => $content, ':created_at' => $created_at]);

    if (!$statement) {
        echo "<section class='content mb-20'>Fehler beim <span class='font-bold'>Eintragen</span> der KnowHow-Artikel.</section>";
    } else {
        header("Location: index.php?page=knowHow-list");
        exit;
    }
}
?>

<form method="POST" class="space-y-4">
    <label>Titel</label>
    <input type="text" name="headline" required>

    <label>Beschreibung</label>
    <textarea name="description"></textarea>

    <label>Inhalt</label>
    <textarea name="content"></textarea>

    <label>Veröffentlichung</label>
    <input type="datetime-local" required name="created_at">

    <button type="submit">KnowHow-Artikel speichern</button>
    <button type="reset">Zurücksetzen</button>
</form>

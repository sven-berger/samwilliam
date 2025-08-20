<h1 class="text-7xl font-bold mb-40">
    Blog-Artikel schreiben
</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $headline = trim($_POST['headline']);
    $content  = trim($_POST['content']);
    $created_at  = trim($_POST['created_at']);


    $statement = $pdo->prepare('INSERT INTO blog (headline, content, created_at) VALUES (:headline, :content, :created_at)');
    $statement->execute([':headline' => $headline, ':content'  => $content, ':created_at' => $created_at]);

    if (!$statement) {
        echo "<section class='content mb-20'>Fehler beim <span class='font-bold'>Eintragen</span> der Blog-Artikel.</section>";
    } else {
        header("Location: index.php?page=blog-list");
        exit;
    }
}
?>

<form method="POST" class="space-y-4">
    <label>Titel</label>
    <input type="text" name="headline" required>
    
    <label>Inhalt</label>
    <textarea name="content" rows="8"></textarea>

    <label>Veröffentlichung</label>
    <input type="datetime-local" name="created_at" required>

    <button type="submit">Artikel speichern</button>
    <button type="reset">Zurücksetzen</button>
</form>

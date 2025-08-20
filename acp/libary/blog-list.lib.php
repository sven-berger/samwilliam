
<h1 class="text-7xl mb-20 font-bold">
  Übersicht der Blog-Artikel
</h1>

<?php
  $sql = "SELECT id, headline, content, created_at FROM blog ORDER BY id DESC";
  $statement = $pdo->query($sql);
  $artikel = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="mb-10 flex justify-end">
  <a href="/acp/index.php?page=article-add" class="px-5 py-3 bg-red-500 text-white font-semibold rounded-md hover:opacity-90">
    Artikel verfassen
  </a>
</section>

<section>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Titel</th>
        <th>Datum</th>
        <th>Aktion</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($artikel as $eintrag): ?>
      <tr>
        <td><?= htmlspecialchars($eintrag['id']) ?></td>
        <td><?= htmlspecialchars($eintrag['headline']) ?></td>
        <td><?= date('d.m.Y', strtotime($eintrag['created_at'])) ?>, <?= date('H:i', strtotime($eintrag['created_at'])) ?> Uhr</td>
        <td>
          <a href="index.php?page=article-edit&id=<?= urlencode($eintrag['id']) ?>" class="text-blue-500 hover:underline">Bearbeiten</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>



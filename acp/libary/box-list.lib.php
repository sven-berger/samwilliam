<h1 class="text-7xl font-bold mb-40">
  Übersicht der Boxen
</h1>

<?php
  $sql = "SELECT id, boxTitle, page FROM contentBoxen ORDER BY page ASC";
  $statement = $pdo->query($sql);
  $boxen = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="mb-10 flex justify-end">
  <a href="/acp/index.php?page=box-add" class="px-5 py-3 bg-red-500 text-white font-semibold rounded-md hover:opacity-90">
     Box hinzufügen
  </a>
</section>

<section>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Seite</th>
        <th>Aktion</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($boxen as $box): ?>
      <tr>
        <td><?= htmlspecialchars($box['id']) ?></td>
        <td><?= htmlspecialchars($box['boxTitle']) ?></td>
        <td><?= htmlspecialchars($box['page']) ?></td>
        <td>
            <a href="index.php?page=box-edit&id=<?= urlencode($box['id']) ?>" class="text-blue-500 hover:underline">Bearbeiten</a>
            <a href="index.php?page=box-delete&id=<?= urlencode($box['id']) ?>" class="text-red-500 hover:underline ml-4">Löschen</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>
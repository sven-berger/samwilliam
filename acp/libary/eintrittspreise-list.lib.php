<h1 class="text-7xl font-bold mb-40">
  Übersicht der Eintrittspreise
</h1>

<?php
  $sql = "SELECT id, alterVon, alterBis, preis FROM eintrittspreise ORDER BY id ASC";
  $statement = $pdo->query($sql);
  $eintrittspreise = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="mb-10 flex justify-end">
  <a href="/acp/index.php?page=eintrittspreis-add" class="px-5 py-3 bg-red-500 text-white font-semibold rounded-md hover:opacity-90">
     Eintrittspreis hinzufügen
  </a>
</section>

<section>
  <table>
    <thead>
      <tr>
        <th>Alter von</th>
        <th>Alter bis</th>
        <th>Preis</th>
        <th>Aktion</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($eintrittspreise as $eintrittspreis): ?>
      <tr>
        <td><?= htmlspecialchars($eintrittspreis['alterVon']) ?></td>
        <td><?= htmlspecialchars($eintrittspreis['alterBis']) ?></td>
        <td><?= htmlspecialchars($eintrittspreis['preis']) ?>,00€</td>
        <td>
            <a href="index.php?page=eintrittspreis-edit&id=<?= urlencode($eintrittspreis['id']) ?>" class="text-blue-500 hover:underline">Bearbeiten</a>
            <a href="index.php?page=eintrittspreis-delete&id=<?= urlencode($eintrittspreis['id']) ?>" class="text-red-500 hover:underline ml-4">Löschen</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>
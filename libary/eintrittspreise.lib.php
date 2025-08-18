<h1 class="text-7xl mb-40 font-bold">
  Eintrittspreis-Rechner
</h1>


<?php
$eintrittspreise = [
    ['alter_von' => 0, 'alter_bis' => 5, 'preis' => '1€'],
    ['alter_von' => 6, 'alter_bis' => 17, 'preis' => '3€'],
    ['alter_von' => 18, 'alter_bis' => 64, 'preis' => '6€'],
    ['alter_von' => 65, 'alter_bis' => 120, 'preis' => '4€'],
];
?>

<table>
    <thead>
        <tr>
            <th>Alter von</th>
            <th>Alter bis</th>
            <th>Preis</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($eintrittspreise as $preise): ?>
        <tr>
            <td><?= $preise['alter_von']; ?></td>
            <td><?= $preise['alter_bis']; ?></td>
            <td><?= $preise['preis']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<form action="" method="POST" class="space-y-5">
    <div class="mt-10">
        <label for="alterEingabe">Wie alt bist du?</label>
        <input type="number" name="alterEingabe" id="alterEingabe" required>
    </div>
    <div>
        <button type="submit">Absenden</button>
    </div>
    <div>
        <button type="reset">Zurücksetzen</button>
    </div>
</form>

<?php if (isset($_POST['alterEingabe'])): ?>
    <?php
        $alter = (int)$_POST['alterEingabe'];
        $preis = "Unbekannt";

        foreach ($eintrittspreise as $stufe) {
            if ($alter >= $stufe['alter_von'] && $alter <= $stufe['alter_bis']) {
                $preis = $stufe['preis'];
                break;
            }
        }

        echo "<p>Eintrittspreis: <strong>$preis</strong></p>";
    ?>
<?php endif; ?>

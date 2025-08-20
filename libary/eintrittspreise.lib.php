<h1 class="text-7xl mb-40 font-bold">
  Eintrittspreis-Rechner
</h1>

<section class="mb-20 content" data-controller="eintrittspreise">
    <table>
        <thead>
            <tr>
                <th>Alter von</th>
                <th>Alter bis</th>
                <th>Preis</th>
            </tr>
        </thead>
        <tbody data-eintrittspreise-target="tableBody"></tbody>
    </table>

    <section class="mb-20">
        <form action="" method="POST" class="space-y-5" data-action="input->eintrittspreise#eintrittspreisRechner change->eintrittspreise#eintrittspreisRechner">
            <div class="mt-10">
                <label for="alterEingabe">Wie alt bist du?</label>
                <input type="number" name="alterEingabe" id="alterEingabe" required data-eintrittspreise-target="alterEingabe">
            </div>
            <div>
                <button type="reset">Zurücksetzen</button>
            </div>
        </form>
    </section>

    <section>
        <div>
            <p data-eintrittspreise-target="deinPreis"></p>
        </div>
    </section>
</section>
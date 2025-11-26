<h1 class="text-7xl font-bold mb-20">
    Zahlen raten
</h1>

<section data-controller="zahlenRaten">
  <!-- Spiel starten (Min/Max eingeben) -->
  <form class="mt-5 grid gap-4" data-action="submit->zahlenRaten#RateSpiel" data-zahlenRaten-target="eckdaten" method="POST">
    <label for="min" class="font-medium">Von</label>
    <input id="min" name="min" type="number" required data-zahlenRaten-target="min" class="w-full border border-gray-300 bg-gray-50 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500">

    <label for="max" class="font-medium">Bis:</label>
    <input id="max" name="max" type="number" required data-zahlenRaten-target="max" class="w-full border border-gray-300 bg-gray-50 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-amber-500">

    <button type="submit">Beginnen</button>
  </form>

  <!-- Erfolgsmeldung nach Start -->
  <div data-zahlenRaten-target="meldung1" class="bg-green-100 text-green-800 px-4 py-2 rounded hidden mt-4">
    <h5 class="font-bold">Die Zahl wurde erfolgreich festgelegt.</h5>
    <p>Möge das Raten beginnen!</p>
  </div>

  <!-- Rückmeldungen -->
  <div data-zahlenRaten-target="meldung2" class="bg-red-100 text-red-800 px-4 py-2 rounded hidden mt-4">
    <h5>Du liegst zu niedrig, du musst <strong>höher</strong> tippen!</h5>
    <p>Neuer Versuch!</p>
  </div>

  <div data-zahlenRaten-target="meldung3" class="bg-red-100 text-red-800 px-4 py-2 rounded hidden mt-4">
    <h5>Du liegst zu hoch, du musst <strong>niedriger</strong> tippen!</h5>
    <p>Neuer Versuch!</p>
  </div>

  <div data-zahlenRaten-target="meldung4" class="bg-green-100 text-green-800 px-4 py-2 rounded hidden mt-4">
    <h5 class="font-bold">Herzlichen Glückwunsch, du hast die richtige Zahl erraten!</h5>
    <a href="#" data-action="click->zahlenRaten#NeuesSpiel" class="font-bold text-amber-700">Neues Spiel starten</a>
  </div>

  <!-- Zahlenrate-Formular -->
  <form class="hidden" data-action="submit->zahlenRaten#ZahlPruefen" data-zahlenRaten-target="ZahlRaten" method="POST">
    <label for="zahlVersuch" class="font-light">Bitte gib deine Zahl ein:</label>
    <input id="zahlVersuch" name="zahlVersuch" type="number" required data-zahlenRaten-target="zahlVersuch">
    <button type="submit">Raten</button>
  </form>
</section>

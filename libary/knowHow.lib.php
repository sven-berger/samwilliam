<h1 class="text-7xl font-bold mb-20">
    KnowHow-Datenbank
</h1>

<section class="content mb-20">
  <p>In dieser KnowHow-Datenbank halte ich meine neu gewonnenen IT-Kenntnisse fest.</p>
  <p>Die Themen sind allgemein für die Ausbildung bzw. Umschulung zum Fachinformatiker wichtig, stehen für mich aktuell aber vor allem im Zeichen der anstehenden IHK-Abschlussprüfung Teil 1 am 17.09.2025.</p>
  <p>Zwar bin ich angehender Fachinformatiker für Anwendungsentwicklung (FIAE), aber da die AP1 für alle Fachrichtungen gleich ist, decke ich hier bewusst auch diese Themen ab.</p>
  <p>Folgende Fachrichtungen schreiben die AP1:</p>
  <ul>
    <li>Fachinformatiker für Systemintegration <span class="font-bold">(FISI)</span></li>
    <li>Fachinformatiker für Daten- und Prozessanalyse <span class="font-bold">(FIDA)</span></li>
    <li>IT-System-Elektroniker <span class="font-bold">(ITSE)</span></li>
    <li>sowie den Prüfungsbereich „Digitale Infrastruktur – Management" <span class='font-bold'>(Dig.-Man.)</span></li>
  </ul>
  <p>Mir ist auch klar, dass meine Methoden manchmal etwas umständlich sind und es oft kürzere oder elegantere Lösungen gäbe.</p>
  <p>Aber so habe ich es mir beigebracht, so verstehe ich es am besten – und am Ende ist das genau das, was für mich zählt.</p><br>
  <p><i class="fa-regular fa-circle-right"></i> Die Datenbank ist noch im Aufbau, ich werde sie aber regelmäßig erweitern und aktualisieren.<br>
  <p><i class="fa-regular fa-circle-right"></i> Die Datenbank ist öffentlich zugänglich, aber ich bitte darum, sie nicht zu kopieren oder anderweitig zu verwenden, ohne mich vorher zu fragen.</p>
  <p><i class="fa-regular fa-circle-right"></i> Die Datenbank ist in JSON-Format gespeichert und kann über die <a href="/assets/api/knowHow/knowHow.json" target="_blank">API</a> abgerufen werden.</p>
</section>

<div id="knowHowContainer"></div>
<script>
    fetch("/assets/api/knowHow/knowHow.json")
      .then(response => response.json())
      .then(daten => {
        const container = document.getElementById("knowHowContainer");
        container.innerHTML = ""

        daten.forEach(eintrag => {
          const div = document.createElement("div");
          div.className = "knowHow-entry";

          div.innerHTML = `
            <section class="mb-10">
              <h2 class="inline-block text-6xl mt-5 mb-10 border-b-4 text-red-500 border-orange-400 pb-2 font-bold">${eintrag.headline}</h2>
              <h3>Veröffentlicht am <span class="text-red-500">${formatDatum(eintrag.created_at)}</span></h3>
              <div class="content mt-5">
              <h5 class="inline-block text-5xl mt-5 mb-1 pb-2 font-bold" style="border: none !important;">${eintrag.description}</h5>

              </div>
              <div class="content mt-5">
                <p>${eintrag.content}</p>
              </div>
              <div class="mt-10 flex">
                <small class="text-gray-500 italic">Letzte Änderung: ${formatDatum(eintrag.changed_at)}</small>
              </div>
            </section>
          `;
          container.appendChild(div);
        });
      })
      .catch(error => {
        document.getElementById("blogContainer").innerHTML = "Fehler beim Laden der Artikel.";
        console.error("Fehler:", error);
      });

    function formatDatum(datumString) {
      const datum = new Date(datumString);
      const tag = String(datum.getDate()).padStart(2, '0');
      const monat = String(datum.getMonth() + 1).padStart(2, '0');
      const jahr = datum.getFullYear();
      const stunde = String(datum.getHours()).padStart(2, '0');
      const minute = String(datum.getMinutes()).padStart(2, '0');
      return `${tag}.${monat}.${jahr} um ${stunde}:${minute} Uhr`;
    }
  </script>
</section>
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

<section class="mb-10" data-controller="knowHowPage">
  <div id="knowHowContainer" data-knowHowPage-target="knowHowContainer"></div>
  
  <template id="knowHowTemplate">
    <h2 class="inline-block text-6xl mt-5 mb-10 border-b-4 text-red-500 border-orange-400 font-bold"></h2>
    <p>Veröffentlicht am <span class="text-red-500"></span></p>
    <h4 class="inline-block text-5xl mt-5 mb-1 pb-2 font-bold" style="border: none !important;"></h4>
    <div class="content"></div>
    <div class="mt-10 mb-40 flex">
      <small class="text-gray-500 italic">Letzte Änderung: <span></small>
    </div>
  </template>
</section>
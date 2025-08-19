<h1 class="text-7xl font-bold mb-10">
  Startseite
</h1>
<section class="mb-20 content">
  <div id="boxenOutput"></div>
</section>
<script>
  fetch("/assets/api/boxen/boxen.json")
    .then(response => response.json())
    .then(data => {
      // Nur den Eintrag mit id = 1 auswählen
      const eintrag = data.find(item => item.id === 1);

      if (eintrag) {
        document.getElementById("boxenOutput").innerHTML = `
          <div>${eintrag.content}</div>
        `;
      } else {
        document.getElementById("boxenOutput").innerHTML = "Box nicht gefunden.";
      }
    })
    .catch(error => console.error("Fehler beim Laden:", error));
</script>
<section class="mb-40">
  <h2 class="inline-block text-5xl border-b-4 text-red-500 border-orange-400 pb-2 mb-10 font-bold">Aktueller Wissensstand</h2>
  <div class="flex flex-col lg:flex-row gap-6">
    <div class="flex-1 bg-white border border-gray-300 rounded-lg p-6 hover:shadow-lg hover:border-red-500 hover:border-4 hover:bg-white transition duration-300">  
      <div class="flex justify-between text-xl font-semibold text-red-500 mb-2">
        <span class="flex items-center">
          IHK-Abschlussprüfung I
        </span>
        <span class="flex items-center">
          <i class="fa-solid fa-graduation-cap icon-xl"></i>
        </span>
      </div>   
      <p class="text-gray-600">Ich bereite mich auf die IHK-Abschlussprüfung Teil 1 vor und arbeite praxisnah mit Prüfungsaufgaben und Lernmodulen.</p>
    </div>
    <div class="flex-1 bg-white border border-gray-300 rounded-lg p-6 hover:shadow-lg hover:border-red-500 hover:border-4 hover:bg-white transition duration-300">
      <div class="flex justify-between text-xl font-semibold text-red-500 mb-2">
        <span class="flex items-center">
          Stimulus & Tailwind
        </span>
        <span class="flex items-center">
           <i class="fa-brands fa-js icon-xl"></i> <i class="fa-brands fa-css icon-xl"></i>
        </span>
      </div>
      <p class="text-gray-600">Ich beschäftige mich aktuell mit modernen Frontend-Technologien wie Tailwind CSS und dem JavaScript-Framework Stimulus.</p>
    </div>
    <div class="flex-1 bg-white border border-gray-300 rounded-lg p-6 hover:shadow-lg hover:border-red-500 hover:border-4 hover:bg-white transition duration-300">
       <div class="flex justify-between text-xl font-semibold text-red-500 mb-2">
        <span class="flex items-center">
          PHP
        </span>
        <span class="flex items-center">
          <i class="fa-brands fa-php icon-xl"></i>
        </span>
      </div>
      <p class="text-gray-600">Die Basics von PHP sind mir vertraut, und ich setze erste dynamische Anwendungen serverseitig um.</p>
    </div>
  </div>
</section>

<section>
  <h2 class="inline-block text-5xl mt-5 mb-10 border-b-4 text-red-500 border-orange-400 pb-2 font-bold">Zukunftspläne</h2>
  <div class="flex flex-col lg:flex-row gap-6">
    <div class="flex-1 bg-white border border-gray-300 rounded-lg p-6 hover:shadow-lg hover:border-red-500 hover:border-4 hover:bg-white transition duration-300">
      <div class="flex justify-between text-xl font-semibold text-red-500 mb-2">
        <span class="flex items-center">
          Ruby
        </span>
        <span class="flex items-center">
          <i class="fa-solid fa-code icon-xl"></i>
        </span>
      </div>  
      <p class="text-gray-600">Ich plane, mich intensiv mit dem Framework Ruby on Rails auseinanderzusetzen, um moderne Webanwendungen effizient entwickeln zu können.</p>
    </div>
    <div class="flex-1 bg-white border border-gray-300 rounded-lg p-6 hover:shadow-lg hover:border-red-500 hover:border-4 hover:bg-white transition duration-300">
      <div class="flex justify-between text-xl font-semibold text-red-500 mb-2">
        <span class="flex items-center">
          React
        </span>
        <span class="flex items-center">
          <i class="fa-brands fa-react icon-xl"></i>
        </span>
      </div>  
      <p class="text-gray-600">Der Einstieg in React steht ebenfalls auf meiner To-do-Liste, um interaktive und komponentenbasierte Frontend-Anwendungen zu erstellen.</p>
    </div>
    <div class="flex-1 bg-white border border-gray-300 rounded-lg p-6 hover:shadow-lg hover:border-red-500 hover:border-4 hover:bg-white transition duration-300">
      <div class="flex justify-between text-xl font-semibold text-red-500 mb-2">
        <span class="flex items-center">
          Datenbank-Architektur
        </span>
        <span class="flex items-center">
          <i class="fa-solid fa-database icon-xl"></i>
        </span>
      </div> 
      <p class="text-gray-600">Ein weiterer Fokus liegt auf dem tieferen Verständnis relationaler Datenbanken und effizienter Datenbankmodellierung.</p>
    </div>
  </div>
</section>
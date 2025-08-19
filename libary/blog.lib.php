<h1 class="text-7xl mb-20 font-bold">
  Blog
</h1>

<div id="blogContainer"></div>
<script>
    fetch("/assets/api/blog/blog.json")
      .then(response => response.json())
      .then(daten => {
        const container = document.getElementById("blogContainer");
        container.innerHTML = ""

        daten.forEach(eintrag => {
          const div = document.createElement("div");
          div.className = "blog-entry";

          div.innerHTML = `
            <section class="mb-10">
              <h2 class="inline-block text-5xl mt-5 mb-10 border-b-4 text-red-500 border-orange-400 pb-2 font-bold">${eintrag.headline}</h2>
              <h3>Veröffentlicht am <span class="text-red-500">${formatDatum(eintrag.created_at)}</span></h3>
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
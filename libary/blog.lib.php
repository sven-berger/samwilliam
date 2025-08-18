<h1 class="text-7xl mb-20 font-bold">
  Blog
</h1>

<?php
  require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/api/blog/blogAPI.php');
?>

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
            <h2 class="text-xl text-red-500 mb-2"></h2>
            <h2 class="inline-block text-5xl mt-5 mb-10 border-b-4 text-red-500 border-orange-400 pb-2 font-bold">${eintrag.headline}</h2>
            <h3>Veröffentlicht am <span class="text-red-500">${formatDatum(eintrag.date)}</span></h3>
            <div class="mt-5">
              <p>${eintrag.content}</p>
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
        return `${tag}.${monat}.${jahr}`;
      }
  </script>
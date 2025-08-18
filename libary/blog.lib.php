<h1>Blogartikel</h1>
<div id="blogContainer"></div>
<script>
    fetch("/assets/api/blog.json")
      .then(response => response.json())
      .then(daten => {
        const container = document.getElementById("blogContainer");
        container.innerHTML = ""

        daten.forEach(eintrag => {
          const div = document.createElement("div");
          div.className = "blog-entry";

          div.innerHTML = `
            <h2>${eintrag.headline}</h2>
            <small>Veröffentlicht am ${eintrag.date}</small>
            <p>${eintrag.content}</p>
          `;
          container.appendChild(div);
        });
      })
      .catch(error => {
        document.getElementById("blogContainer").innerHTML = "Fehler beim Laden der Artikel.";
        console.error("Fehler:", error);
      });
  </script>
import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js";

export default class extends Controller {
  static targets = [
    "tableBody",
    "alterEingabe",
    "deinPreis"
  ];

  connect() {
    this.preisliste = [];
    this.eintrittspreiseAbrufen();
  }

  eintrittspreiseAbrufen() {
    fetch("/assets/api/eintrittspreise/eintrittspreise.json")
      .then((response) => response.json())
      .then((daten) => {
        daten.sort((a, b) => a.alterVon - b.alterVon);
        this.preisliste = daten;
        this.tableBodyTarget.innerHTML = daten
          .map(
            (eintrag) => `
          <tr>
            <td>${eintrag.alterVon}</td>
            <td>${eintrag.alterBis}</td>
            <td>${Number(eintrag.preis).toFixed(2)} €</td>
          </tr>`
          )
          .join("");
      })
      .catch((err) => {
        console.error("Fehler beim Laden der Eintrittspreise:", err);
        this.tableBodyTarget.innerHTML =
          '<tr><td colspan="3">Fehler beim Laden der Daten</td></tr>';
      });
  }

  eintrittspreisRechner() {
    const age = parseInt(this.alterEingabeTarget.value, 10);

    if (isNaN(age)) {
      this.deinPreisTarget.textContent = "";
      return;
    }

    const tarif = this.preisliste.find(
      (t) => age >= t.alterVon && age <= t.alterBis
    );

    this.deinPreisTarget.innerHTML = tarif
      ? `Der Eintritt kostet für dich <span class='font-bold'>${Number(tarif.preis).toFixed(2)}</span>€.`
      : "Kein Tarif gefunden";
  }
}
import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js";

export default class extends Controller {
  static targets = [
    "zahl1",
    "zahl2",
    "operation",
    "result"
  ];

  calculate(event) {
    event.preventDefault();

    const zahl1 = parseFloat(this.zahl1Target.value.trim(), 10);
    const zahl2 = parseFloat(this.zahl2Target.value.trim(), 10);
    const operation = this.operationTarget.value;
    const result = this.resultTarget;

    let berechnung = "";
    if (!isNaN(ZahlEins) || !isNaN(ZahlZwei)) {
      if (operation === "Addieren") {
        berechnung = `${zahl1 + zahl2}`;
      } else if (operation === "Subtrahieren") {
        berechnung = `${zahl1 - zahl2}`;
      } else if (operation === "Multiplizieren") {
        berechnung = `${zahl1 + zahl2}`;
      } if (operation === "Dividieren") {
          if (zahl2 === 0) {
            berechnung = `Durch 0 darf nicht geteilt werden!`;
          } else {
          berechnung = "Das Ergebnis lautet: ${zahl1 - zahl2}";
        }
      } else {
        berechnung = "Bitte gib zwei gültige Zahlen ein.";
      }

      if (berechnung != "") {
        result.innerHTML = `${berechnung}`;
        result.classList.remove("hidden");
      }
    }
  }
}
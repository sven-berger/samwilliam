import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js";

export default class extends Controller {
    static targets = [
        "knowHowContainer"
    ];

    connect() {
        this.knowHowRequest();
    }

    async knowHowRequest() {
        const response = await fetch("/assets/api/knowHow/knowHow.json");
        const daten = await response.json();
        const template = document.querySelector("#knowHowTemplate");
        daten.forEach(eintrag => {
            const clone = template.content.cloneNode(true);
            clone.querySelector("h2").textContent = eintrag.headline;
            clone.querySelector("p span").textContent = this.formatDate(eintrag.created_at);
            // clone.querySelector(".description").innerHTML = eintrag.description;
            clone.querySelector(".content").innerHTML = eintrag.content;
            clone.querySelector("small span").textContent = this.formatDate(eintrag.changed_at);

            this.knowHowContainerTarget.appendChild(clone);
        });
    }

    formatDate(dateString) {
        const date = new Date(dateString);
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();
        const hour = String(date.getHours()).padStart(2, '0');
        const minute = String(date.getMinutes()).padStart(2, '0');
        return `${day}.${month}.${year} um ${hour}:${minute} Uhr`;
    }
}
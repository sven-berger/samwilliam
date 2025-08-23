import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js";

export default class extends Controller {
    static targets = [
        "blogContainer"
    ];

    connect() {
        this.blogRequest();
    }

    async blogRequest() {
        const response = await fetch("/assets/api/blog/blog.json");
        const daten = await response.json();
        const template = document.querySelector("#blogTemplate");
        daten.forEach(eintrag => {
            const clone = template.content.cloneNode(true);
            clone.querySelector("h2").textContent = eintrag.headline;
            clone.querySelector("p span").textContent = this.formatDate(eintrag.created_at);
            clone.querySelector(".content").innerHTML = eintrag.content;
            clone.querySelector("small span").textContent = this.formatDate(eintrag.changed_at);

            this.blogContainerTarget.appendChild(clone);
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
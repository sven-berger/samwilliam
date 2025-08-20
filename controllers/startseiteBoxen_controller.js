import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
    static targets = 
    [
        "boxTitle",
        "content"
    ]

    connect() {
        this.readBox1();
    }

    readBox1() {
    fetch("/assets/api/boxen/boxen.json")
        .then(response => response.json())
        .then(data => {
            const eintrag = data.find(item => item.id === 1);
            if (eintrag) {
                this.boxTitleTarget.textContent = eintrag.boxTitle;
                this.contentTarget.innerHTML = eintrag.content;
            }
        })
    .catch(err => console.error("Fehler beim Laden:", err));
    }
}
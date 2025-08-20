import { Controller } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

export default class extends Controller {
    static targets = ["boxTitle", "content"]
    static values = { id: Number } // e.g. data-startseiteBoxen-id-value="1"

    connect() {
        let id;
        if (this.hasIdValue) {
            id = this.idValue;
        } else {
            id = 1;
        }

        this.readBox(id);
    }

    // Aktion: per data-action aufrufbar, z. B.
    // data-action="click->startseiteBoxen#load" data-startseiteBoxen-id-param="2"
    load(event) {
        let id;
        if (event && event.params && event.params.id != null) {
            // event.params.id existiert (nicht null/undefined)
            id = Number(event.params.id);
        } else if (this.hasIdValue) {
            // Stimulus-Value im HTML gesetzt
            id = this.idValue;
        } else {
            // Fallback
            id = 1;
        }
        
        this.readBox(id);
    }

    readBox(id) {
        fetch("/assets/api/boxen/boxen.json")
            .then(response => response.json())
            .then(data => {
            const eintrag = data.find(item => item.id === Number(id))
            if (eintrag) {
                this.boxTitleTarget.textContent = eintrag.boxTitle
                this.contentTarget.innerHTML = eintrag.content
            } else {
                this.boxTitleTarget.textContent = ""
                this.contentTarget.innerHTML = ""
                console.warn(`Box mit id=${id} nicht gefunden.`)
            }
        })
        .catch(err => console.error("Fehler beim Laden:", err))
    }
}
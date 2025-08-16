import { Application } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

// Importiere die Controller
import ZahlenRatenController from "../controllers/zahlenRaten_controller.js"

// Starte Anwendungen, indem die Controller registriert werden
const application = Application.start()

application.register("zahlenRaten", ZahlenRatenController)

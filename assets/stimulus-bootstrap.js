import { Application } from "https://unpkg.com/@hotwired/stimulus/dist/stimulus.js"

// Importiere die Controller
import ZahlenRatenController from "../controllers/zahlenRaten_controller.js"
import startseiteBoxenController from "../controllers/startseiteBoxen_controller.js"
import eintrittspreiseController from "../controllers/eintritspreise_controller.js"
import blogPageController from "../controllers/blogPage_controller.js"
import knowHowPageController from "../controllers/knowHowPage_controller.js"
import minitaschenrechnerController from "../controllers/minitaschenrechner_controller.js"
import SkillsController from "../controllers/SkillsController.js"



// Starte Anwendungen, indem die Controller registriert werden
const application = Application.start()

application.register("zahlenRaten", ZahlenRatenController)
application.register("startseiteBoxen", startseiteBoxenController)
application.register("eintrittspreise", eintrittspreiseController)
application.register("blogPage", blogPageController)
application.register("knowHowPage", knowHowPageController)
application.register("minitaschenrechner", minitaschenrechnerController)
application.register("Skills", SkillsController)
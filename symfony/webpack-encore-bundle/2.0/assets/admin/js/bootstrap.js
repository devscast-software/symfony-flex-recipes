import { startStimulusApp } from '@symfony/stimulus-bridge'
import ModalFormController from "./controllers/modal-form_controller"
import ModalContentController from "./controllers/model-content_controller";

export const app = startStimulusApp(undefined)

app.register('modal-form', ModalFormController)
app.register('modal-content', ModalContentController)

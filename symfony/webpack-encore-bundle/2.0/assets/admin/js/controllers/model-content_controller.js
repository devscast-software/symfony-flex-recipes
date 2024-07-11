import { Controller } from '@hotwired/stimulus';
import {toast} from "../../../shared/js/utils/alert";

export default class ModalContentController extends Controller {
    static targets = ['modal', 'content'];
    modal = null;
    loaded = false;

    async open(event)
    {
        event.preventDefault();
        if (!this.modal) {
            this.modal = new window.bootstrap.Modal(this.modalTarget);
        }

        this.modal.show();

        if (this.modal && this.modal._isShown && !this.loaded) {
            const url = this.modalTarget.getAttribute('url')
            const response = await fetch(url);
            const data = await response.text();

            if (response.status === 200) {
                this.contentTarget.innerHTML = data;
            } else {
                await toast("error", "une erreur est survenue");
                this.modal.dispose();
            }

            this.loaded = true;
        }
    }

    async close(event)
    {
        event.preventDefault();
        this.modal.dispose();
    }
}

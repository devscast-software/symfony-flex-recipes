// app style
import './scss/app.scss'

// start stimulus app
import './js/bootstrap'

// custom elements definition
import Toast from "../shared/js/elements/Toast";
import AutogrowTextarea from "../shared/js/elements/AutogrowTextarea";
import DatePicker from "../shared/js/elements/DatePicker";
import DeleteButton from "./js/elements/DeleteButton";
import ActionButton from "./js/elements/ActionButton";
import {EditorTextarea} from "../shared/js/elements/EditorTextarea";

// Custom Element
customElements.define('app-toast', Toast)
customElements.define('app-textarea-autogrow', AutogrowTextarea, {extends: 'textarea'})
customElements.define('app-markdown-editor', EditorTextarea, { extends: 'textarea' })
customElements.define('app-datepicker', DatePicker, {extends: 'input'})
customElements.define('app-delete-button', DeleteButton, {extends: 'button'})
customElements.define('app-action-button', ActionButton, {extends: 'button'})

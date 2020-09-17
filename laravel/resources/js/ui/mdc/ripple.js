import { MDCRipple } from "@material/ripple";

const selectors = '' +
    '.mdc-ripple-surface, .mdc-fab, .mdc-ripple-surface--primary, .mdc-button, ' +
    '.mdc-icon-button, .mdc-card__primary-action, .mdc-ripple';

const ripples = [].map.call(document.querySelectorAll(selectors), function(el) {
    const ripple = new MDCRipple(el);
    ripple.unbounded = true;
    ripple.layout();
});



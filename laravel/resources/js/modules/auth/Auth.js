import $ from 'jquery';
import axios from 'axios';

const routes = {
    verify: '/verify/email',
    authorize: '/authorize'
};

class Auth
{
    /**
     * Verify email and sent password
     * @param email
     * @param form
     */
    verify(email, form) {

        this.email = email;
        this.toggleLoader(form, true, 'Sending...');

        axios.post(routes.verify, {
            email: this.email
        })
        .then((response) => {
           if(response.status === 202) {
               form.hide();
               // Alert
               $('#auth__form--authorize').show();
               $('#password').focus();
           }
        })
        .catch((error) => {
            if(error.response.status === 401) {
                // Alert
            }
        })
        .finally(() => {
            this.toggleLoader(form, false, 'Send');
        });
    }

    /**
     * Authorize by email and password
     *
     * @param password
     * @param form
     */
    authorize(password, form) {

        this.toggleLoader(form, true, 'Authorizing...');

        axios.post(routes.authorize, {
            email: this.email,
            password: password
        })
        .then((response) => {
            if(response.status === 200) {
                window.location.href = '/';
            }
        })
        .catch((error) => {
            if(error.response.status === 401) {
                // Alert
            }
        })
        .finally(() => {
            this.toggleLoader(form, false, 'Submit');
        });
    }

    /**
     * Toggle loader
     *
     * @param form
     * @param toggle
     * @param text
     */
    toggleLoader(form, toggle, text = '') {
        if(toggle) {
            form.find('button').html(text).attr('disabled', true);
        } else {
            form.find('button').html(text).attr('disabled', false);
        }
    }
}

export default new Auth();



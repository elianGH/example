import HttpService from '../../http-service';

const routes = {
    signIn: 'auth/sign-in',
    signUp: 'auth/sign-up',
    signOut: 'auth/sign-out',
    saveDeviceToken: 'push/save-token'
};

class Client
{
    saveDeviceToken(parameters, headers) {
        const http = new HttpService();
        return http.post(routes.saveDeviceToken, parameters, headers);
    }
}

export default Client;
import HttpService from '../../http-service';

const routes = {
    login: 'login',
    get: "teams",

};

class Team
{
    login(parameters, headers) {
        const http = new HttpService();
        return http.post(routes.login, parameters, headers);
    }

    get(parameters, headers) {
        const http = new HttpService();
        return http.get(routes.get, parameters, headers);
    }
}

export default new Team();
import HttpService from '../../../http-service';

const routes = {
    get: "anatomy/muscles",
    store: "anatomy/muscles",
    show: "anatomy/muscles",
    delete: "anatomy/muscles",
    update: "anatomy/muscles",
};

class Team
{
    get(parameters, headers) {
        const http = new HttpService();
        return http.get(routes.get, parameters, headers);
    }
}

export default new Team();
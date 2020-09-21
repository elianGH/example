import HttpService from "../http-service";

class ManagerService
{
    http(httpMethod) {
        this.httpMethod = httpMethod;
        this.http = new HttpService();

        return this;
    }

    to(route) {
        this.route = route;

        return this;
    }

    call(headers = {}, parameters = {}) {
        return this.http[this.httpMethod](this.route, parameters, headers);
    }
}

export default ManagerService;
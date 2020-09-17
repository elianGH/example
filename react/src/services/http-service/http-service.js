import axios from 'axios';
import { API_URL } from "./consants";

class HttpService
{
    constructor(responseType = 'json') {
        this.instance = axios.create({
            baseURL: API_URL,
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            responseType,
        });
    }

    post(url, parameters = {}, headers = {}) {
        return this.instance.post(url, parameters, {
            headers: headers
        })
            .then(response => this.response(response))
            .catch(error => this.response(error));
    }

    get(url, parameters = {}, headers = {}) {
        return this.instance.get(url, {
            headers: headers
        })
            .then(response => this.response(response))
            .catch(error => this.response(error.response));
    }

    response({ data, status, headers }) {
        return {
            ...data,
            status,
            failure: status >= 300,
            headers,
        };
    }
}

export default HttpService;
import {put, takeLatest, call, getContext, apply} from "@redux-saga/core/effects";
import { useToken } from '../../../utils/hooks';
import {ROUTES} from "../../../routes/api";
import {
    FETCH_TEAMMATES_REQUEST,
    FETCH_TEAMMATES_FAILURE,
    FETCH_TEAMMATES_SUCCESS
} from './constants';

function* fetchTeammates(action) {

    const managerService = yield getContext('managerService');

    const { failure, data, errors } = yield apply(
        managerService,
        managerService.http("get").to(ROUTES["teammates"].crud).call,
        []
        // [useToken(action.payload.token)],
    );

    if(! failure) {
        yield put({
            type: FETCH_TEAMMATES_SUCCESS,
            payload: data.teammates
        });
    } else {
        yield put({
            type: FETCH_TEAMMATES_FAILURE,
            payload: errors
        });
    }
}

export default function* teammates() {
    yield takeLatest(FETCH_TEAMMATES_REQUEST, fetchTeammates);
}
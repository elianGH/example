import {put, takeLatest, call, getContext} from "@redux-saga/core/effects";
import { useToken } from '../../utils/hooks';

import {
    FETCH_TEAMMATES_REQUEST,
    FETCH_TEAMMATES_FAILURE,
    FETCH_TEAMMATES_SUCCESS
} from './constants';

function* fetchTeammates(action) {

    const managerService = yield getContext('managerService');

    console.log(managerService);

    const { failure, data, errors } = yield call(
        managerService.team().get,
        {},
        { Authorization: `Bearer ${action.payload.token}` }
        // useToken(action.payload.token)
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
import {put, takeLatest, call, getContext, apply} from "@redux-saga/core/effects";
import { useToken } from '../../../utils/hooks';
import { ROUTES } from "../../../routes/api";
import {
    FETCH_MUSCLES_REQUEST,
    FETCH_MUSCLES_SUCCESS,
    FETCH_MUSCLES_FAILURE
} from './constants';

function* fetchMuscles(action) {

    const managerService = yield getContext('managerService');

    const { failure, data, errors } = yield apply(
        managerService,
        managerService.http("get").to(ROUTES["muscles"].crud).call,
        []
        // [useToken(action.payload.token)],
    );

    if(! failure) {
        yield put({
            type: FETCH_MUSCLES_SUCCESS,
            payload: data.muscles
        });
    } else {
        yield put({
            type: FETCH_MUSCLES_FAILURE,
            payload: errors
        });
    }
}

export default function* muscles() {
    yield takeLatest(FETCH_MUSCLES_REQUEST, fetchMuscles);
}
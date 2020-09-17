import {put, takeLatest, call, getContext} from "@redux-saga/core/effects";
import { useToken } from '../../utils/hooks';

import {
    SAVE_DEVICE_TOKEN_REQUEST,
    SAVE_DEVICE_TOKEN_FAILURE,
    SAVE_DEVICE_TOKEN_SUCCESS,
} from './constants';

function* saveToken(action) {

    console.log('SAVE TOKEN');


    const kgService = yield getContext('kgService');
    const response = yield call(
        kgService.user().saveDeviceToken,
        {
            device_token: action.payload.device_token
        },
        useToken(action.payload.token)
    );


    if(! response.failure && response.data && response.data.device_token) {
        yield put({
            type: SAVE_DEVICE_TOKEN_SUCCESS,
            payload: response.data.device_token
        });
    } else {
        yield put({
            type: SAVE_DEVICE_TOKEN_FAILURE,
            payload: response.errors
        });
    }
}

export default function* home() {
    yield takeLatest(SAVE_DEVICE_TOKEN_REQUEST, saveToken);
}
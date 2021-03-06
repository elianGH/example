import { combineReducers } from 'redux';
import appReducer from '../containers/app/reducer';

export default function createReducer(injectedReducers = {}) {
    return combineReducers({
        app: appReducer,
        ...injectedReducers,
    });
}

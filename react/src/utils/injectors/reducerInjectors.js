import { isEmpty, isFunction, isString } from 'lodash';

import createReducer from '../../bootstrap/rootReducer';

export function injectReducerFactory(store) {
    return function injectReducer(key, reducer) {

        if(isString(key) && !isEmpty(key) && isFunction(reducer)) {
            // Check `store.injectedReducers[key] === reducer` for hot reloading when a key is the same but a reducer is different
            if (
                Reflect.has(store.injectedReducers, key) &&
                store.injectedReducers[key] === reducer
            )
                return;

            store.injectedReducers[key] = reducer; // eslint-disable-line no-param-reassign
            store.replaceReducer(createReducer(store.injectedReducers));
        } else {
            console.log('reducer not valid');
        }
    };
}

export default function getInjectors(store) {
    return {
        injectReducer: injectReducerFactory(store, true),
    };
}

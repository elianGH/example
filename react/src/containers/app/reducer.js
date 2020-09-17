import {
    TOGGLE_DRAWER
} from './constants';

const initialState = {
    openDrawer: true,
};

const app = (state, action) => {

    if (state === undefined) {
        return initialState;
    }

    switch (action.type) {
        case TOGGLE_DRAWER:
            return {
                ...state,
                openDrawer: !state.openDrawer
            };
        default:
            return state;
    }
};

export default app;

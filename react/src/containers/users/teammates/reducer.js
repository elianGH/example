import {
    FETCH_TEAMMATES_REQUEST,
    FETCH_TEAMMATES_FAILURE,
    FETCH_TEAMMATES_SUCCESS
} from './constants';

const initialState = {
    data: [],
    loading: false,
    error: null,
    page: 0,
    perPage: 10,
    rowsPerPageOptions: [10, 25, 100]
};

const teammatesReducer = (state, action) => {

    if (state === undefined) {
        return initialState;
    }

    switch (action.type) {
        case FETCH_TEAMMATES_REQUEST:
            return {
                ...state,
                loading: true,
                error: null,
            };
        case FETCH_TEAMMATES_SUCCESS:
            return {
                ...state,
                loading: false,
                data: action.payload,
            };
        case FETCH_TEAMMATES_FAILURE:
            return {
                ...state,
                loading: false,
                error: action.payload,
            };
        default:
            return state;
    }
};

export default teammatesReducer;

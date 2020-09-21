import {
    FETCH_MUSCLES_FAILURE,
    FETCH_MUSCLES_REQUEST,
    FETCH_MUSCLES_SUCCESS
} from './constants';

const initialState = {
    data: [],
    loading: false,
    error: null,
    page: 0,
    perPage: 10,
    rowsPerPageOptions: [10, 25, 100]
};

const musclesReducer = (state, action) => {

    if (state === undefined) {
        return initialState;
    }

    switch (action.type) {
        case FETCH_MUSCLES_REQUEST:
            return {
                ...state,
                loading: true,
                error: null,
            };
        case FETCH_MUSCLES_SUCCESS:
            return {
                ...state,
                loading: false,
                data: action.payload,
            };
        case FETCH_MUSCLES_FAILURE:
            return {
                ...state,
                loading: false,
                error: action.payload,
            };
        default:
            return state;
    }
};

export default musclesReducer;

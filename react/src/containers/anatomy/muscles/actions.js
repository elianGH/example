import {
    FETCH_MUSCLES_REQUEST,
} from "./constants";

export const fetchMuscles = (token) => {
    token = "19|UQ5He1kOXRwGgrLzVavIvaUbv4lHeHlvpK9mu1gAWc5xGxf5Xk7pTblXHlFyvJ9NQziafVnsl9VYGecK";

    return {
        type: FETCH_MUSCLES_REQUEST,
        payload: {
            token
        }
    }
};

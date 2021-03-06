import React from 'react';
import { connect } from 'react-redux';
import { withManagerService } from "../../../components/hocs";
import { compose } from "../../../utils/compose";
import withReducer from "../../../utils/injectors/injectReducer";
import withSaga from "../../../utils/injectors/injectSaga";
import reducer from "./reducer";
import saga from "./saga";
import { fetchMuscles } from "./actions";
import { ROUTES } from "../../../routes/spa";
import { RenderRoutes } from "../../../utils/routes/render-routes";

const MusclesContainer = (props) => {

    return <RenderRoutes routes={ROUTES["muscles"]} props={props}/>;
};

const mapStateToProps = ({ muscles }) => {
    return muscles;
};

const mapDispatchToProps = (dispatch) => {
    return {
        fetchMuscles: () => dispatch(fetchMuscles()),
        onChangePage: f => f,
        onChangeRowsPerPage: f => f,
    };
};

const key = 'muscles';

export default compose(
    withReducer({ key, reducer }),
    withSaga({ key, saga }),
    withManagerService(),
    connect(mapStateToProps, mapDispatchToProps),
)(MusclesContainer);



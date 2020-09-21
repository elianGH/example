import React from 'react';
import { connect } from 'react-redux';
import { withManagerService } from "../../../components/hocs";
import { compose } from "../../../utils/compose";
import withReducer from "../../../utils/injectors/injectReducer";
import withSaga from "../../../utils/injectors/injectSaga";
import reducer from "./reducer";
import saga from "./saga";
import { fetchTeammates } from "./actions";
import {RenderRoutes} from "../../../utils/routes/render-routes";
import {ROUTES} from "../../../routes/spa";

const TeammatesContainer = (props) => {

    return <RenderRoutes routes={ROUTES["teammates"]} props={props}/>;
};

const mapStateToProps = ({ teammates }) => {
    return teammates;
};

const mapDispatchToProps = (dispatch) => {
    return {
        fetchTeammates: () => dispatch(fetchTeammates()),
        onChangePage: f => f,
        onChangeRowsPerPage: f => f,
    };
};

const key = 'teammates';

export default compose(
    withReducer({ key, reducer }),
    withSaga({ key, saga }),
    withManagerService(),
    connect(mapStateToProps, mapDispatchToProps),
)(TeammatesContainer);



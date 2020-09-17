import React from 'react';
import { connect } from 'react-redux';
import { Route, Switch } from "react-router-dom";
import { withManagerService } from "../../components/hoc";
import { compose } from "../../utils/compose";
import withReducer from "../../utils/injectors/injectReducer";
import withSaga from "../../utils/injectors/injectSaga";
import reducer from "./reducer";
import saga from "./saga";
import { fetchTeammates } from "./actions";
import { Teammates, CreateTeammate, ShowTeammate, EditTeammate } from "../../views/teammates";

const TeammatesContainer = (props) => {

    return (
        <Switch>
            <Route exact path="/teammates">
                <Teammates { ...props } />
            </Route>
            <Route exact path="/teammates/create">
                <CreateTeammate />
            </Route>
            <Route exact path="/teammates/edit">
                <EditTeammate />
            </Route>
            <Route path="/teammates/:id">
                <ShowTeammate />
            </Route>
        </Switch>
    );
};

const key = 'teammates';

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

export default compose(
    withReducer({ key, reducer }),
    withSaga({ key, saga }),
    withManagerService(),
    connect(mapStateToProps, mapDispatchToProps),
)(TeammatesContainer);



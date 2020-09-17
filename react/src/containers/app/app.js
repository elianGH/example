import React from 'react';
import { connect } from 'react-redux';
import CssBaseline from '@material-ui/core/CssBaseline';
import { RenderRoutes } from "../../utils/routes/render-routes";
import { ROUTES } from "../../routes";
import { withManagerService } from "../../components/hoc";
import { compose } from "../../utils/compose";
import { useStyles } from "./styles";
import AppBar from "../../components/app-bar";
import { useReducer } from "../../utils/injectors/injectReducer";
import reducer from "./reducer";
import { toggleDrawer } from "./actions";

const AppContainer = ({ openDrawer, toggleDrawer }) => {

    const classes = useStyles();
    const key = 'app';
    useReducer({ key, reducer });

    return (
        <div className={classes.root}>
            <CssBaseline />
            <AppBar openDrawer={openDrawer} toggleDrawer={toggleDrawer}/>
            <main className={classes.content}>
                <div className={classes.toolbar} />
                <RenderRoutes routes={ROUTES} />
            </main>
        </div>
    );
};

const mapStateToProps = ({ app: { openDrawer } }) => {
    return { openDrawer };
};

const mapDispatchToProps = (dispatch) => {
    return {
        toggleDrawer: () => dispatch(toggleDrawer())
    };
};

export default compose(
    withManagerService(),
    connect(mapStateToProps, mapDispatchToProps)
)(AppContainer);



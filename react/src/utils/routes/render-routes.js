import React from "react";
import { Route, Switch } from "react-router-dom";

export const RenderRoutes = ({ routes, props }) => {
    return (
        <Switch>
            {routes.map((route, i) => {
                return <Route
                    key={route.key}
                    path={route.path}
                    exact={route.exact}
                    render={routeProps => (
                        <route.component {...routeProps} { ...props }/>
                    )}
                />;
            })}
            <Route component={() => <h1>Not Found!</h1>} />
        </Switch>
    );
};
import React from "react";
import Dashboard from "../views/dashboard";
import Teammates from "../containers/teammates";

export const ROUTES = [
    { path: "/", key: "ROOT", exact: true, component: Dashboard },
    { path: "/teammates", key: "TEAMS", component: Teammates },
];
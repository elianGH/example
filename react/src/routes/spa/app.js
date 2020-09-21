import React from "react";
import Dashboard from "../../views/dashboard";
import Teammates from "../../containers/users/teammates";
import Muscles from "../../containers/anatomy/muscles";

export const app = [
    { path: "/", key: "ROOT", exact: true, component: Dashboard },
    { path: "/teammates", key: "TEAMS", component: Teammates },
    { path: "/anatomy/muscles", key: "MUSCLES", component: Muscles },
];
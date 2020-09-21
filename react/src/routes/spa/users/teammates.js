import React from "react";
import { Teammates, CreateTeammate, ShowTeammate, EditTeammate } from "../../../views/teammates";

export const teammates = [
    { path: "/teammates", key: "teammates.index", exact: true, component: Teammates },
    { path: "/teammates/create", key: "teammates.create", exact: true, component: CreateTeammate },
    { path: "/teammates/:id/edit", key: "teammates.edit", component: EditTeammate },
    { path: "/teammates/:id", key: "teammates.show", component: ShowTeammate },
];
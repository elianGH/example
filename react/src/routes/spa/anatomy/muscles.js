import React from "react";
import { Muscles, EditMuscle, ShowMuscle, CreateMuscle } from "../../../views/anatomy/muscles";

export const muscles = [
    { path: "/anatomy/muscles", key: "muscles.index", exact: true, component: Muscles },
    { path: "/anatomy/muscles/create", key: "muscles.create", exact: true, component: CreateMuscle },
    { path: "/anatomy/muscles/:id/edit", key: "muscles.edit", component: EditMuscle },
    { path: "/anatomy/muscles/:id", key: "muscles.show", component: ShowMuscle },
];
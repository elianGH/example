import React, {Fragment, useState} from "react";
import ListItem from "@material-ui/core/ListItem";
import ListItemIcon from "@material-ui/core/ListItemIcon";
import FolderOutlinedIcon from "@material-ui/icons/FolderOutlined";
import ListItemText from "@material-ui/core/ListItemText";
import ExpandLess from "@material-ui/icons/ExpandLess";
import ExpandMore from "@material-ui/icons/ExpandMore";
import Collapse from "@material-ui/core/Collapse";
import List from "@material-ui/core/List";
import {NavLink} from "react-router-dom";
import GridOnOutlinedIcon from "@material-ui/icons/GridOnOutlined";
import { useStyles } from "../styles";

const WorkoutMenu = () => {

    const classes = useStyles();
    const [workoutOpen, setWorkoutOpen] = useState(false);

    return (
        <Fragment>
            <ListItem button onClick={() => setWorkoutOpen(!workoutOpen)}>
                <ListItemIcon>
                    <FolderOutlinedIcon />
                </ListItemIcon>
                <ListItemText primary="Workout" />
                {workoutOpen ? <ExpandLess /> : <ExpandMore />}
            </ListItem>
            <Collapse in={workoutOpen} timeout="auto" unmountOnExit>
                <List component="div" disablePadding>
                    <ListItem button className={classes.nested} component={NavLink} to="/workout/programs">
                        <ListItemIcon>
                            <GridOnOutlinedIcon />
                        </ListItemIcon>
                        <ListItemText primary="Programs" />
                    </ListItem>
                    <ListItem button className={classes.nested} component={NavLink} to="/workout/exercises">
                        <ListItemIcon>
                            <FolderOutlinedIcon />
                        </ListItemIcon>
                        <ListItemText primary="Exercises" />
                    </ListItem>
                    <ListItem button className={classes.nested} component={NavLink} to="/workout/equipments">
                        <ListItemIcon>
                            <FolderOutlinedIcon />
                        </ListItemIcon>
                        <ListItemText primary="Equipments" />
                    </ListItem>
                </List>
            </Collapse>
        </Fragment>
    );
};

export default WorkoutMenu;
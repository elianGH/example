import React, {Fragment, useState} from "react";
import ListItem from "@material-ui/core/ListItem";
import ListItemIcon from "@material-ui/core/ListItemIcon";
import PeopleAltOutlinedIcon from "@material-ui/icons/PeopleAltOutlined";
import ListItemText from "@material-ui/core/ListItemText";
import ExpandLess from "@material-ui/icons/ExpandLess";
import ExpandMore from "@material-ui/icons/ExpandMore";
import Collapse from "@material-ui/core/Collapse";
import List from "@material-ui/core/List";
import {NavLink} from "react-router-dom";
import PersonOutlineOutlinedIcon from "@material-ui/icons/PersonOutlineOutlined";
import SupervisorAccountOutlinedIcon from "@material-ui/icons/SupervisorAccountOutlined";
import { useStyles } from "../styles";

const UsersMenu = () => {

    const [usersOpen, setUsersOpen] = useState(false);
    const classes = useStyles();

    return (
        <Fragment>
            <ListItem button onClick={() => setUsersOpen(!usersOpen)}>
                <ListItemIcon>
                    <PeopleAltOutlinedIcon />
                </ListItemIcon>
                <ListItemText primary="Users" />
                {usersOpen ? <ExpandLess /> : <ExpandMore />}
            </ListItem>
            <Collapse in={usersOpen} timeout="auto" unmountOnExit>
                <List component="div" disablePadding>
                    <ListItem button className={classes.nested} component={NavLink} to="/clients">
                        <ListItemIcon>
                            <PersonOutlineOutlinedIcon />
                        </ListItemIcon>
                        <ListItemText primary="Clients" />
                    </ListItem>
                    <ListItem button className={classes.nested} component={NavLink} to="/teammates">
                        <ListItemIcon>
                            <SupervisorAccountOutlinedIcon />
                        </ListItemIcon>
                        <ListItemText primary="Teammates" />
                    </ListItem>
                </List>
            </Collapse>
        </Fragment>
    );
};

export default UsersMenu;
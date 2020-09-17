import React, {useState} from "react";
import {useTheme} from "@material-ui/core/styles";
import clsx from 'clsx';
import Divider from '@material-ui/core/Divider';
import IconButton from '@material-ui/core/IconButton';
import ChevronLeftIcon from '@material-ui/icons/ChevronLeft';
import ChevronRightIcon from '@material-ui/icons/ChevronRight';
import ListItem from '@material-ui/core/ListItem';
import ListItemIcon from '@material-ui/core/ListItemIcon';
import ListItemText from '@material-ui/core/ListItemText';
import { Drawer as DrawerMaterial } from "@material-ui/core";
import { useStyles } from "./styles";
import DashboardOutlinedIcon from '@material-ui/icons/DashboardOutlined';
import { WorkoutMenu, UsersMenu, AnatomyMenu } from "./menu";
import ListWithSubheader from "./list-with-subheader";
import { NavLink } from "react-router-dom";

const Drawer = ({ openDrawer, toggleDrawer }) => {
    const classes = useStyles();
    const theme = useTheme();

    return (
        <DrawerMaterial
            variant="permanent"
            className={clsx(classes.drawer, {
                [classes.drawerOpen]: openDrawer,
                [classes.drawerClose]: !openDrawer,
            })}
            classes={{
                paper: clsx({
                    [classes.drawerOpen]: openDrawer,
                    [classes.drawerClose]: !openDrawer,
                }),
            }}
        >
            <div className={classes.toolbar}>
                <IconButton onClick={() => toggleDrawer()}>
                    {theme.direction === 'rtl' ? <ChevronRightIcon /> : <ChevronLeftIcon />}
                </IconButton>
            </div>
            <Divider />
            <ListItem button component={NavLink} to="/">
                <ListItemIcon>
                    <DashboardOutlinedIcon />
                </ListItemIcon>
                <ListItemText primary="Dashboard" />
            </ListItem>
            <ListWithSubheader title="Users">
                <UsersMenu />
            </ListWithSubheader>
            <ListWithSubheader title="Content">
                <WorkoutMenu />
                <AnatomyMenu />
            </ListWithSubheader>
        </DrawerMaterial>
    );
};

export default Drawer;
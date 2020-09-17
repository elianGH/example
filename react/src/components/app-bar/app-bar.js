import React from "react";
import clsx from "clsx";
import AppBarMaterial from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import IconButton from '@material-ui/core/IconButton';
import MenuIcon from '@material-ui/icons/Menu';
import { useStyles } from "./styles";
import Drawer from "../drawer";

const AppBar = ({ openDrawer, toggleDrawer }) => {
    const classes = useStyles();

    return (
        <React.Fragment>
            <AppBarMaterial
                position="fixed"
                className={clsx(classes.appBar, {
                    [classes.appBarShift]: openDrawer,
                })}
            >
                <Toolbar>
                    <IconButton
                        color="inherit"
                        aria-label="open drawer"
                        onClick={toggleDrawer}
                        edge="start"
                        className={clsx(classes.menuButton, {
                            [classes.hide]: openDrawer,
                        })}
                    >
                        <MenuIcon />
                    </IconButton>
                </Toolbar>
            </AppBarMaterial>
            <Drawer openDrawer={openDrawer} toggleDrawer={toggleDrawer}/>
        </React.Fragment>
    );
};

export default AppBar;
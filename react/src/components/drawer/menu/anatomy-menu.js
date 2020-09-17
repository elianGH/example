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
import { useStyles } from "../styles";

const AnatomyMenu = () => {

    const classes = useStyles();
    const [open, setOpen] = useState(false);

    return (
        <Fragment>
            <ListItem button onClick={() => setOpen(!open)}>
                <ListItemIcon>
                    <FolderOutlinedIcon />
                </ListItemIcon>
                <ListItemText primary="Anatomy" />
                {open ? <ExpandLess /> : <ExpandMore />}
            </ListItem>
            <Collapse in={open} timeout="auto" unmountOnExit>
                <List component="div" disablePadding>
                    <ListItem button className={classes.nested} component={NavLink} to="/anatomy/muscles">
                        <ListItemIcon>
                            <FolderOutlinedIcon />
                        </ListItemIcon>
                        <ListItemText primary="Muscles" />
                    </ListItem>
                </List>
            </Collapse>
        </Fragment>
    );
};

export default AnatomyMenu;
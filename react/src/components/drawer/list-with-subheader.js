import React from "react";
import ListSubheader from "@material-ui/core/ListSubheader";
import List from "@material-ui/core/List";

const ListWithSubheader = ({ children, title }) => {
    return (
        <List
            component="nav"
            subheader={
                <ListSubheader component="div">
                    { title }
                </ListSubheader>
            }
        >
            { children }
        </List>
    );
};

export default ListWithSubheader;
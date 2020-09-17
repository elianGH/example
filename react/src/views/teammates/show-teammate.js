import React from "react";
import Typography from "@material-ui/core/Typography";
import { useParams } from "react-router-dom";

const ShowTeammate = () => {

    let { id } = useParams();

    return (
        <Typography paragraph>
            Teams - show {id}
        </Typography>
    );
};

export default ShowTeammate;
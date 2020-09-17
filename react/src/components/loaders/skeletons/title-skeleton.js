import React from "react";
import Skeleton from '@material-ui/lab/Skeleton';
import Typography from "@material-ui/core/Typography";

const TitleSkeleton = ({ width = "100%", variant = "h6" }) => {
    return (
        <Typography variant={variant}>
            <Skeleton animation="wave" width={width} style={{ marginBottom: 10, }}/>
        </Typography>
    );
};

export default TitleSkeleton;
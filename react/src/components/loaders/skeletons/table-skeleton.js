import React from "react";
import Grid from '@material-ui/core/Grid';
import Skeleton from '@material-ui/lab/Skeleton';

const TableSkeleton = () => {
    return (
        <Grid container>
            <Grid container spacing={3}>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
            </Grid>
            <Grid container spacing={3} style={{ marginTop: 5, }}>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
            </Grid>
            <Grid container spacing={3}>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
            </Grid>
            <Grid container spacing={3}>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
            </Grid>
            <Grid container spacing={3}>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
                <Grid item xs>
                    <Skeleton animation="wave" />
                </Grid>
            </Grid>
        </Grid>
    );
};

export default TableSkeleton;
import React, { Fragment, useEffect } from "react";
import Typography from "@material-ui/core/Typography";
import Table from "../../../components/table";
import { columns } from "../../../containers/anatomy/muscles/config/columns";
import { TableSkeleton, TitleSkeleton } from "../../../components/loaders/skeletons";

const Muscles = (props) => {

    const { data, page, perPage, onChangePage, onChangeRowsPerPage, fetchMuscles,
        loading, rowsPerPageOptions } = props;

    useEffect(() => {
        fetchMuscles(page, perPage);
    }, [page, perPage]);

    if(loading) {
        return (
            <Fragment>
                <TitleSkeleton width="30%" />
                <TableSkeleton />
            </Fragment>
        );
    }

    return (
        <Fragment>
            <Typography color="textPrimary">Muscles</Typography>
            <Table
                columns={columns}
                rows={data}
                rowsPerPage={perPage}
                page={page}
                onChangePage={onChangePage}
                onChangeRowsPerPage={onChangeRowsPerPage}
                rowsPerPageOptions={rowsPerPageOptions}
            />
        </Fragment>
    );
};

export default Muscles;
import React, { Fragment, useEffect } from "react";
import Typography from "@material-ui/core/Typography";
import Table from "../../components/table";
import Breadcrumbs from '@material-ui/core/Breadcrumbs';
import NavigateNextIcon from "@material-ui/icons/NavigateNext"
import Link from '@material-ui/core/Link';
import { NavLink } from "react-router-dom";
import { TableSkeleton, TitleSkeleton } from "../../components/loaders/skeletons";

const Teammates = (props) => {

    const { data, page, perPage, onChangePage,
            onChangeRowsPerPage, fetchTeammates,
            loading, rowsPerPageOptions } = props;

    useEffect(() => {
        fetchTeammates(page, perPage);
    }, [page, perPage]);

    const columns = [
        {
            id: "id",
            label: "ID",
            align: "left"
        },
        {
            id: "name",
            label: "Name",
            align: 'left',
        },
        {
            id: "email",
            label: "Email",
            align: "left",
        },
        {
            id: "phone",
            label: "Phone",
            align: "left",
        }
    ];

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
            <Breadcrumbs style={{ marginBottom: 15, }}  separator={<NavigateNextIcon fontSize="small" />} aria-label="breadcrumb">
                <Link color="inherit" to="/" component={NavLink}>
                    Dashboard
                </Link>
                <Typography color="textPrimary">Teammates</Typography>
            </Breadcrumbs>
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

export default Teammates;
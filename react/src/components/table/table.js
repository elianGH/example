import React from "react";
import { useStyles } from "./styles";
import Paper from '@material-ui/core/Paper';
import TableMaterial from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TablePagination from '@material-ui/core/TablePagination';
import TableRow from '@material-ui/core/TableRow';
import Typography from "@material-ui/core/Typography";

const Table = (props) => {
    const { columns, rows, page, rowsPerPage, onChangePage,
            onChangeRowsPerPage, rowsPerPageOptions = [10, 25, 100],
            height = "auto", isSticky = false } = props;

    const classes = useStyles();

    return (
        <Paper className={classes.root}>
            <TableContainer style={{ height: height }}>
                <TableMaterial stickyHeader={isSticky} aria-label="sticky table">
                    <TableHead>
                        <TableRow>
                            {columns.map((column) => (
                                <TableCell
                                    key={column.id}
                                    align={column.align}
                                    style={ column.styles ? { ...column.styles } : {} }
                                >
                                    <Typography style={{ fontWeight: "bold" }}>{column.label}</Typography>
                                </TableCell>
                            ))}
                        </TableRow>
                    </TableHead>
                    <TableBody>
                        {rows.length ? rows.slice(page * rowsPerPage, page * rowsPerPage + rowsPerPage).map((row) => {
                            return (
                                <TableRow hover role="checkbox" tabIndex={-1} key={row.code}>
                                    {columns.map((column) => {
                                        const { id, align, format } = column;
                                        const value = row[id];
                                        return (
                                            <TableCell key={id} align={align}>
                                                { format ? format(value) : value }
                                            </TableCell>
                                        );
                                    })}
                                </TableRow>
                            );
                        }) : null}
                    </TableBody>
                </TableMaterial>
            </TableContainer>
            <TablePagination
                rowsPerPageOptions={rowsPerPageOptions}
                component="div"
                count={rows.length}
                rowsPerPage={rowsPerPage}
                page={page}
                onChangePage={onChangePage}
                onChangeRowsPerPage={onChangeRowsPerPage}
            />
        </Paper>
    );
};

export default Table;
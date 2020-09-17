import { createMuiTheme } from '@material-ui/core/styles';

const defaultTheme = createMuiTheme({
    palette: {
        primary: {
            main: "#303F9F",
        },
        background: {
            default: "#f5f6f8"
        }
    },
});

const drawerWidth = 240;

export {
    defaultTheme,
    drawerWidth
};
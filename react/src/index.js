import React from 'react';
import ReactDOM from 'react-dom';
import App from './containers/app';
import { BrowserRouter } from "react-router-dom";
import { Provider } from 'react-redux';
import { ManagerServiceProvider } from "./contexts/manager-service-context";
import configureStore from './bootstrap/configureStore';
import {ManagerService} from "./services/manager-service";
import { ThemeProvider } from '@material-ui/styles';
import { defaultTheme } from "./theme";

const store = configureStore();
const managerService = new ManagerService();

ReactDOM.render(
  <React.StrictMode>
      <Provider store={store}>
          <BrowserRouter>
              <ManagerServiceProvider value={managerService}>
                  <ThemeProvider theme={defaultTheme}>
                      <App />
                  </ThemeProvider>
              </ManagerServiceProvider>
          </BrowserRouter>
      </Provider>
  </React.StrictMode>,
  document.getElementById('root')
);

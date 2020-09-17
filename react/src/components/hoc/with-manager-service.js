import React from 'react';
import { ManagerServiceConsumer } from '../../contexts/manager-service-context';

const withManagerService = () => (Wrapped) => {

  return (props) => {
    return (
      <ManagerServiceConsumer>
        {
          (managerService) => {
            return (<Wrapped {...props}
                     managerService={managerService}/>);
          }
        }
      </ManagerServiceConsumer>
    );
  }
};

export default withManagerService;

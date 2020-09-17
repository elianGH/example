import React from 'react';
import loadable from '../../utils/loadable';
import LoadingIndicator from '../../components/loading-indicator';

export default loadable(() => import('./index'), {
    fallback: <LoadingIndicator />,
});
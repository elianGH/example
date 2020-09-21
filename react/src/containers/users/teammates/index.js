import React from 'react';
import loadable from '../../../utils/loadable';
import LoadingIndicator from '../../../components/loaders/loading-indicator';

export default loadable(() => import('./teammates'), {
    fallback: <LoadingIndicator />,
});
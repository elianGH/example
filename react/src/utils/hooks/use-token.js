import React from 'react';

const useToken = (token) => token ? { Authorization: `Bearer ${token}` } : {};

export default useToken;
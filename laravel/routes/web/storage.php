<?php
/*
|--------------------------------------------------------------------------
| Storage file routes
|--------------------------------------------------------------------------
*/

    /**
     * @var \Illuminate\Routing\Router $router
     * Download file
     * FileController@download
     */
    $router->get('files/download/{uuid}', ['as' => 'files.download', 'uses' => 'Storage\FileController@download']);

    /**
     * Stream file inline
     * FileController@inline
     */
    $router->get('files/inline/{uuid}', ['as' => 'files.inline', 'uses' => 'Storage\FileController@inline']);

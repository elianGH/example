<?php

require base_path('routes/api/auth.php');

Route::middleware('auth:sanctum')->group(function () {
    require base_path('routes/api/anatomy.php');
    require base_path('routes/api/users.php');
});

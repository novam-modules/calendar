<?php

foreach(['my', 'admin'] as $prefix){

    Route::group([
        'prefix'        => $prefix,
        'middleware'    => ['web', 'Admin'],
        'namespace'     => 'Admin\Calendar\Http\Controllers'],
        function(){
            Route::resource('calendar', CalendarController::class);
        });
}

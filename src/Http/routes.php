<?php

Route::group([
    'namespace'  => 'srekcud\Seat\StockPlugin\Http\Controllers',
    'middleware' => ['web', 'auth'],
    'prefix' => 'stock',
], function () {

});
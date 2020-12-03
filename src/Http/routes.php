<?php

use DcatAdminExt\Cascader\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('cascader', Controllers\CascaderController::class.'@index');
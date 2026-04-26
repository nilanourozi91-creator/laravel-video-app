<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
//welcome page route
// route::view('/','welcome');
route::get('/',[VideoController::class,'home']);
route::view('/add','insert');

route::view('/update','video.update');
//group route of video
route::prefix('video')->controller(VideoController::class)->group(function () {
   route::view('/add','video.insert');
   route::get('/','index');
   route::post('/insert','create');
   route::get('/update/{id}','update');
   route::post('/edite/{id}','edite');
   route::delete('/delete/{id}','delete');
});
route::get('/al',[VideoController::class,' newvideo']);
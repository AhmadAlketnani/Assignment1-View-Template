<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function (){
    $info=[
        'name'=>'ahmad alketnani',
        'job'=>'web developer with laravel',
        'phone'=>'+972 59 586 8199',
        'email'=>' aalktnany383@gmail.com',
        'website'=>'MyCV.com',
        'instagram'=>'https://www.instagram.com/ahmad_j_alketnani/',
        'address'=>'Jabalia, Gaza, Palestine',
        'lan'=>[
            ['Arabic',90],
            ['English',40]
        ],
        'skills'=>[
            ['html',90],
            ['css',70],
            ['javascript',80],
            ['php',60],
            ['laravel',60],
            ['mysql',85],
            ['linux',75]
            ]
    ];

    return view('index')->with(['info'=>$info]);
});

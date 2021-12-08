<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\DemoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[DemoController::class,'view']);

Route::post('post-data',[DemoController::class,'postData']);
Route::get('test',function(){

});

Route::view('/','welcome');
Route::redirect('homeurl', 'welcome',301);

//compact , array format, with
Route::get('/newfile',function(){
    $name = 'Nanum Coder Update';
    $id     = 5;

    $data   = [
        'name' => $name,
        'id'   => $id
    ];
    return view('user-views.new-file')->with('data',$data);
    // return view('user-views.new-file',[ 'name' => $name, 'id' => $id ]);
    // return view('user-views.new-file',compact('name','id'));
});
Route::get('about',function(){
    return view('about');
});
//get post put patch delete options
/*

 1. Create Homepage
 2. Create menu's like about, services, contact us
 3. Create each pages for each link

    Today We learnt about
    1. Composer dept
    2.Routing - Routeserviceprovider
    3.Routing - Available Router Methods
    4.Routing - Callbacks or closer
    5.Routing - view boot
    6.Routing - parameter 
    7.Routing - Redirect Routes
    8.Routing - View Routes
    9.R0uting - Route Parameters
    10.Routing - Optional Parameters
    11.Routing - Regular Expression Constraints
    12.Views   - Creating & Rendering Views
    13.Views   - Nested View Directories
    14.Views   - Passing Data To Views
    15.URL     - Generate Home URL

*/

/*
1. Create Controller
2. Rendering view from controller
3. Pass data to view from controller
4. How to form submit
5. CSRF token
6. How to get the data from Request($request)
7. Creating Migration
8. Migration Work Flow
9. Migrating to DB
10.ENV setup
11.How to create Model
12. Model and table link
13. Data Insert in controller using object method
14. Flash Data using with method
*/
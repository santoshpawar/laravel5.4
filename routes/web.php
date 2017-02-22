<?php
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
use App\Task;
Route::get('/task','TasksController@show');

 

//AIzaSyCQX1XE9mrU0MrQq1ygrFQyqTQZnromsx8
Route::get('/task/{task}', function($id){
	$test=DB::table('tasks')->find($id);
	return view('show',compact('test'));
});

 

//Route::get('/', 'GoogleSearchController@index');

?>

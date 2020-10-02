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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/testroute", function(){
	return view("guest.form");
});

Route::post("/testpost", function(Request $req){
	$data =[
		[
			"name"=>$req->post()["name"],
			"lastname"=>$req->post()["lastname"],
			"address"=>$req->post()["address"],
			"biography"=>$req->post()["biography"],
			"birthd"=>$req->post()["birthd"]


		],
		[
			"name"=>"fkjsakfsa",
			"lastname"=>"fksak",
			"address"=>$req->post()["address"],
			"biography"=>$req->post()["biography"],
			"birthd"=>$req->post()["birthd"]	
		]
	];
	return view("guest.table", ["newdata"=>$data]);

})->name("testpostroute");

Route::get("/index",function(){
	return view("guest.index");
});

Route::get("/single",function(){
	return view("guest.single");
});

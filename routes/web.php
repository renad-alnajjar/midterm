<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Crud;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
});
Route::get('/home', function () {
    $cruds=DB::table('cruds')->get();
      return view('home',compact('cruds'));
  });

  Route::post('stores', function (Request $request) {
   /*   // using Query Builder
    DB::table('cruds') ->insert([
     'name'=>$request->names
     , 'price'=>$request->price
    , 'quantity'=>$request->quantity ,
    ]);*/

  //  using Query Eloquent
    $crud= new Crud(); 
    $crud->name=$request->names;
     $crud->price=$request->price;
    $crud->quantity=$request->quantity;
    $crud->save();
   return redirect('/home') ;
});
Route::get('deletes/{id}', function($id) {
    $crud =Crud::find($id);  // using Eloquent 
   $crud->delete();  
   return redirect()->back();
    });
   Route::get('editform/{id}', function($id) {
    $crud =Crud::findorFail($id);  
    return view('create',compact('crud'));
    });
  Route::post('updateform/{id}', function(Request $request ,$id) {
    $crud= new Crud(); 
    $crud->name=$request->names;
    $crud->price=$request->price;
    $crud->quantity=$request->quantity;
    $crud->save();
    return redirect('/home');
     });
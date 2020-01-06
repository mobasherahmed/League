<?php


// (( Team ))
// list all Team
Route::get('team','TeamController@index');
// add new Team [filling data in HTML]
Route::get('new-team',function(){
  return view('admin/team/new-team');
});
// adding new Team 
Route::post('add-team','TeamController@create');
// delete a Team record
Route::get('delete-team', 'TeamController@remove');
// Update Team record
Route::get('update-team', function(){
  return view('admin/team/update-team');
});
// update Team record > controller
Route::post('update-team' , 'TeamController@update');
// read Team record
Route::get('read-team', function(){
  return view('admin/team/read-team');
});
// (( End of Team ))
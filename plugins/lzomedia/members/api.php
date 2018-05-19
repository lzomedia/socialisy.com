<?php

\Route::get('/onGetJsonMembers', function (){


	$members =  new \LzoMedia\Members\Models\Members();


	return \Response::json($members->orderBy('created_at','DESC')->paginate());

});

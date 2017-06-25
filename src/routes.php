<?php
Route::get('products', function(){
	$products = DB::select("SELECT * FROM products");

	return view('Calculator::products')->with('products', $products);
});
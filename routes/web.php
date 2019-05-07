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

Route::pattern('id','([0-9]*)');
Route::pattern('cid','([0-9]*)');
Route::pattern('slug','(.*)');


Route::namespace('Train')->group(function(){
	Route::get('', [
		'uses' => 'IndexController@index',
		'as' => 'train.index.index'
	]);
	Route::get('gioi-thieu', [
		'uses' => 'IndexController@about',
		'as' => 'train.index.about'
	]);
	Route::get('gia-ve-tau', [
		'uses' => 'IndexController@banggia',
		'as' => 'train.index.banggia'
	]);
	Route::get('ve-tau', [
		'uses' => 'IndexController@vetau',
		'as' => 'train.index.vetau'
	]);
	Route::get('lien-he', [
		'uses' => 'IndexController@contact',
		'as' => 'train.index.contact'
	]);
	Route::post('lien-he', [
		'uses' => 'IndexController@postContact',
		'as' => 'train.index.contact'
	]);
	Route::get('tin-tuc', [
		'uses' => 'PostController@index',
		'as' => 'train.post.index'
	]);
	Route::get('{slug}-{id}.html', [
		'uses' => 'PostController@detail',
		'as' => 'train.post.detail'
	]);
	Route::get('gio-hang', [
		'uses' => 'CartController@cart',
		'as' => 'train.cart.cart'
	]);
	Route::post('gio-hang', [
		'uses' => 'CartController@cart',
		'as' => 'train.cart.cart'
	]);
	Route::get('thanh-toan', [
		'uses' => 'CartController@checkout',
		'as' => 'train.cart.checkout'
	]);
	Route::post('thanh-toan-post', [
		'uses' => 'CartController@thanhtoan',
		'as' => 'train.cart.thanhtoan'
	]);
	Route::get('huy-gio-hang', [
		'uses' => 'CartController@destroy',
		'as' => 'train.cart.destroy'
	]);
	Route::get('dat-ve-thanh-cong', [
		'uses' => 'IndexController@success',
		'as' => 'train.index.success'
	]);
	Route::get('sitemap.xml', [
		'uses' => 'IndexController@sitemap',
		'as' => 'train.index.sitemap'
	]);
});

Route::post('email', [
    'uses' => 'TrangChuController@goiEmail',
    'as' => 'front.email'
]);

Route::namespace('Ajax')->group(function(){
	Route::get('/ajax/cart', [
		'uses' => 'AdminController@cart',
		'as' => 'ajax.admin.cart'
	]);
	Route::get('/ajax/post', [
		'uses' => 'AdminController@post',
		'as' => 'ajax.admin.post'
	]);
});
Route::namespace('Auth')->group(function(){
	Route::get('login', [
		'uses' => 'AuthController@getLogin',
		'as' => 'auth.auth.login'
	]);
	Route::post('login', [
		'uses' => 'AuthController@postLogin',
		'as' => 'auth.auth.login'
	]);
	Route::get('logout', [
		'uses' => 'AuthController@logout',
		'as' => 'auth.auth.logout'
	]);
});

Route::namespace('Admin')->middleware('auth')->group(function(){
// Index ADMIN	
	Route::prefix('admin')->group(function(){
		Route::get('', [
			'uses' => 'IndexController@index',
			'as' => 'admin.index.index'
		]);
	//tag
		Route::prefix('train')->group(function(){
			Route::get('', [
				'uses' => 'TrainController@index',
				'as' => 'admin.train.index'
			]);
			Route::get('add', [
				'uses' => 'TrainController@getAdd',
				'as' => 'admin.train.add'
			]);
			Route::post('add', [
				'uses' => 'TrainController@postAdd',
				'as' => 'admin.train.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'TrainController@getEdit',
				'as' => 'admin.train.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'TrainController@postEdit',
				'as' => 'admin.train.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'TrainController@delete',
				'as' => 'admin.train.delete'
			]);
				Route::get('{id}/add', [
					'uses' => 'CostController@getAdd',
					'as' => 'admin.cost.add'
				]);
				Route::post('{id}/add', [
					'uses' => 'CostController@postAdd',
					'as' => 'admin.compact(varname)st.add'
				]);
				Route::get('{id}/edit/{cid}', [
					'uses' => 'CostController@getEdit',
					'as' => 'admin.cost.edit'
				]);
				Route::post('{id}/edit/{cid}', [
					'uses' => 'CostController@postEdit',
					'as' => 'admin.cost.edit'
				]);
				Route::get('{id}/delete/{cid}', [
					'uses' => 'CostController@delete',
					'as' => 'admin.cost.delete'
				]);
		});
		
		Route::prefix('post')->group(function(){
			Route::get('', [
				'uses' => 'PostController@index',
				'as' => 'admin.post.index'
			]);
			Route::get('add', [
				'uses' => 'PostController@getAdd',
				'as' => 'admin.post.add'
			]);
			Route::post('add', [
				'uses' => 'PostController@postAdd',
				'as' => 'admin.post.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'PostController@getEdit',
				'as' => 'admin.post.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'PostController@postEdit',
				'as' => 'admin.post.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'PostController@delete',
				'as' => 'admin.post.delete'
			]);
		});
		Route::prefix('users')->group(function(){
			Route::get('', [
				'uses' => 'UsersController@index',
				'as' => 'admin.users.index'
			]);
			Route::get('add', [
				'uses' => 'UsersController@getAdd',
				'as' => 'admin.users.add'
			]);
			Route::post('add', [
				'uses' => 'UsersController@postAdd',
				'as' => 'admin.users.add'
			]);
			Route::get('edit/{cid}', [
				'uses' => 'UsersController@getEdit',
				'as' => 'admin.users.edit'
			]);
			Route::post('edit/{cid}', [
				'uses' => 'UsersController@postEdit',
				'as' => 'admin.users.edit'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'UsersController@delete',
				'as' => 'admin.users.delete'
			]);
		});
		Route::prefix('contact')->group(function(){
			Route::get('', [
				'uses' => 'ContactController@index',
				'as' => 'admin.contact.index'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'ContactController@delete',
				'as' => 'admin.contact.delete'
			]);
		});
		Route::prefix('cart')->group(function(){
			Route::get('', [
				'uses' => 'CartController@index',
				'as' => 'admin.cart.index'
			]);
			Route::get('delete/{cid}', [
				'uses' => 'CartController@delete',
				'as' => 'admin.cart.delete'
			]);
		});
		Route::prefix('email')->group(function(){
			Route::get('', [
				'uses' => 'EmailController@index',
				'as' => 'admin.email.index'
			]);
			Route::get('delete/{id}', [
				'uses' => 'EmailController@delete',
				'as' => 'admin.email.delete'
			]);
		});
	});
});
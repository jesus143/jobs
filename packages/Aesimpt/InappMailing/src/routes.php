<?php

Route::group(
	[
		'middleware' => ['web']
	], 
	function () {

		Route::group(
			[
				'prefix' => 'mail'
			],
			function() {

				// Post Create
				Route::group(
					[
						'prefix' => 'create'
					],
					function() {
						Route::post('/thread',	     'Aesimpt\InAppMailing\Controllers\MailController@createThreadAction')->name('mail.create.thread');
						Route::post('/message/{id}', 'Aesimpt\InAppMailing\Controllers\MailController@createMessageAction')->name('mail.create.message');
					}
				);

				// Post Update
				Route::group(
					[
						'prefix' => 'update'
					],
					function() {
						Route::post('/status/{field}/{bool}', 'Aesimpt\InAppMailing\Controllers\MailController@UpdateThreadAction')->name('mail.update.thread');
					}
				);

				// Pages
				Route::get('/inbox',   'Aesimpt\InAppMailing\Controllers\PageController@getInbox')->name('mail.inbox');
				Route::get('/read',    'Aesimpt\InAppMailing\Controllers\PageController@getReadBox')->name('mail.read');
				Route::get('/sent',    'Aesimpt\InAppMailing\Controllers\PageController@getSentBox')->name('mail.sent');
				Route::get('/unread',  'Aesimpt\InAppMailing\Controllers\PageController@getUnreadBox')->name('mail.unread');
				Route::get('/deleted', 'Aesimpt\InAppMailing\Controllers\PageController@getDeletedBox')->name('mail.deleted');
				Route::get('/starred', 'Aesimpt\InAppMailing\Controllers\PageController@getStarredBox')->name('mail.starred');
				Route::get('/create/', 'Aesimpt\InAppMailing\Controllers\PageController@threadCreate')->name('mail.thread.create');
				Route::get('/{id}',    'Aesimpt\InAppMailing\Controllers\PageController@messageCreate')->name('mail.message.create');
			}
		);
	}
);
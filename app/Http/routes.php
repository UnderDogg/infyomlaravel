<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/home');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('core/applogs', ['as'=> 'core.applogs.index', 'uses' => 'Core\ApplogsController@index']);
Route::post('core/applogs', ['as'=> 'core.applogs.store', 'uses' => 'Core\ApplogsController@store']);
Route::get('core/applogs/create', ['as'=> 'core.applogs.create', 'uses' => 'Core\ApplogsController@create']);
Route::put('core/applogs/{applogs}', ['as'=> 'core.applogs.update', 'uses' => 'Core\ApplogsController@update']);
Route::patch('core/applogs/{applogs}', ['as'=> 'core.applogs.update', 'uses' => 'Core\ApplogsController@update']);
Route::delete('core/applogs/{applogs}', ['as'=> 'core.applogs.destroy', 'uses' => 'Core\ApplogsController@destroy']);
Route::get('core/applogs/{applogs}', ['as'=> 'core.applogs.show', 'uses' => 'Core\ApplogsController@show']);
Route::get('core/applogs/{applogs}/edit', ['as'=> 'core.applogs.edit', 'uses' => 'Core\ApplogsController@edit']);


Route::get('core/attachmentChunks', ['as'=> 'core.attachmentChunks.index', 'uses' => 'Core\AttachmentChunksController@index']);
Route::post('core/attachmentChunks', ['as'=> 'core.attachmentChunks.store', 'uses' => 'Core\AttachmentChunksController@store']);
Route::get('core/attachmentChunks/create', ['as'=> 'core.attachmentChunks.create', 'uses' => 'Core\AttachmentChunksController@create']);
Route::put('core/attachmentChunks/{attachmentChunks}', ['as'=> 'core.attachmentChunks.update', 'uses' => 'Core\AttachmentChunksController@update']);
Route::patch('core/attachmentChunks/{attachmentChunks}', ['as'=> 'core.attachmentChunks.update', 'uses' => 'Core\AttachmentChunksController@update']);
Route::delete('core/attachmentChunks/{attachmentChunks}', ['as'=> 'core.attachmentChunks.destroy', 'uses' => 'Core\AttachmentChunksController@destroy']);
Route::get('core/attachmentChunks/{attachmentChunks}', ['as'=> 'core.attachmentChunks.show', 'uses' => 'Core\AttachmentChunksController@show']);
Route::get('core/attachmentChunks/{attachmentChunks}/edit', ['as'=> 'core.attachmentChunks.edit', 'uses' => 'Core\AttachmentChunksController@edit']);


Route::get('core/attachments', ['as'=> 'core.attachments.index', 'uses' => 'Core\AttachmentsController@index']);
Route::post('core/attachments', ['as'=> 'core.attachments.store', 'uses' => 'Core\AttachmentsController@store']);
Route::get('core/attachments/create', ['as'=> 'core.attachments.create', 'uses' => 'Core\AttachmentsController@create']);
Route::put('core/attachments/{attachments}', ['as'=> 'core.attachments.update', 'uses' => 'Core\AttachmentsController@update']);
Route::patch('core/attachments/{attachments}', ['as'=> 'core.attachments.update', 'uses' => 'Core\AttachmentsController@update']);
Route::delete('core/attachments/{attachments}', ['as'=> 'core.attachments.destroy', 'uses' => 'Core\AttachmentsController@destroy']);
Route::get('core/attachments/{attachments}', ['as'=> 'core.attachments.show', 'uses' => 'Core\AttachmentsController@show']);
Route::get('core/attachments/{attachments}/edit', ['as'=> 'core.attachments.edit', 'uses' => 'Core\AttachmentsController@edit']);


Route::get('core/autocloseCriterias', ['as'=> 'core.autocloseCriterias.index', 'uses' => 'Core\AutocloseCriteriaController@index']);
Route::post('core/autocloseCriterias', ['as'=> 'core.autocloseCriterias.store', 'uses' => 'Core\AutocloseCriteriaController@store']);
Route::get('core/autocloseCriterias/create', ['as'=> 'core.autocloseCriterias.create', 'uses' => 'Core\AutocloseCriteriaController@create']);
Route::put('core/autocloseCriterias/{autocloseCriterias}', ['as'=> 'core.autocloseCriterias.update', 'uses' => 'Core\AutocloseCriteriaController@update']);
Route::patch('core/autocloseCriterias/{autocloseCriterias}', ['as'=> 'core.autocloseCriterias.update', 'uses' => 'Core\AutocloseCriteriaController@update']);
Route::delete('core/autocloseCriterias/{autocloseCriterias}', ['as'=> 'core.autocloseCriterias.destroy', 'uses' => 'Core\AutocloseCriteriaController@destroy']);
Route::get('core/autocloseCriterias/{autocloseCriterias}', ['as'=> 'core.autocloseCriterias.show', 'uses' => 'Core\AutocloseCriteriaController@show']);
Route::get('core/autocloseCriterias/{autocloseCriterias}/edit', ['as'=> 'core.autocloseCriterias.edit', 'uses' => 'Core\AutocloseCriteriaController@edit']);


Route::get('core/autocloseRules', ['as'=> 'core.autocloseRules.index', 'uses' => 'Core\AutocloseRulesController@index']);
Route::post('core/autocloseRules', ['as'=> 'core.autocloseRules.store', 'uses' => 'Core\AutocloseRulesController@store']);
Route::get('core/autocloseRules/create', ['as'=> 'core.autocloseRules.create', 'uses' => 'Core\AutocloseRulesController@create']);
Route::put('core/autocloseRules/{autocloseRules}', ['as'=> 'core.autocloseRules.update', 'uses' => 'Core\AutocloseRulesController@update']);
Route::patch('core/autocloseRules/{autocloseRules}', ['as'=> 'core.autocloseRules.update', 'uses' => 'Core\AutocloseRulesController@update']);
Route::delete('core/autocloseRules/{autocloseRules}', ['as'=> 'core.autocloseRules.destroy', 'uses' => 'Core\AutocloseRulesController@destroy']);
Route::get('core/autocloseRules/{autocloseRules}', ['as'=> 'core.autocloseRules.show', 'uses' => 'Core\AutocloseRulesController@show']);
Route::get('core/autocloseRules/{autocloseRules}/edit', ['as'=> 'core.autocloseRules.edit', 'uses' => 'Core\AutocloseRulesController@edit']);


Route::get('core/bayesCategories', ['as'=> 'core.bayesCategories.index', 'uses' => 'Core\BayesCategoriesController@index']);
Route::post('core/bayesCategories', ['as'=> 'core.bayesCategories.store', 'uses' => 'Core\BayesCategoriesController@store']);
Route::get('core/bayesCategories/create', ['as'=> 'core.bayesCategories.create', 'uses' => 'Core\BayesCategoriesController@create']);
Route::put('core/bayesCategories/{bayesCategories}', ['as'=> 'core.bayesCategories.update', 'uses' => 'Core\BayesCategoriesController@update']);
Route::patch('core/bayesCategories/{bayesCategories}', ['as'=> 'core.bayesCategories.update', 'uses' => 'Core\BayesCategoriesController@update']);
Route::delete('core/bayesCategories/{bayesCategories}', ['as'=> 'core.bayesCategories.destroy', 'uses' => 'Core\BayesCategoriesController@destroy']);
Route::get('core/bayesCategories/{bayesCategories}', ['as'=> 'core.bayesCategories.show', 'uses' => 'Core\BayesCategoriesController@show']);
Route::get('core/bayesCategories/{bayesCategories}/edit', ['as'=> 'core.bayesCategories.edit', 'uses' => 'Core\BayesCategoriesController@edit']);


Route::get('core/breakLines', ['as'=> 'core.breakLines.index', 'uses' => 'Core\BreakLinesController@index']);
Route::post('core/breakLines', ['as'=> 'core.breakLines.store', 'uses' => 'Core\BreakLinesController@store']);
Route::get('core/breakLines/create', ['as'=> 'core.breakLines.create', 'uses' => 'Core\BreakLinesController@create']);
Route::put('core/breakLines/{breakLines}', ['as'=> 'core.breakLines.update', 'uses' => 'Core\BreakLinesController@update']);
Route::patch('core/breakLines/{breakLines}', ['as'=> 'core.breakLines.update', 'uses' => 'Core\BreakLinesController@update']);
Route::delete('core/breakLines/{breakLines}', ['as'=> 'core.breakLines.destroy', 'uses' => 'Core\BreakLinesController@destroy']);
Route::get('core/breakLines/{breakLines}', ['as'=> 'core.breakLines.show', 'uses' => 'Core\BreakLinesController@show']);
Route::get('core/breakLines/{breakLines}/edit', ['as'=> 'core.breakLines.edit', 'uses' => 'Core\BreakLinesController@edit']);


Route::get('core/catchAllRules', ['as'=> 'core.catchAllRules.index', 'uses' => 'Core\CatchAllRulesController@index']);
Route::post('core/catchAllRules', ['as'=> 'core.catchAllRules.store', 'uses' => 'Core\CatchAllRulesController@store']);
Route::get('core/catchAllRules/create', ['as'=> 'core.catchAllRules.create', 'uses' => 'Core\CatchAllRulesController@create']);
Route::put('core/catchAllRules/{catchAllRules}', ['as'=> 'core.catchAllRules.update', 'uses' => 'Core\CatchAllRulesController@update']);
Route::patch('core/catchAllRules/{catchAllRules}', ['as'=> 'core.catchAllRules.update', 'uses' => 'Core\CatchAllRulesController@update']);
Route::delete('core/catchAllRules/{catchAllRules}', ['as'=> 'core.catchAllRules.destroy', 'uses' => 'Core\CatchAllRulesController@destroy']);
Route::get('core/catchAllRules/{catchAllRules}', ['as'=> 'core.catchAllRules.show', 'uses' => 'Core\CatchAllRulesController@show']);
Route::get('core/catchAllRules/{catchAllRules}/edit', ['as'=> 'core.catchAllRules.edit', 'uses' => 'Core\CatchAllRulesController@edit']);


Route::get('core/comments', ['as'=> 'core.comments.index', 'uses' => 'Core\CommentsController@index']);
Route::post('core/comments', ['as'=> 'core.comments.store', 'uses' => 'Core\CommentsController@store']);
Route::get('core/comments/create', ['as'=> 'core.comments.create', 'uses' => 'Core\CommentsController@create']);
Route::put('core/comments/{comments}', ['as'=> 'core.comments.update', 'uses' => 'Core\CommentsController@update']);
Route::patch('core/comments/{comments}', ['as'=> 'core.comments.update', 'uses' => 'Core\CommentsController@update']);
Route::delete('core/comments/{comments}', ['as'=> 'core.comments.destroy', 'uses' => 'Core\CommentsController@destroy']);
Route::get('core/comments/{comments}', ['as'=> 'core.comments.show', 'uses' => 'Core\CommentsController@show']);
Route::get('core/comments/{comments}/edit', ['as'=> 'core.comments.edit', 'uses' => 'Core\CommentsController@edit']);


Route::get('core/crons', ['as'=> 'core.crons.index', 'uses' => 'Core\CronController@index']);
Route::post('core/crons', ['as'=> 'core.crons.store', 'uses' => 'Core\CronController@store']);
Route::get('core/crons/create', ['as'=> 'core.crons.create', 'uses' => 'Core\CronController@create']);
Route::put('core/crons/{crons}', ['as'=> 'core.crons.update', 'uses' => 'Core\CronController@update']);
Route::patch('core/crons/{crons}', ['as'=> 'core.crons.update', 'uses' => 'Core\CronController@update']);
Route::delete('core/crons/{crons}', ['as'=> 'core.crons.destroy', 'uses' => 'Core\CronController@destroy']);
Route::get('core/crons/{crons}', ['as'=> 'core.crons.show', 'uses' => 'Core\CronController@show']);
Route::get('core/crons/{crons}/edit', ['as'=> 'core.crons.edit', 'uses' => 'Core\CronController@edit']);


Route::get('core/cronLogs', ['as'=> 'core.cronLogs.index', 'uses' => 'Core\CronLogsController@index']);
Route::post('core/cronLogs', ['as'=> 'core.cronLogs.store', 'uses' => 'Core\CronLogsController@store']);
Route::get('core/cronLogs/create', ['as'=> 'core.cronLogs.create', 'uses' => 'Core\CronLogsController@create']);
Route::put('core/cronLogs/{cronLogs}', ['as'=> 'core.cronLogs.update', 'uses' => 'Core\CronLogsController@update']);
Route::patch('core/cronLogs/{cronLogs}', ['as'=> 'core.cronLogs.update', 'uses' => 'Core\CronLogsController@update']);
Route::delete('core/cronLogs/{cronLogs}', ['as'=> 'core.cronLogs.destroy', 'uses' => 'Core\CronLogsController@destroy']);
Route::get('core/cronLogs/{cronLogs}', ['as'=> 'core.cronLogs.show', 'uses' => 'Core\CronLogsController@show']);
Route::get('core/cronLogs/{cronLogs}/edit', ['as'=> 'core.cronLogs.edit', 'uses' => 'Core\CronLogsController@edit']);


Route::get('core/departments', ['as'=> 'core.departments.index', 'uses' => 'Core\DepartmentsController@index']);
Route::post('core/departments', ['as'=> 'core.departments.store', 'uses' => 'Core\DepartmentsController@store']);
Route::get('core/departments/create', ['as'=> 'core.departments.create', 'uses' => 'Core\DepartmentsController@create']);
Route::put('core/departments/{departments}', ['as'=> 'core.departments.update', 'uses' => 'Core\DepartmentsController@update']);
Route::patch('core/departments/{departments}', ['as'=> 'core.departments.update', 'uses' => 'Core\DepartmentsController@update']);
Route::delete('core/departments/{departments}', ['as'=> 'core.departments.destroy', 'uses' => 'Core\DepartmentsController@destroy']);
Route::get('core/departments/{departments}', ['as'=> 'core.departments.show', 'uses' => 'Core\DepartmentsController@show']);
Route::get('core/departments/{departments}/edit', ['as'=> 'core.departments.edit', 'uses' => 'Core\DepartmentsController@edit']);


Route::get('core/emailQueues', ['as'=> 'core.emailQueues.index', 'uses' => 'Core\EmailQueuesController@index']);
Route::post('core/emailQueues', ['as'=> 'core.emailQueues.store', 'uses' => 'Core\EmailQueuesController@store']);
Route::get('core/emailQueues/create', ['as'=> 'core.emailQueues.create', 'uses' => 'Core\EmailQueuesController@create']);
Route::put('core/emailQueues/{emailQueues}', ['as'=> 'core.emailQueues.update', 'uses' => 'Core\EmailQueuesController@update']);
Route::patch('core/emailQueues/{emailQueues}', ['as'=> 'core.emailQueues.update', 'uses' => 'Core\EmailQueuesController@update']);
Route::delete('core/emailQueues/{emailQueues}', ['as'=> 'core.emailQueues.destroy', 'uses' => 'Core\EmailQueuesController@destroy']);
Route::get('core/emailQueues/{emailQueues}', ['as'=> 'core.emailQueues.show', 'uses' => 'Core\EmailQueuesController@show']);
Route::get('core/emailQueues/{emailQueues}/edit', ['as'=> 'core.emailQueues.edit', 'uses' => 'Core\EmailQueuesController@edit']);


Route::get('core/errorLogs', ['as'=> 'core.errorLogs.index', 'uses' => 'Core\ErrorLogsController@index']);
Route::post('core/errorLogs', ['as'=> 'core.errorLogs.store', 'uses' => 'Core\ErrorLogsController@store']);
Route::get('core/errorLogs/create', ['as'=> 'core.errorLogs.create', 'uses' => 'Core\ErrorLogsController@create']);
Route::put('core/errorLogs/{errorLogs}', ['as'=> 'core.errorLogs.update', 'uses' => 'Core\ErrorLogsController@update']);
Route::patch('core/errorLogs/{errorLogs}', ['as'=> 'core.errorLogs.update', 'uses' => 'Core\ErrorLogsController@update']);
Route::delete('core/errorLogs/{errorLogs}', ['as'=> 'core.errorLogs.destroy', 'uses' => 'Core\ErrorLogsController@destroy']);
Route::get('core/errorLogs/{errorLogs}', ['as'=> 'core.errorLogs.show', 'uses' => 'Core\ErrorLogsController@show']);
Route::get('core/errorLogs/{errorLogs}/edit', ['as'=> 'core.errorLogs.edit', 'uses' => 'Core\ErrorLogsController@edit']);


Route::get('core/escalationNotifications', ['as'=> 'core.escalationNotifications.index', 'uses' => 'Core\EscalationNotificationsController@index']);
Route::post('core/escalationNotifications', ['as'=> 'core.escalationNotifications.store', 'uses' => 'Core\EscalationNotificationsController@store']);
Route::get('core/escalationNotifications/create', ['as'=> 'core.escalationNotifications.create', 'uses' => 'Core\EscalationNotificationsController@create']);
Route::put('core/escalationNotifications/{escalationNotifications}', ['as'=> 'core.escalationNotifications.update', 'uses' => 'Core\EscalationNotificationsController@update']);
Route::patch('core/escalationNotifications/{escalationNotifications}', ['as'=> 'core.escalationNotifications.update', 'uses' => 'Core\EscalationNotificationsController@update']);
Route::delete('core/escalationNotifications/{escalationNotifications}', ['as'=> 'core.escalationNotifications.destroy', 'uses' => 'Core\EscalationNotificationsController@destroy']);
Route::get('core/escalationNotifications/{escalationNotifications}', ['as'=> 'core.escalationNotifications.show', 'uses' => 'Core\EscalationNotificationsController@show']);
Route::get('core/escalationNotifications/{escalationNotifications}/edit', ['as'=> 'core.escalationNotifications.edit', 'uses' => 'Core\EscalationNotificationsController@edit']);


Route::get('core/files', ['as'=> 'core.files.index', 'uses' => 'Core\FilesController@index']);
Route::post('core/files', ['as'=> 'core.files.store', 'uses' => 'Core\FilesController@store']);
Route::get('core/files/create', ['as'=> 'core.files.create', 'uses' => 'Core\FilesController@create']);
Route::put('core/files/{files}', ['as'=> 'core.files.update', 'uses' => 'Core\FilesController@update']);
Route::patch('core/files/{files}', ['as'=> 'core.files.update', 'uses' => 'Core\FilesController@update']);
Route::delete('core/files/{files}', ['as'=> 'core.files.destroy', 'uses' => 'Core\FilesController@destroy']);
Route::get('core/files/{files}', ['as'=> 'core.files.show', 'uses' => 'Core\FilesController@show']);
Route::get('core/files/{files}/edit', ['as'=> 'core.files.edit', 'uses' => 'Core\FilesController@edit']);


Route::get('core/jobQueueMessageLogs', ['as'=> 'core.jobQueueMessageLogs.index', 'uses' => 'Core\JobQueueMessageLogsController@index']);
Route::post('core/jobQueueMessageLogs', ['as'=> 'core.jobQueueMessageLogs.store', 'uses' => 'Core\JobQueueMessageLogsController@store']);
Route::get('core/jobQueueMessageLogs/create', ['as'=> 'core.jobQueueMessageLogs.create', 'uses' => 'Core\JobQueueMessageLogsController@create']);
Route::put('core/jobQueueMessageLogs/{jobQueueMessageLogs}', ['as'=> 'core.jobQueueMessageLogs.update', 'uses' => 'Core\JobQueueMessageLogsController@update']);
Route::patch('core/jobQueueMessageLogs/{jobQueueMessageLogs}', ['as'=> 'core.jobQueueMessageLogs.update', 'uses' => 'Core\JobQueueMessageLogsController@update']);
Route::delete('core/jobQueueMessageLogs/{jobQueueMessageLogs}', ['as'=> 'core.jobQueueMessageLogs.destroy', 'uses' => 'Core\JobQueueMessageLogsController@destroy']);
Route::get('core/jobQueueMessageLogs/{jobQueueMessageLogs}', ['as'=> 'core.jobQueueMessageLogs.show', 'uses' => 'Core\JobQueueMessageLogsController@show']);
Route::get('core/jobQueueMessageLogs/{jobQueueMessageLogs}/edit', ['as'=> 'core.jobQueueMessageLogs.edit', 'uses' => 'Core\JobQueueMessageLogsController@edit']);


Route::get('core/jobQueueMessagePackets', ['as'=> 'core.jobQueueMessagePackets.index', 'uses' => 'Core\JobQueueMessagePacketsController@index']);
Route::post('core/jobQueueMessagePackets', ['as'=> 'core.jobQueueMessagePackets.store', 'uses' => 'Core\JobQueueMessagePacketsController@store']);
Route::get('core/jobQueueMessagePackets/create', ['as'=> 'core.jobQueueMessagePackets.create', 'uses' => 'Core\JobQueueMessagePacketsController@create']);
Route::put('core/jobQueueMessagePackets/{jobQueueMessagePackets}', ['as'=> 'core.jobQueueMessagePackets.update', 'uses' => 'Core\JobQueueMessagePacketsController@update']);
Route::patch('core/jobQueueMessagePackets/{jobQueueMessagePackets}', ['as'=> 'core.jobQueueMessagePackets.update', 'uses' => 'Core\JobQueueMessagePacketsController@update']);
Route::delete('core/jobQueueMessagePackets/{jobQueueMessagePackets}', ['as'=> 'core.jobQueueMessagePackets.destroy', 'uses' => 'Core\JobQueueMessagePacketsController@destroy']);
Route::get('core/jobQueueMessagePackets/{jobQueueMessagePackets}', ['as'=> 'core.jobQueueMessagePackets.show', 'uses' => 'Core\JobQueueMessagePacketsController@show']);
Route::get('core/jobQueueMessagePackets/{jobQueueMessagePackets}/edit', ['as'=> 'core.jobQueueMessagePackets.edit', 'uses' => 'Core\JobQueueMessagePacketsController@edit']);


Route::get('core/jobQueueMessages', ['as'=> 'core.jobQueueMessages.index', 'uses' => 'Core\JobQueueMessagesController@index']);
Route::post('core/jobQueueMessages', ['as'=> 'core.jobQueueMessages.store', 'uses' => 'Core\JobQueueMessagesController@store']);
Route::get('core/jobQueueMessages/create', ['as'=> 'core.jobQueueMessages.create', 'uses' => 'Core\JobQueueMessagesController@create']);
Route::put('core/jobQueueMessages/{jobQueueMessages}', ['as'=> 'core.jobQueueMessages.update', 'uses' => 'Core\JobQueueMessagesController@update']);
Route::patch('core/jobQueueMessages/{jobQueueMessages}', ['as'=> 'core.jobQueueMessages.update', 'uses' => 'Core\JobQueueMessagesController@update']);
Route::delete('core/jobQueueMessages/{jobQueueMessages}', ['as'=> 'core.jobQueueMessages.destroy', 'uses' => 'Core\JobQueueMessagesController@destroy']);
Route::get('core/jobQueueMessages/{jobQueueMessages}', ['as'=> 'core.jobQueueMessages.show', 'uses' => 'Core\JobQueueMessagesController@show']);
Route::get('core/jobQueueMessages/{jobQueueMessages}/edit', ['as'=> 'core.jobQueueMessages.edit', 'uses' => 'Core\JobQueueMessagesController@edit']);


Route::get('core/kbArticleLinks', ['as'=> 'core.kbArticleLinks.index', 'uses' => 'Core\KbArticleLinksController@index']);
Route::post('core/kbArticleLinks', ['as'=> 'core.kbArticleLinks.store', 'uses' => 'Core\KbArticleLinksController@store']);
Route::get('core/kbArticleLinks/create', ['as'=> 'core.kbArticleLinks.create', 'uses' => 'Core\KbArticleLinksController@create']);
Route::put('core/kbArticleLinks/{kbArticleLinks}', ['as'=> 'core.kbArticleLinks.update', 'uses' => 'Core\KbArticleLinksController@update']);
Route::patch('core/kbArticleLinks/{kbArticleLinks}', ['as'=> 'core.kbArticleLinks.update', 'uses' => 'Core\KbArticleLinksController@update']);
Route::delete('core/kbArticleLinks/{kbArticleLinks}', ['as'=> 'core.kbArticleLinks.destroy', 'uses' => 'Core\KbArticleLinksController@destroy']);
Route::get('core/kbArticleLinks/{kbArticleLinks}', ['as'=> 'core.kbArticleLinks.show', 'uses' => 'Core\KbArticleLinksController@show']);
Route::get('core/kbArticleLinks/{kbArticleLinks}/edit', ['as'=> 'core.kbArticleLinks.edit', 'uses' => 'Core\KbArticleLinksController@edit']);


Route::get('core/kbArticles', ['as'=> 'core.kbArticles.index', 'uses' => 'Core\KbArticlesController@index']);
Route::post('core/kbArticles', ['as'=> 'core.kbArticles.store', 'uses' => 'Core\KbArticlesController@store']);
Route::get('core/kbArticles/create', ['as'=> 'core.kbArticles.create', 'uses' => 'Core\KbArticlesController@create']);
Route::put('core/kbArticles/{kbArticles}', ['as'=> 'core.kbArticles.update', 'uses' => 'Core\KbArticlesController@update']);
Route::patch('core/kbArticles/{kbArticles}', ['as'=> 'core.kbArticles.update', 'uses' => 'Core\KbArticlesController@update']);
Route::delete('core/kbArticles/{kbArticles}', ['as'=> 'core.kbArticles.destroy', 'uses' => 'Core\KbArticlesController@destroy']);
Route::get('core/kbArticles/{kbArticles}', ['as'=> 'core.kbArticles.show', 'uses' => 'Core\KbArticlesController@show']);
Route::get('core/kbArticles/{kbArticles}/edit', ['as'=> 'core.kbArticles.edit', 'uses' => 'Core\KbArticlesController@edit']);


Route::get('core/kbCategories', ['as'=> 'core.kbCategories.index', 'uses' => 'Core\KbCategoriesController@index']);
Route::post('core/kbCategories', ['as'=> 'core.kbCategories.store', 'uses' => 'Core\KbCategoriesController@store']);
Route::get('core/kbCategories/create', ['as'=> 'core.kbCategories.create', 'uses' => 'Core\KbCategoriesController@create']);
Route::put('core/kbCategories/{kbCategories}', ['as'=> 'core.kbCategories.update', 'uses' => 'Core\KbCategoriesController@update']);
Route::patch('core/kbCategories/{kbCategories}', ['as'=> 'core.kbCategories.update', 'uses' => 'Core\KbCategoriesController@update']);
Route::delete('core/kbCategories/{kbCategories}', ['as'=> 'core.kbCategories.destroy', 'uses' => 'Core\KbCategoriesController@destroy']);
Route::get('core/kbCategories/{kbCategories}', ['as'=> 'core.kbCategories.show', 'uses' => 'Core\KbCategoriesController@show']);
Route::get('core/kbCategories/{kbCategories}/edit', ['as'=> 'core.kbCategories.edit', 'uses' => 'Core\KbCategoriesController@edit']);


Route::get('core/macroCategories', ['as'=> 'core.macroCategories.index', 'uses' => 'Core\MacroCategoriesController@index']);
Route::post('core/macroCategories', ['as'=> 'core.macroCategories.store', 'uses' => 'Core\MacroCategoriesController@store']);
Route::get('core/macroCategories/create', ['as'=> 'core.macroCategories.create', 'uses' => 'Core\MacroCategoriesController@create']);
Route::put('core/macroCategories/{macroCategories}', ['as'=> 'core.macroCategories.update', 'uses' => 'Core\MacroCategoriesController@update']);
Route::patch('core/macroCategories/{macroCategories}', ['as'=> 'core.macroCategories.update', 'uses' => 'Core\MacroCategoriesController@update']);
Route::delete('core/macroCategories/{macroCategories}', ['as'=> 'core.macroCategories.destroy', 'uses' => 'Core\MacroCategoriesController@destroy']);
Route::get('core/macroCategories/{macroCategories}', ['as'=> 'core.macroCategories.show', 'uses' => 'Core\MacroCategoriesController@show']);
Route::get('core/macroCategories/{macroCategories}/edit', ['as'=> 'core.macroCategories.edit', 'uses' => 'Core\MacroCategoriesController@edit']);


Route::get('core/macroReplies', ['as'=> 'core.macroReplies.index', 'uses' => 'Core\MacroRepliesController@index']);
Route::post('core/macroReplies', ['as'=> 'core.macroReplies.store', 'uses' => 'Core\MacroRepliesController@store']);
Route::get('core/macroReplies/create', ['as'=> 'core.macroReplies.create', 'uses' => 'Core\MacroRepliesController@create']);
Route::put('core/macroReplies/{macroReplies}', ['as'=> 'core.macroReplies.update', 'uses' => 'Core\MacroRepliesController@update']);
Route::patch('core/macroReplies/{macroReplies}', ['as'=> 'core.macroReplies.update', 'uses' => 'Core\MacroRepliesController@update']);
Route::delete('core/macroReplies/{macroReplies}', ['as'=> 'core.macroReplies.destroy', 'uses' => 'Core\MacroRepliesController@destroy']);
Route::get('core/macroReplies/{macroReplies}', ['as'=> 'core.macroReplies.show', 'uses' => 'Core\MacroRepliesController@show']);
Route::get('core/macroReplies/{macroReplies}/edit', ['as'=> 'core.macroReplies.edit', 'uses' => 'Core\MacroRepliesController@edit']);


Route::get('core/macroReplyDatas', ['as'=> 'core.macroReplyDatas.index', 'uses' => 'Core\MacroReplyDataController@index']);
Route::post('core/macroReplyDatas', ['as'=> 'core.macroReplyDatas.store', 'uses' => 'Core\MacroReplyDataController@store']);
Route::get('core/macroReplyDatas/create', ['as'=> 'core.macroReplyDatas.create', 'uses' => 'Core\MacroReplyDataController@create']);
Route::put('core/macroReplyDatas/{macroReplyDatas}', ['as'=> 'core.macroReplyDatas.update', 'uses' => 'Core\MacroReplyDataController@update']);
Route::patch('core/macroReplyDatas/{macroReplyDatas}', ['as'=> 'core.macroReplyDatas.update', 'uses' => 'Core\MacroReplyDataController@update']);
Route::delete('core/macroReplyDatas/{macroReplyDatas}', ['as'=> 'core.macroReplyDatas.destroy', 'uses' => 'Core\MacroReplyDataController@destroy']);
Route::get('core/macroReplyDatas/{macroReplyDatas}', ['as'=> 'core.macroReplyDatas.show', 'uses' => 'Core\MacroReplyDataController@show']);
Route::get('core/macroReplyDatas/{macroReplyDatas}/edit', ['as'=> 'core.macroReplyDatas.edit', 'uses' => 'Core\MacroReplyDataController@edit']);


Route::get('core/mailQueueDatas', ['as'=> 'core.mailQueueDatas.index', 'uses' => 'Core\MailQueueDataController@index']);
Route::post('core/mailQueueDatas', ['as'=> 'core.mailQueueDatas.store', 'uses' => 'Core\MailQueueDataController@store']);
Route::get('core/mailQueueDatas/create', ['as'=> 'core.mailQueueDatas.create', 'uses' => 'Core\MailQueueDataController@create']);
Route::put('core/mailQueueDatas/{mailQueueDatas}', ['as'=> 'core.mailQueueDatas.update', 'uses' => 'Core\MailQueueDataController@update']);
Route::patch('core/mailQueueDatas/{mailQueueDatas}', ['as'=> 'core.mailQueueDatas.update', 'uses' => 'Core\MailQueueDataController@update']);
Route::delete('core/mailQueueDatas/{mailQueueDatas}', ['as'=> 'core.mailQueueDatas.destroy', 'uses' => 'Core\MailQueueDataController@destroy']);
Route::get('core/mailQueueDatas/{mailQueueDatas}', ['as'=> 'core.mailQueueDatas.show', 'uses' => 'Core\MailQueueDataController@show']);
Route::get('core/mailQueueDatas/{mailQueueDatas}/edit', ['as'=> 'core.mailQueueDatas.edit', 'uses' => 'Core\MailQueueDataController@edit']);


Route::get('core/notificationActions', ['as'=> 'core.notificationActions.index', 'uses' => 'Core\NotificationActionsController@index']);
Route::post('core/notificationActions', ['as'=> 'core.notificationActions.store', 'uses' => 'Core\NotificationActionsController@store']);
Route::get('core/notificationActions/create', ['as'=> 'core.notificationActions.create', 'uses' => 'Core\NotificationActionsController@create']);
Route::put('core/notificationActions/{notificationActions}', ['as'=> 'core.notificationActions.update', 'uses' => 'Core\NotificationActionsController@update']);
Route::patch('core/notificationActions/{notificationActions}', ['as'=> 'core.notificationActions.update', 'uses' => 'Core\NotificationActionsController@update']);
Route::delete('core/notificationActions/{notificationActions}', ['as'=> 'core.notificationActions.destroy', 'uses' => 'Core\NotificationActionsController@destroy']);
Route::get('core/notificationActions/{notificationActions}', ['as'=> 'core.notificationActions.show', 'uses' => 'Core\NotificationActionsController@show']);
Route::get('core/notificationActions/{notificationActions}/edit', ['as'=> 'core.notificationActions.edit', 'uses' => 'Core\NotificationActionsController@edit']);


Route::get('core/notificationCriterias', ['as'=> 'core.notificationCriterias.index', 'uses' => 'Core\NotificationCriteriaController@index']);
Route::post('core/notificationCriterias', ['as'=> 'core.notificationCriterias.store', 'uses' => 'Core\NotificationCriteriaController@store']);
Route::get('core/notificationCriterias/create', ['as'=> 'core.notificationCriterias.create', 'uses' => 'Core\NotificationCriteriaController@create']);
Route::put('core/notificationCriterias/{notificationCriterias}', ['as'=> 'core.notificationCriterias.update', 'uses' => 'Core\NotificationCriteriaController@update']);
Route::patch('core/notificationCriterias/{notificationCriterias}', ['as'=> 'core.notificationCriterias.update', 'uses' => 'Core\NotificationCriteriaController@update']);
Route::delete('core/notificationCriterias/{notificationCriterias}', ['as'=> 'core.notificationCriterias.destroy', 'uses' => 'Core\NotificationCriteriaController@destroy']);
Route::get('core/notificationCriterias/{notificationCriterias}', ['as'=> 'core.notificationCriterias.show', 'uses' => 'Core\NotificationCriteriaController@show']);
Route::get('core/notificationCriterias/{notificationCriterias}/edit', ['as'=> 'core.notificationCriterias.edit', 'uses' => 'Core\NotificationCriteriaController@edit']);


Route::get('core/notificationPools', ['as'=> 'core.notificationPools.index', 'uses' => 'Core\NotificationPoolController@index']);
Route::post('core/notificationPools', ['as'=> 'core.notificationPools.store', 'uses' => 'Core\NotificationPoolController@store']);
Route::get('core/notificationPools/create', ['as'=> 'core.notificationPools.create', 'uses' => 'Core\NotificationPoolController@create']);
Route::put('core/notificationPools/{notificationPools}', ['as'=> 'core.notificationPools.update', 'uses' => 'Core\NotificationPoolController@update']);
Route::patch('core/notificationPools/{notificationPools}', ['as'=> 'core.notificationPools.update', 'uses' => 'Core\NotificationPoolController@update']);
Route::delete('core/notificationPools/{notificationPools}', ['as'=> 'core.notificationPools.destroy', 'uses' => 'Core\NotificationPoolController@destroy']);
Route::get('core/notificationPools/{notificationPools}', ['as'=> 'core.notificationPools.show', 'uses' => 'Core\NotificationPoolController@show']);
Route::get('core/notificationPools/{notificationPools}/edit', ['as'=> 'core.notificationPools.edit', 'uses' => 'Core\NotificationPoolController@edit']);


Route::get('core/notificationRules', ['as'=> 'core.notificationRules.index', 'uses' => 'Core\NotificationRulesController@index']);
Route::post('core/notificationRules', ['as'=> 'core.notificationRules.store', 'uses' => 'Core\NotificationRulesController@store']);
Route::get('core/notificationRules/create', ['as'=> 'core.notificationRules.create', 'uses' => 'Core\NotificationRulesController@create']);
Route::put('core/notificationRules/{notificationRules}', ['as'=> 'core.notificationRules.update', 'uses' => 'Core\NotificationRulesController@update']);
Route::patch('core/notificationRules/{notificationRules}', ['as'=> 'core.notificationRules.update', 'uses' => 'Core\NotificationRulesController@update']);
Route::delete('core/notificationRules/{notificationRules}', ['as'=> 'core.notificationRules.destroy', 'uses' => 'Core\NotificationRulesController@destroy']);
Route::get('core/notificationRules/{notificationRules}', ['as'=> 'core.notificationRules.show', 'uses' => 'Core\NotificationRulesController@show']);
Route::get('core/notificationRules/{notificationRules}/edit', ['as'=> 'core.notificationRules.edit', 'uses' => 'Core\NotificationRulesController@edit']);


Route::get('core/onsiteSessions', ['as'=> 'core.onsiteSessions.index', 'uses' => 'Core\OnsiteSessionsController@index']);
Route::post('core/onsiteSessions', ['as'=> 'core.onsiteSessions.store', 'uses' => 'Core\OnsiteSessionsController@store']);
Route::get('core/onsiteSessions/create', ['as'=> 'core.onsiteSessions.create', 'uses' => 'Core\OnsiteSessionsController@create']);
Route::put('core/onsiteSessions/{onsiteSessions}', ['as'=> 'core.onsiteSessions.update', 'uses' => 'Core\OnsiteSessionsController@update']);
Route::patch('core/onsiteSessions/{onsiteSessions}', ['as'=> 'core.onsiteSessions.update', 'uses' => 'Core\OnsiteSessionsController@update']);
Route::delete('core/onsiteSessions/{onsiteSessions}', ['as'=> 'core.onsiteSessions.destroy', 'uses' => 'Core\OnsiteSessionsController@destroy']);
Route::get('core/onsiteSessions/{onsiteSessions}', ['as'=> 'core.onsiteSessions.show', 'uses' => 'Core\OnsiteSessionsController@show']);
Route::get('core/onsiteSessions/{onsiteSessions}/edit', ['as'=> 'core.onsiteSessions.edit', 'uses' => 'Core\OnsiteSessionsController@edit']);


Route::get('core/parserBans', ['as'=> 'core.parserBans.index', 'uses' => 'Core\ParserBansController@index']);
Route::post('core/parserBans', ['as'=> 'core.parserBans.store', 'uses' => 'Core\ParserBansController@store']);
Route::get('core/parserBans/create', ['as'=> 'core.parserBans.create', 'uses' => 'Core\ParserBansController@create']);
Route::put('core/parserBans/{parserBans}', ['as'=> 'core.parserBans.update', 'uses' => 'Core\ParserBansController@update']);
Route::patch('core/parserBans/{parserBans}', ['as'=> 'core.parserBans.update', 'uses' => 'Core\ParserBansController@update']);
Route::delete('core/parserBans/{parserBans}', ['as'=> 'core.parserBans.destroy', 'uses' => 'Core\ParserBansController@destroy']);
Route::get('core/parserBans/{parserBans}', ['as'=> 'core.parserBans.show', 'uses' => 'Core\ParserBansController@show']);
Route::get('core/parserBans/{parserBans}/edit', ['as'=> 'core.parserBans.edit', 'uses' => 'Core\ParserBansController@edit']);


Route::get('core/parserLogs', ['as'=> 'core.parserLogs.index', 'uses' => 'Core\ParserLogsController@index']);
Route::post('core/parserLogs', ['as'=> 'core.parserLogs.store', 'uses' => 'Core\ParserLogsController@store']);
Route::get('core/parserLogs/create', ['as'=> 'core.parserLogs.create', 'uses' => 'Core\ParserLogsController@create']);
Route::put('core/parserLogs/{parserLogs}', ['as'=> 'core.parserLogs.update', 'uses' => 'Core\ParserLogsController@update']);
Route::patch('core/parserLogs/{parserLogs}', ['as'=> 'core.parserLogs.update', 'uses' => 'Core\ParserLogsController@update']);
Route::delete('core/parserLogs/{parserLogs}', ['as'=> 'core.parserLogs.destroy', 'uses' => 'Core\ParserLogsController@destroy']);
Route::get('core/parserLogs/{parserLogs}', ['as'=> 'core.parserLogs.show', 'uses' => 'Core\ParserLogsController@show']);
Route::get('core/parserLogs/{parserLogs}/edit', ['as'=> 'core.parserLogs.edit', 'uses' => 'Core\ParserLogsController@edit']);


Route::get('core/parserLoopRules', ['as'=> 'core.parserLoopRules.index', 'uses' => 'Core\ParserLoopRulesController@index']);
Route::post('core/parserLoopRules', ['as'=> 'core.parserLoopRules.store', 'uses' => 'Core\ParserLoopRulesController@store']);
Route::get('core/parserLoopRules/create', ['as'=> 'core.parserLoopRules.create', 'uses' => 'Core\ParserLoopRulesController@create']);
Route::put('core/parserLoopRules/{parserLoopRules}', ['as'=> 'core.parserLoopRules.update', 'uses' => 'Core\ParserLoopRulesController@update']);
Route::patch('core/parserLoopRules/{parserLoopRules}', ['as'=> 'core.parserLoopRules.update', 'uses' => 'Core\ParserLoopRulesController@update']);
Route::delete('core/parserLoopRules/{parserLoopRules}', ['as'=> 'core.parserLoopRules.destroy', 'uses' => 'Core\ParserLoopRulesController@destroy']);
Route::get('core/parserLoopRules/{parserLoopRules}', ['as'=> 'core.parserLoopRules.show', 'uses' => 'Core\ParserLoopRulesController@show']);
Route::get('core/parserLoopRules/{parserLoopRules}/edit', ['as'=> 'core.parserLoopRules.edit', 'uses' => 'Core\ParserLoopRulesController@edit']);


Route::get('core/parserRuleActions', ['as'=> 'core.parserRuleActions.index', 'uses' => 'Core\ParserRuleActionsController@index']);
Route::post('core/parserRuleActions', ['as'=> 'core.parserRuleActions.store', 'uses' => 'Core\ParserRuleActionsController@store']);
Route::get('core/parserRuleActions/create', ['as'=> 'core.parserRuleActions.create', 'uses' => 'Core\ParserRuleActionsController@create']);
Route::put('core/parserRuleActions/{parserRuleActions}', ['as'=> 'core.parserRuleActions.update', 'uses' => 'Core\ParserRuleActionsController@update']);
Route::patch('core/parserRuleActions/{parserRuleActions}', ['as'=> 'core.parserRuleActions.update', 'uses' => 'Core\ParserRuleActionsController@update']);
Route::delete('core/parserRuleActions/{parserRuleActions}', ['as'=> 'core.parserRuleActions.destroy', 'uses' => 'Core\ParserRuleActionsController@destroy']);
Route::get('core/parserRuleActions/{parserRuleActions}', ['as'=> 'core.parserRuleActions.show', 'uses' => 'Core\ParserRuleActionsController@show']);
Route::get('core/parserRuleActions/{parserRuleActions}/edit', ['as'=> 'core.parserRuleActions.edit', 'uses' => 'Core\ParserRuleActionsController@edit']);


Route::get('core/parserRuleCriterias', ['as'=> 'core.parserRuleCriterias.index', 'uses' => 'Core\ParserRuleCriteriaController@index']);
Route::post('core/parserRuleCriterias', ['as'=> 'core.parserRuleCriterias.store', 'uses' => 'Core\ParserRuleCriteriaController@store']);
Route::get('core/parserRuleCriterias/create', ['as'=> 'core.parserRuleCriterias.create', 'uses' => 'Core\ParserRuleCriteriaController@create']);
Route::put('core/parserRuleCriterias/{parserRuleCriterias}', ['as'=> 'core.parserRuleCriterias.update', 'uses' => 'Core\ParserRuleCriteriaController@update']);
Route::patch('core/parserRuleCriterias/{parserRuleCriterias}', ['as'=> 'core.parserRuleCriterias.update', 'uses' => 'Core\ParserRuleCriteriaController@update']);
Route::delete('core/parserRuleCriterias/{parserRuleCriterias}', ['as'=> 'core.parserRuleCriterias.destroy', 'uses' => 'Core\ParserRuleCriteriaController@destroy']);
Route::get('core/parserRuleCriterias/{parserRuleCriterias}', ['as'=> 'core.parserRuleCriterias.show', 'uses' => 'Core\ParserRuleCriteriaController@show']);
Route::get('core/parserRuleCriterias/{parserRuleCriterias}/edit', ['as'=> 'core.parserRuleCriterias.edit', 'uses' => 'Core\ParserRuleCriteriaController@edit']);


Route::get('core/parserRules', ['as'=> 'core.parserRules.index', 'uses' => 'Core\ParserRulesController@index']);
Route::post('core/parserRules', ['as'=> 'core.parserRules.store', 'uses' => 'Core\ParserRulesController@store']);
Route::get('core/parserRules/create', ['as'=> 'core.parserRules.create', 'uses' => 'Core\ParserRulesController@create']);
Route::put('core/parserRules/{parserRules}', ['as'=> 'core.parserRules.update', 'uses' => 'Core\ParserRulesController@update']);
Route::patch('core/parserRules/{parserRules}', ['as'=> 'core.parserRules.update', 'uses' => 'Core\ParserRulesController@update']);
Route::delete('core/parserRules/{parserRules}', ['as'=> 'core.parserRules.destroy', 'uses' => 'Core\ParserRulesController@destroy']);
Route::get('core/parserRules/{parserRules}', ['as'=> 'core.parserRules.show', 'uses' => 'Core\ParserRulesController@show']);
Route::get('core/parserRules/{parserRules}/edit', ['as'=> 'core.parserRules.edit', 'uses' => 'Core\ParserRulesController@edit']);


Route::get('core/queueSignatures', ['as'=> 'core.queueSignatures.index', 'uses' => 'Core\QueueSignaturesController@index']);
Route::post('core/queueSignatures', ['as'=> 'core.queueSignatures.store', 'uses' => 'Core\QueueSignaturesController@store']);
Route::get('core/queueSignatures/create', ['as'=> 'core.queueSignatures.create', 'uses' => 'Core\QueueSignaturesController@create']);
Route::put('core/queueSignatures/{queueSignatures}', ['as'=> 'core.queueSignatures.update', 'uses' => 'Core\QueueSignaturesController@update']);
Route::patch('core/queueSignatures/{queueSignatures}', ['as'=> 'core.queueSignatures.update', 'uses' => 'Core\QueueSignaturesController@update']);
Route::delete('core/queueSignatures/{queueSignatures}', ['as'=> 'core.queueSignatures.destroy', 'uses' => 'Core\QueueSignaturesController@destroy']);
Route::get('core/queueSignatures/{queueSignatures}', ['as'=> 'core.queueSignatures.show', 'uses' => 'Core\QueueSignaturesController@show']);
Route::get('core/queueSignatures/{queueSignatures}/edit', ['as'=> 'core.queueSignatures.edit', 'uses' => 'Core\QueueSignaturesController@edit']);


Route::get('core/settings', ['as'=> 'core.settings.index', 'uses' => 'Core\SettingsController@index']);
Route::post('core/settings', ['as'=> 'core.settings.store', 'uses' => 'Core\SettingsController@store']);
Route::get('core/settings/create', ['as'=> 'core.settings.create', 'uses' => 'Core\SettingsController@create']);
Route::put('core/settings/{settings}', ['as'=> 'core.settings.update', 'uses' => 'Core\SettingsController@update']);
Route::patch('core/settings/{settings}', ['as'=> 'core.settings.update', 'uses' => 'Core\SettingsController@update']);
Route::delete('core/settings/{settings}', ['as'=> 'core.settings.destroy', 'uses' => 'Core\SettingsController@destroy']);
Route::get('core/settings/{settings}', ['as'=> 'core.settings.show', 'uses' => 'Core\SettingsController@show']);
Route::get('core/settings/{settings}/edit', ['as'=> 'core.settings.edit', 'uses' => 'Core\SettingsController@edit']);


Route::get('core/settingsFields', ['as'=> 'core.settingsFields.index', 'uses' => 'Core\SettingsFieldsController@index']);
Route::post('core/settingsFields', ['as'=> 'core.settingsFields.store', 'uses' => 'Core\SettingsFieldsController@store']);
Route::get('core/settingsFields/create', ['as'=> 'core.settingsFields.create', 'uses' => 'Core\SettingsFieldsController@create']);
Route::put('core/settingsFields/{settingsFields}', ['as'=> 'core.settingsFields.update', 'uses' => 'Core\SettingsFieldsController@update']);
Route::patch('core/settingsFields/{settingsFields}', ['as'=> 'core.settingsFields.update', 'uses' => 'Core\SettingsFieldsController@update']);
Route::delete('core/settingsFields/{settingsFields}', ['as'=> 'core.settingsFields.destroy', 'uses' => 'Core\SettingsFieldsController@destroy']);
Route::get('core/settingsFields/{settingsFields}', ['as'=> 'core.settingsFields.show', 'uses' => 'Core\SettingsFieldsController@show']);
Route::get('core/settingsFields/{settingsFields}/edit', ['as'=> 'core.settingsFields.edit', 'uses' => 'Core\SettingsFieldsController@edit']);


Route::get('core/settingsGroups', ['as'=> 'core.settingsGroups.index', 'uses' => 'Core\SettingsGroupsController@index']);
Route::post('core/settingsGroups', ['as'=> 'core.settingsGroups.store', 'uses' => 'Core\SettingsGroupsController@store']);
Route::get('core/settingsGroups/create', ['as'=> 'core.settingsGroups.create', 'uses' => 'Core\SettingsGroupsController@create']);
Route::put('core/settingsGroups/{settingsGroups}', ['as'=> 'core.settingsGroups.update', 'uses' => 'Core\SettingsGroupsController@update']);
Route::patch('core/settingsGroups/{settingsGroups}', ['as'=> 'core.settingsGroups.update', 'uses' => 'Core\SettingsGroupsController@update']);
Route::delete('core/settingsGroups/{settingsGroups}', ['as'=> 'core.settingsGroups.destroy', 'uses' => 'Core\SettingsGroupsController@destroy']);
Route::get('core/settingsGroups/{settingsGroups}', ['as'=> 'core.settingsGroups.show', 'uses' => 'Core\SettingsGroupsController@show']);
Route::get('core/settingsGroups/{settingsGroups}/edit', ['as'=> 'core.settingsGroups.edit', 'uses' => 'Core\SettingsGroupsController@edit']);


Route::get('core/signatures', ['as'=> 'core.signatures.index', 'uses' => 'Core\SignaturesController@index']);
Route::post('core/signatures', ['as'=> 'core.signatures.store', 'uses' => 'Core\SignaturesController@store']);
Route::get('core/signatures/create', ['as'=> 'core.signatures.create', 'uses' => 'Core\SignaturesController@create']);
Route::put('core/signatures/{signatures}', ['as'=> 'core.signatures.update', 'uses' => 'Core\SignaturesController@update']);
Route::patch('core/signatures/{signatures}', ['as'=> 'core.signatures.update', 'uses' => 'Core\SignaturesController@update']);
Route::delete('core/signatures/{signatures}', ['as'=> 'core.signatures.destroy', 'uses' => 'Core\SignaturesController@destroy']);
Route::get('core/signatures/{signatures}', ['as'=> 'core.signatures.show', 'uses' => 'Core\SignaturesController@show']);
Route::get('core/signatures/{signatures}/edit', ['as'=> 'core.signatures.edit', 'uses' => 'Core\SignaturesController@edit']);


Route::get('core/slaHolidays', ['as'=> 'core.slaHolidays.index', 'uses' => 'Core\SlaHolidaysController@index']);
Route::post('core/slaHolidays', ['as'=> 'core.slaHolidays.store', 'uses' => 'Core\SlaHolidaysController@store']);
Route::get('core/slaHolidays/create', ['as'=> 'core.slaHolidays.create', 'uses' => 'Core\SlaHolidaysController@create']);
Route::put('core/slaHolidays/{slaHolidays}', ['as'=> 'core.slaHolidays.update', 'uses' => 'Core\SlaHolidaysController@update']);
Route::patch('core/slaHolidays/{slaHolidays}', ['as'=> 'core.slaHolidays.update', 'uses' => 'Core\SlaHolidaysController@update']);
Route::delete('core/slaHolidays/{slaHolidays}', ['as'=> 'core.slaHolidays.destroy', 'uses' => 'Core\SlaHolidaysController@destroy']);
Route::get('core/slaHolidays/{slaHolidays}', ['as'=> 'core.slaHolidays.show', 'uses' => 'Core\SlaHolidaysController@show']);
Route::get('core/slaHolidays/{slaHolidays}/edit', ['as'=> 'core.slaHolidays.edit', 'uses' => 'Core\SlaHolidaysController@edit']);


Route::get('core/slaPlans', ['as'=> 'core.slaPlans.index', 'uses' => 'Core\SlaPlansController@index']);
Route::post('core/slaPlans', ['as'=> 'core.slaPlans.store', 'uses' => 'Core\SlaPlansController@store']);
Route::get('core/slaPlans/create', ['as'=> 'core.slaPlans.create', 'uses' => 'Core\SlaPlansController@create']);
Route::put('core/slaPlans/{slaPlans}', ['as'=> 'core.slaPlans.update', 'uses' => 'Core\SlaPlansController@update']);
Route::patch('core/slaPlans/{slaPlans}', ['as'=> 'core.slaPlans.update', 'uses' => 'Core\SlaPlansController@update']);
Route::delete('core/slaPlans/{slaPlans}', ['as'=> 'core.slaPlans.destroy', 'uses' => 'Core\SlaPlansController@destroy']);
Route::get('core/slaPlans/{slaPlans}', ['as'=> 'core.slaPlans.show', 'uses' => 'Core\SlaPlansController@show']);
Route::get('core/slaPlans/{slaPlans}/edit', ['as'=> 'core.slaPlans.edit', 'uses' => 'Core\SlaPlansController@edit']);


Route::get('core/slaRuleCriterias', ['as'=> 'core.slaRuleCriterias.index', 'uses' => 'Core\SlaRuleCriteriaController@index']);
Route::post('core/slaRuleCriterias', ['as'=> 'core.slaRuleCriterias.store', 'uses' => 'Core\SlaRuleCriteriaController@store']);
Route::get('core/slaRuleCriterias/create', ['as'=> 'core.slaRuleCriterias.create', 'uses' => 'Core\SlaRuleCriteriaController@create']);
Route::put('core/slaRuleCriterias/{slaRuleCriterias}', ['as'=> 'core.slaRuleCriterias.update', 'uses' => 'Core\SlaRuleCriteriaController@update']);
Route::patch('core/slaRuleCriterias/{slaRuleCriterias}', ['as'=> 'core.slaRuleCriterias.update', 'uses' => 'Core\SlaRuleCriteriaController@update']);
Route::delete('core/slaRuleCriterias/{slaRuleCriterias}', ['as'=> 'core.slaRuleCriterias.destroy', 'uses' => 'Core\SlaRuleCriteriaController@destroy']);
Route::get('core/slaRuleCriterias/{slaRuleCriterias}', ['as'=> 'core.slaRuleCriterias.show', 'uses' => 'Core\SlaRuleCriteriaController@show']);
Route::get('core/slaRuleCriterias/{slaRuleCriterias}/edit', ['as'=> 'core.slaRuleCriterias.edit', 'uses' => 'Core\SlaRuleCriteriaController@edit']);


Route::get('core/slaSchedules', ['as'=> 'core.slaSchedules.index', 'uses' => 'Core\SlaSchedulesController@index']);
Route::post('core/slaSchedules', ['as'=> 'core.slaSchedules.store', 'uses' => 'Core\SlaSchedulesController@store']);
Route::get('core/slaSchedules/create', ['as'=> 'core.slaSchedules.create', 'uses' => 'Core\SlaSchedulesController@create']);
Route::put('core/slaSchedules/{slaSchedules}', ['as'=> 'core.slaSchedules.update', 'uses' => 'Core\SlaSchedulesController@update']);
Route::patch('core/slaSchedules/{slaSchedules}', ['as'=> 'core.slaSchedules.update', 'uses' => 'Core\SlaSchedulesController@update']);
Route::delete('core/slaSchedules/{slaSchedules}', ['as'=> 'core.slaSchedules.destroy', 'uses' => 'Core\SlaSchedulesController@destroy']);
Route::get('core/slaSchedules/{slaSchedules}', ['as'=> 'core.slaSchedules.show', 'uses' => 'Core\SlaSchedulesController@show']);
Route::get('core/slaSchedules/{slaSchedules}/edit', ['as'=> 'core.slaSchedules.edit', 'uses' => 'Core\SlaSchedulesController@edit']);


Route::get('core/slaScheduleTables', ['as'=> 'core.slaScheduleTables.index', 'uses' => 'Core\SlaScheduleTableController@index']);
Route::post('core/slaScheduleTables', ['as'=> 'core.slaScheduleTables.store', 'uses' => 'Core\SlaScheduleTableController@store']);
Route::get('core/slaScheduleTables/create', ['as'=> 'core.slaScheduleTables.create', 'uses' => 'Core\SlaScheduleTableController@create']);
Route::put('core/slaScheduleTables/{slaScheduleTables}', ['as'=> 'core.slaScheduleTables.update', 'uses' => 'Core\SlaScheduleTableController@update']);
Route::patch('core/slaScheduleTables/{slaScheduleTables}', ['as'=> 'core.slaScheduleTables.update', 'uses' => 'Core\SlaScheduleTableController@update']);
Route::delete('core/slaScheduleTables/{slaScheduleTables}', ['as'=> 'core.slaScheduleTables.destroy', 'uses' => 'Core\SlaScheduleTableController@destroy']);
Route::get('core/slaScheduleTables/{slaScheduleTables}', ['as'=> 'core.slaScheduleTables.show', 'uses' => 'Core\SlaScheduleTableController@show']);
Route::get('core/slaScheduleTables/{slaScheduleTables}/edit', ['as'=> 'core.slaScheduleTables.edit', 'uses' => 'Core\SlaScheduleTableController@edit']);


Route::get('core/staff', ['as'=> 'core.staff.index', 'uses' => 'Core\StaffController@index']);
Route::post('core/staff', ['as'=> 'core.staff.store', 'uses' => 'Core\StaffController@store']);
Route::get('core/staff/create', ['as'=> 'core.staff.create', 'uses' => 'Core\StaffController@create']);
Route::put('core/staff/{staff}', ['as'=> 'core.staff.update', 'uses' => 'Core\StaffController@update']);
Route::patch('core/staff/{staff}', ['as'=> 'core.staff.update', 'uses' => 'Core\StaffController@update']);
Route::delete('core/staff/{staff}', ['as'=> 'core.staff.destroy', 'uses' => 'Core\StaffController@destroy']);
Route::get('core/staff/{staff}', ['as'=> 'core.staff.show', 'uses' => 'Core\StaffController@show']);
Route::get('core/staff/{staff}/edit', ['as'=> 'core.staff.edit', 'uses' => 'Core\StaffController@edit']);


Route::get('core/staffActivityLogs', ['as'=> 'core.staffActivityLogs.index', 'uses' => 'Core\StaffActivityLogController@index']);
Route::post('core/staffActivityLogs', ['as'=> 'core.staffActivityLogs.store', 'uses' => 'Core\StaffActivityLogController@store']);
Route::get('core/staffActivityLogs/create', ['as'=> 'core.staffActivityLogs.create', 'uses' => 'Core\StaffActivityLogController@create']);
Route::put('core/staffActivityLogs/{staffActivityLogs}', ['as'=> 'core.staffActivityLogs.update', 'uses' => 'Core\StaffActivityLogController@update']);
Route::patch('core/staffActivityLogs/{staffActivityLogs}', ['as'=> 'core.staffActivityLogs.update', 'uses' => 'Core\StaffActivityLogController@update']);
Route::delete('core/staffActivityLogs/{staffActivityLogs}', ['as'=> 'core.staffActivityLogs.destroy', 'uses' => 'Core\StaffActivityLogController@destroy']);
Route::get('core/staffActivityLogs/{staffActivityLogs}', ['as'=> 'core.staffActivityLogs.show', 'uses' => 'Core\StaffActivityLogController@show']);
Route::get('core/staffActivityLogs/{staffActivityLogs}/edit', ['as'=> 'core.staffActivityLogs.edit', 'uses' => 'Core\StaffActivityLogController@edit']);


Route::get('core/staffTeamLinks', ['as'=> 'core.staffTeamLinks.index', 'uses' => 'Core\StaffTeamLinksController@index']);
Route::post('core/staffTeamLinks', ['as'=> 'core.staffTeamLinks.store', 'uses' => 'Core\StaffTeamLinksController@store']);
Route::get('core/staffTeamLinks/create', ['as'=> 'core.staffTeamLinks.create', 'uses' => 'Core\StaffTeamLinksController@create']);
Route::put('core/staffTeamLinks/{staffTeamLinks}', ['as'=> 'core.staffTeamLinks.update', 'uses' => 'Core\StaffTeamLinksController@update']);
Route::patch('core/staffTeamLinks/{staffTeamLinks}', ['as'=> 'core.staffTeamLinks.update', 'uses' => 'Core\StaffTeamLinksController@update']);
Route::delete('core/staffTeamLinks/{staffTeamLinks}', ['as'=> 'core.staffTeamLinks.destroy', 'uses' => 'Core\StaffTeamLinksController@destroy']);
Route::get('core/staffTeamLinks/{staffTeamLinks}', ['as'=> 'core.staffTeamLinks.show', 'uses' => 'Core\StaffTeamLinksController@show']);
Route::get('core/staffTeamLinks/{staffTeamLinks}/edit', ['as'=> 'core.staffTeamLinks.edit', 'uses' => 'Core\StaffTeamLinksController@edit']);


Route::get('core/staffTeamSettings', ['as'=> 'core.staffTeamSettings.index', 'uses' => 'Core\StaffTeamSettingController@index']);
Route::post('core/staffTeamSettings', ['as'=> 'core.staffTeamSettings.store', 'uses' => 'Core\StaffTeamSettingController@store']);
Route::get('core/staffTeamSettings/create', ['as'=> 'core.staffTeamSettings.create', 'uses' => 'Core\StaffTeamSettingController@create']);
Route::put('core/staffTeamSettings/{staffTeamSettings}', ['as'=> 'core.staffTeamSettings.update', 'uses' => 'Core\StaffTeamSettingController@update']);
Route::patch('core/staffTeamSettings/{staffTeamSettings}', ['as'=> 'core.staffTeamSettings.update', 'uses' => 'Core\StaffTeamSettingController@update']);
Route::delete('core/staffTeamSettings/{staffTeamSettings}', ['as'=> 'core.staffTeamSettings.destroy', 'uses' => 'Core\StaffTeamSettingController@destroy']);
Route::get('core/staffTeamSettings/{staffTeamSettings}', ['as'=> 'core.staffTeamSettings.show', 'uses' => 'Core\StaffTeamSettingController@show']);
Route::get('core/staffTeamSettings/{staffTeamSettings}/edit', ['as'=> 'core.staffTeamSettings.edit', 'uses' => 'Core\StaffTeamSettingController@edit']);


Route::get('core/staffLogInlogs', ['as'=> 'core.staffLogInlogs.index', 'uses' => 'Core\StaffLogInlogController@index']);
Route::post('core/staffLogInlogs', ['as'=> 'core.staffLogInlogs.store', 'uses' => 'Core\StaffLogInlogController@store']);
Route::get('core/staffLogInlogs/create', ['as'=> 'core.staffLogInlogs.create', 'uses' => 'Core\StaffLogInlogController@create']);
Route::put('core/staffLogInlogs/{staffLogInlogs}', ['as'=> 'core.staffLogInlogs.update', 'uses' => 'Core\StaffLogInlogController@update']);
Route::patch('core/staffLogInlogs/{staffLogInlogs}', ['as'=> 'core.staffLogInlogs.update', 'uses' => 'Core\StaffLogInlogController@update']);
Route::delete('core/staffLogInlogs/{staffLogInlogs}', ['as'=> 'core.staffLogInlogs.destroy', 'uses' => 'Core\StaffLogInlogController@destroy']);
Route::get('core/staffLogInlogs/{staffLogInlogs}', ['as'=> 'core.staffLogInlogs.show', 'uses' => 'Core\StaffLogInlogController@show']);
Route::get('core/staffLogInlogs/{staffLogInlogs}/edit', ['as'=> 'core.staffLogInlogs.edit', 'uses' => 'Core\StaffLogInlogController@edit']);


Route::get('core/staffProfileImages', ['as'=> 'core.staffProfileImages.index', 'uses' => 'Core\StaffProfileImageController@index']);
Route::post('core/staffProfileImages', ['as'=> 'core.staffProfileImages.store', 'uses' => 'Core\StaffProfileImageController@store']);
Route::get('core/staffProfileImages/create', ['as'=> 'core.staffProfileImages.create', 'uses' => 'Core\StaffProfileImageController@create']);
Route::put('core/staffProfileImages/{staffProfileImages}', ['as'=> 'core.staffProfileImages.update', 'uses' => 'Core\StaffProfileImageController@update']);
Route::patch('core/staffProfileImages/{staffProfileImages}', ['as'=> 'core.staffProfileImages.update', 'uses' => 'Core\StaffProfileImageController@update']);
Route::delete('core/staffProfileImages/{staffProfileImages}', ['as'=> 'core.staffProfileImages.destroy', 'uses' => 'Core\StaffProfileImageController@destroy']);
Route::get('core/staffProfileImages/{staffProfileImages}', ['as'=> 'core.staffProfileImages.show', 'uses' => 'Core\StaffProfileImageController@show']);
Route::get('core/staffProfileImages/{staffProfileImages}/edit', ['as'=> 'core.staffProfileImages.edit', 'uses' => 'Core\StaffProfileImageController@edit']);


Route::get('core/staffProperties', ['as'=> 'core.staffProperties.index', 'uses' => 'Core\StaffPropertiesController@index']);
Route::post('core/staffProperties', ['as'=> 'core.staffProperties.store', 'uses' => 'Core\StaffPropertiesController@store']);
Route::get('core/staffProperties/create', ['as'=> 'core.staffProperties.create', 'uses' => 'Core\StaffPropertiesController@create']);
Route::put('core/staffProperties/{staffProperties}', ['as'=> 'core.staffProperties.update', 'uses' => 'Core\StaffPropertiesController@update']);
Route::patch('core/staffProperties/{staffProperties}', ['as'=> 'core.staffProperties.update', 'uses' => 'Core\StaffPropertiesController@update']);
Route::delete('core/staffProperties/{staffProperties}', ['as'=> 'core.staffProperties.destroy', 'uses' => 'Core\StaffPropertiesController@destroy']);
Route::get('core/staffProperties/{staffProperties}', ['as'=> 'core.staffProperties.show', 'uses' => 'Core\StaffPropertiesController@show']);
Route::get('core/staffProperties/{staffProperties}/edit', ['as'=> 'core.staffProperties.edit', 'uses' => 'Core\StaffPropertiesController@edit']);


Route::get('core/staffSettings', ['as'=> 'core.staffSettings.index', 'uses' => 'Core\StaffSettingsController@index']);
Route::post('core/staffSettings', ['as'=> 'core.staffSettings.store', 'uses' => 'Core\StaffSettingsController@store']);
Route::get('core/staffSettings/create', ['as'=> 'core.staffSettings.create', 'uses' => 'Core\StaffSettingsController@create']);
Route::put('core/staffSettings/{staffSettings}', ['as'=> 'core.staffSettings.update', 'uses' => 'Core\StaffSettingsController@update']);
Route::patch('core/staffSettings/{staffSettings}', ['as'=> 'core.staffSettings.update', 'uses' => 'Core\StaffSettingsController@update']);
Route::delete('core/staffSettings/{staffSettings}', ['as'=> 'core.staffSettings.destroy', 'uses' => 'Core\StaffSettingsController@destroy']);
Route::get('core/staffSettings/{staffSettings}', ['as'=> 'core.staffSettings.show', 'uses' => 'Core\StaffSettingsController@show']);
Route::get('core/staffSettings/{staffSettings}/edit', ['as'=> 'core.staffSettings.edit', 'uses' => 'Core\StaffSettingsController@edit']);


Route::get('core/tagLinks', ['as'=> 'core.tagLinks.index', 'uses' => 'Core\TagLinksController@index']);
Route::post('core/tagLinks', ['as'=> 'core.tagLinks.store', 'uses' => 'Core\TagLinksController@store']);
Route::get('core/tagLinks/create', ['as'=> 'core.tagLinks.create', 'uses' => 'Core\TagLinksController@create']);
Route::put('core/tagLinks/{tagLinks}', ['as'=> 'core.tagLinks.update', 'uses' => 'Core\TagLinksController@update']);
Route::patch('core/tagLinks/{tagLinks}', ['as'=> 'core.tagLinks.update', 'uses' => 'Core\TagLinksController@update']);
Route::delete('core/tagLinks/{tagLinks}', ['as'=> 'core.tagLinks.destroy', 'uses' => 'Core\TagLinksController@destroy']);
Route::get('core/tagLinks/{tagLinks}', ['as'=> 'core.tagLinks.show', 'uses' => 'Core\TagLinksController@show']);
Route::get('core/tagLinks/{tagLinks}/edit', ['as'=> 'core.tagLinks.edit', 'uses' => 'Core\TagLinksController@edit']);


Route::get('core/tags', ['as'=> 'core.tags.index', 'uses' => 'Core\TagsController@index']);
Route::post('core/tags', ['as'=> 'core.tags.store', 'uses' => 'Core\TagsController@store']);
Route::get('core/tags/create', ['as'=> 'core.tags.create', 'uses' => 'Core\TagsController@create']);
Route::put('core/tags/{tags}', ['as'=> 'core.tags.update', 'uses' => 'Core\TagsController@update']);
Route::patch('core/tags/{tags}', ['as'=> 'core.tags.update', 'uses' => 'Core\TagsController@update']);
Route::delete('core/tags/{tags}', ['as'=> 'core.tags.destroy', 'uses' => 'Core\TagsController@destroy']);
Route::get('core/tags/{tags}', ['as'=> 'core.tags.show', 'uses' => 'Core\TagsController@show']);
Route::get('core/tags/{tags}/edit', ['as'=> 'core.tags.edit', 'uses' => 'Core\TagsController@edit']);


Route::get('core/templateCategories', ['as'=> 'core.templateCategories.index', 'uses' => 'Core\TemplateCategoriesController@index']);
Route::post('core/templateCategories', ['as'=> 'core.templateCategories.store', 'uses' => 'Core\TemplateCategoriesController@store']);
Route::get('core/templateCategories/create', ['as'=> 'core.templateCategories.create', 'uses' => 'Core\TemplateCategoriesController@create']);
Route::put('core/templateCategories/{templateCategories}', ['as'=> 'core.templateCategories.update', 'uses' => 'Core\TemplateCategoriesController@update']);
Route::patch('core/templateCategories/{templateCategories}', ['as'=> 'core.templateCategories.update', 'uses' => 'Core\TemplateCategoriesController@update']);
Route::delete('core/templateCategories/{templateCategories}', ['as'=> 'core.templateCategories.destroy', 'uses' => 'Core\TemplateCategoriesController@destroy']);
Route::get('core/templateCategories/{templateCategories}', ['as'=> 'core.templateCategories.show', 'uses' => 'Core\TemplateCategoriesController@show']);
Route::get('core/templateCategories/{templateCategories}/edit', ['as'=> 'core.templateCategories.edit', 'uses' => 'Core\TemplateCategoriesController@edit']);


Route::get('core/templateDatas', ['as'=> 'core.templateDatas.index', 'uses' => 'Core\TemplateDataController@index']);
Route::post('core/templateDatas', ['as'=> 'core.templateDatas.store', 'uses' => 'Core\TemplateDataController@store']);
Route::get('core/templateDatas/create', ['as'=> 'core.templateDatas.create', 'uses' => 'Core\TemplateDataController@create']);
Route::put('core/templateDatas/{templateDatas}', ['as'=> 'core.templateDatas.update', 'uses' => 'Core\TemplateDataController@update']);
Route::patch('core/templateDatas/{templateDatas}', ['as'=> 'core.templateDatas.update', 'uses' => 'Core\TemplateDataController@update']);
Route::delete('core/templateDatas/{templateDatas}', ['as'=> 'core.templateDatas.destroy', 'uses' => 'Core\TemplateDataController@destroy']);
Route::get('core/templateDatas/{templateDatas}', ['as'=> 'core.templateDatas.show', 'uses' => 'Core\TemplateDataController@show']);
Route::get('core/templateDatas/{templateDatas}/edit', ['as'=> 'core.templateDatas.edit', 'uses' => 'Core\TemplateDataController@edit']);


Route::get('core/templateGroups', ['as'=> 'core.templateGroups.index', 'uses' => 'Core\TemplateGroupsController@index']);
Route::post('core/templateGroups', ['as'=> 'core.templateGroups.store', 'uses' => 'Core\TemplateGroupsController@store']);
Route::get('core/templateGroups/create', ['as'=> 'core.templateGroups.create', 'uses' => 'Core\TemplateGroupsController@create']);
Route::put('core/templateGroups/{templateGroups}', ['as'=> 'core.templateGroups.update', 'uses' => 'Core\TemplateGroupsController@update']);
Route::patch('core/templateGroups/{templateGroups}', ['as'=> 'core.templateGroups.update', 'uses' => 'Core\TemplateGroupsController@update']);
Route::delete('core/templateGroups/{templateGroups}', ['as'=> 'core.templateGroups.destroy', 'uses' => 'Core\TemplateGroupsController@destroy']);
Route::get('core/templateGroups/{templateGroups}', ['as'=> 'core.templateGroups.show', 'uses' => 'Core\TemplateGroupsController@show']);
Route::get('core/templateGroups/{templateGroups}/edit', ['as'=> 'core.templateGroups.edit', 'uses' => 'Core\TemplateGroupsController@edit']);


Route::get('core/templates', ['as'=> 'core.templates.index', 'uses' => 'Core\TemplatesController@index']);
Route::post('core/templates', ['as'=> 'core.templates.store', 'uses' => 'Core\TemplatesController@store']);
Route::get('core/templates/create', ['as'=> 'core.templates.create', 'uses' => 'Core\TemplatesController@create']);
Route::put('core/templates/{templates}', ['as'=> 'core.templates.update', 'uses' => 'Core\TemplatesController@update']);
Route::patch('core/templates/{templates}', ['as'=> 'core.templates.update', 'uses' => 'Core\TemplatesController@update']);
Route::delete('core/templates/{templates}', ['as'=> 'core.templates.destroy', 'uses' => 'Core\TemplatesController@destroy']);
Route::get('core/templates/{templates}', ['as'=> 'core.templates.show', 'uses' => 'Core\TemplatesController@show']);
Route::get('core/templates/{templates}/edit', ['as'=> 'core.templates.edit', 'uses' => 'Core\TemplatesController@edit']);


Route::get('core/ticketFileTypes', ['as'=> 'core.ticketFileTypes.index', 'uses' => 'Core\TicketFileTypesController@index']);
Route::post('core/ticketFileTypes', ['as'=> 'core.ticketFileTypes.store', 'uses' => 'Core\TicketFileTypesController@store']);
Route::get('core/ticketFileTypes/create', ['as'=> 'core.ticketFileTypes.create', 'uses' => 'Core\TicketFileTypesController@create']);
Route::put('core/ticketFileTypes/{ticketFileTypes}', ['as'=> 'core.ticketFileTypes.update', 'uses' => 'Core\TicketFileTypesController@update']);
Route::patch('core/ticketFileTypes/{ticketFileTypes}', ['as'=> 'core.ticketFileTypes.update', 'uses' => 'Core\TicketFileTypesController@update']);
Route::delete('core/ticketFileTypes/{ticketFileTypes}', ['as'=> 'core.ticketFileTypes.destroy', 'uses' => 'Core\TicketFileTypesController@destroy']);
Route::get('core/ticketFileTypes/{ticketFileTypes}', ['as'=> 'core.ticketFileTypes.show', 'uses' => 'Core\TicketFileTypesController@show']);
Route::get('core/ticketFileTypes/{ticketFileTypes}/edit', ['as'=> 'core.ticketFileTypes.edit', 'uses' => 'Core\TicketFileTypesController@edit']);


Route::get('core/ticketFollowups', ['as'=> 'core.ticketFollowups.index', 'uses' => 'Core\TicketFollowupsController@index']);
Route::post('core/ticketFollowups', ['as'=> 'core.ticketFollowups.store', 'uses' => 'Core\TicketFollowupsController@store']);
Route::get('core/ticketFollowups/create', ['as'=> 'core.ticketFollowups.create', 'uses' => 'Core\TicketFollowupsController@create']);
Route::put('core/ticketFollowups/{ticketFollowups}', ['as'=> 'core.ticketFollowups.update', 'uses' => 'Core\TicketFollowupsController@update']);
Route::patch('core/ticketFollowups/{ticketFollowups}', ['as'=> 'core.ticketFollowups.update', 'uses' => 'Core\TicketFollowupsController@update']);
Route::delete('core/ticketFollowups/{ticketFollowups}', ['as'=> 'core.ticketFollowups.destroy', 'uses' => 'Core\TicketFollowupsController@destroy']);
Route::get('core/ticketFollowups/{ticketFollowups}', ['as'=> 'core.ticketFollowups.show', 'uses' => 'Core\TicketFollowupsController@show']);
Route::get('core/ticketFollowups/{ticketFollowups}/edit', ['as'=> 'core.ticketFollowups.edit', 'uses' => 'Core\TicketFollowupsController@edit']);


Route::get('core/ticketLinkChains', ['as'=> 'core.ticketLinkChains.index', 'uses' => 'Core\TicketLinkChainsController@index']);
Route::post('core/ticketLinkChains', ['as'=> 'core.ticketLinkChains.store', 'uses' => 'Core\TicketLinkChainsController@store']);
Route::get('core/ticketLinkChains/create', ['as'=> 'core.ticketLinkChains.create', 'uses' => 'Core\TicketLinkChainsController@create']);
Route::put('core/ticketLinkChains/{ticketLinkChains}', ['as'=> 'core.ticketLinkChains.update', 'uses' => 'Core\TicketLinkChainsController@update']);
Route::patch('core/ticketLinkChains/{ticketLinkChains}', ['as'=> 'core.ticketLinkChains.update', 'uses' => 'Core\TicketLinkChainsController@update']);
Route::delete('core/ticketLinkChains/{ticketLinkChains}', ['as'=> 'core.ticketLinkChains.destroy', 'uses' => 'Core\TicketLinkChainsController@destroy']);
Route::get('core/ticketLinkChains/{ticketLinkChains}', ['as'=> 'core.ticketLinkChains.show', 'uses' => 'Core\TicketLinkChainsController@show']);
Route::get('core/ticketLinkChains/{ticketLinkChains}/edit', ['as'=> 'core.ticketLinkChains.edit', 'uses' => 'Core\TicketLinkChainsController@edit']);


Route::get('core/ticketLinkedTables', ['as'=> 'core.ticketLinkedTables.index', 'uses' => 'Core\TicketLinkedTableController@index']);
Route::post('core/ticketLinkedTables', ['as'=> 'core.ticketLinkedTables.store', 'uses' => 'Core\TicketLinkedTableController@store']);
Route::get('core/ticketLinkedTables/create', ['as'=> 'core.ticketLinkedTables.create', 'uses' => 'Core\TicketLinkedTableController@create']);
Route::put('core/ticketLinkedTables/{ticketLinkedTables}', ['as'=> 'core.ticketLinkedTables.update', 'uses' => 'Core\TicketLinkedTableController@update']);
Route::patch('core/ticketLinkedTables/{ticketLinkedTables}', ['as'=> 'core.ticketLinkedTables.update', 'uses' => 'Core\TicketLinkedTableController@update']);
Route::delete('core/ticketLinkedTables/{ticketLinkedTables}', ['as'=> 'core.ticketLinkedTables.destroy', 'uses' => 'Core\TicketLinkedTableController@destroy']);
Route::get('core/ticketLinkedTables/{ticketLinkedTables}', ['as'=> 'core.ticketLinkedTables.show', 'uses' => 'Core\TicketLinkedTableController@show']);
Route::get('core/ticketLinkedTables/{ticketLinkedTables}/edit', ['as'=> 'core.ticketLinkedTables.edit', 'uses' => 'Core\TicketLinkedTableController@edit']);


Route::get('core/ticketLinkTypes', ['as'=> 'core.ticketLinkTypes.index', 'uses' => 'Core\TicketLinkTypesController@index']);
Route::post('core/ticketLinkTypes', ['as'=> 'core.ticketLinkTypes.store', 'uses' => 'Core\TicketLinkTypesController@store']);
Route::get('core/ticketLinkTypes/create', ['as'=> 'core.ticketLinkTypes.create', 'uses' => 'Core\TicketLinkTypesController@create']);
Route::put('core/ticketLinkTypes/{ticketLinkTypes}', ['as'=> 'core.ticketLinkTypes.update', 'uses' => 'Core\TicketLinkTypesController@update']);
Route::patch('core/ticketLinkTypes/{ticketLinkTypes}', ['as'=> 'core.ticketLinkTypes.update', 'uses' => 'Core\TicketLinkTypesController@update']);
Route::delete('core/ticketLinkTypes/{ticketLinkTypes}', ['as'=> 'core.ticketLinkTypes.destroy', 'uses' => 'Core\TicketLinkTypesController@destroy']);
Route::get('core/ticketLinkTypes/{ticketLinkTypes}', ['as'=> 'core.ticketLinkTypes.show', 'uses' => 'Core\TicketLinkTypesController@show']);
Route::get('core/ticketLinkTypes/{ticketLinkTypes}/edit', ['as'=> 'core.ticketLinkTypes.edit', 'uses' => 'Core\TicketLinkTypesController@edit']);


Route::get('core/ticketMergelogs', ['as'=> 'core.ticketMergelogs.index', 'uses' => 'Core\TicketMergelogController@index']);
Route::post('core/ticketMergelogs', ['as'=> 'core.ticketMergelogs.store', 'uses' => 'Core\TicketMergelogController@store']);
Route::get('core/ticketMergelogs/create', ['as'=> 'core.ticketMergelogs.create', 'uses' => 'Core\TicketMergelogController@create']);
Route::put('core/ticketMergelogs/{ticketMergelogs}', ['as'=> 'core.ticketMergelogs.update', 'uses' => 'Core\TicketMergelogController@update']);
Route::patch('core/ticketMergelogs/{ticketMergelogs}', ['as'=> 'core.ticketMergelogs.update', 'uses' => 'Core\TicketMergelogController@update']);
Route::delete('core/ticketMergelogs/{ticketMergelogs}', ['as'=> 'core.ticketMergelogs.destroy', 'uses' => 'Core\TicketMergelogController@destroy']);
Route::get('core/ticketMergelogs/{ticketMergelogs}', ['as'=> 'core.ticketMergelogs.show', 'uses' => 'Core\TicketMergelogController@show']);
Route::get('core/ticketMergelogs/{ticketMergelogs}/edit', ['as'=> 'core.ticketMergelogs.edit', 'uses' => 'Core\TicketMergelogController@edit']);


Route::get('core/ticketMessageIds', ['as'=> 'core.ticketMessageIds.index', 'uses' => 'Core\TicketMessageIdsController@index']);
Route::post('core/ticketMessageIds', ['as'=> 'core.ticketMessageIds.store', 'uses' => 'Core\TicketMessageIdsController@store']);
Route::get('core/ticketMessageIds/create', ['as'=> 'core.ticketMessageIds.create', 'uses' => 'Core\TicketMessageIdsController@create']);
Route::put('core/ticketMessageIds/{ticketMessageIds}', ['as'=> 'core.ticketMessageIds.update', 'uses' => 'Core\TicketMessageIdsController@update']);
Route::patch('core/ticketMessageIds/{ticketMessageIds}', ['as'=> 'core.ticketMessageIds.update', 'uses' => 'Core\TicketMessageIdsController@update']);
Route::delete('core/ticketMessageIds/{ticketMessageIds}', ['as'=> 'core.ticketMessageIds.destroy', 'uses' => 'Core\TicketMessageIdsController@destroy']);
Route::get('core/ticketMessageIds/{ticketMessageIds}', ['as'=> 'core.ticketMessageIds.show', 'uses' => 'Core\TicketMessageIdsController@show']);
Route::get('core/ticketMessageIds/{ticketMessageIds}/edit', ['as'=> 'core.ticketMessageIds.edit', 'uses' => 'Core\TicketMessageIdsController@edit']);


Route::get('core/ticketNotes', ['as'=> 'core.ticketNotes.index', 'uses' => 'Core\TicketNotesController@index']);
Route::post('core/ticketNotes', ['as'=> 'core.ticketNotes.store', 'uses' => 'Core\TicketNotesController@store']);
Route::get('core/ticketNotes/create', ['as'=> 'core.ticketNotes.create', 'uses' => 'Core\TicketNotesController@create']);
Route::put('core/ticketNotes/{ticketNotes}', ['as'=> 'core.ticketNotes.update', 'uses' => 'Core\TicketNotesController@update']);
Route::patch('core/ticketNotes/{ticketNotes}', ['as'=> 'core.ticketNotes.update', 'uses' => 'Core\TicketNotesController@update']);
Route::delete('core/ticketNotes/{ticketNotes}', ['as'=> 'core.ticketNotes.destroy', 'uses' => 'Core\TicketNotesController@destroy']);
Route::get('core/ticketNotes/{ticketNotes}', ['as'=> 'core.ticketNotes.show', 'uses' => 'Core\TicketNotesController@show']);
Route::get('core/ticketNotes/{ticketNotes}/edit', ['as'=> 'core.ticketNotes.edit', 'uses' => 'Core\TicketNotesController@edit']);


Route::get('core/ticketPriorities', ['as'=> 'core.ticketPriorities.index', 'uses' => 'Core\TicketPrioritiesController@index']);
Route::post('core/ticketPriorities', ['as'=> 'core.ticketPriorities.store', 'uses' => 'Core\TicketPrioritiesController@store']);
Route::get('core/ticketPriorities/create', ['as'=> 'core.ticketPriorities.create', 'uses' => 'Core\TicketPrioritiesController@create']);
Route::put('core/ticketPriorities/{ticketPriorities}', ['as'=> 'core.ticketPriorities.update', 'uses' => 'Core\TicketPrioritiesController@update']);
Route::patch('core/ticketPriorities/{ticketPriorities}', ['as'=> 'core.ticketPriorities.update', 'uses' => 'Core\TicketPrioritiesController@update']);
Route::delete('core/ticketPriorities/{ticketPriorities}', ['as'=> 'core.ticketPriorities.destroy', 'uses' => 'Core\TicketPrioritiesController@destroy']);
Route::get('core/ticketPriorities/{ticketPriorities}', ['as'=> 'core.ticketPriorities.show', 'uses' => 'Core\TicketPrioritiesController@show']);
Route::get('core/ticketPriorities/{ticketPriorities}/edit', ['as'=> 'core.ticketPriorities.edit', 'uses' => 'Core\TicketPrioritiesController@edit']);


Route::get('core/ticketRecurrences', ['as'=> 'core.ticketRecurrences.index', 'uses' => 'Core\TicketRecurrencesController@index']);
Route::post('core/ticketRecurrences', ['as'=> 'core.ticketRecurrences.store', 'uses' => 'Core\TicketRecurrencesController@store']);
Route::get('core/ticketRecurrences/create', ['as'=> 'core.ticketRecurrences.create', 'uses' => 'Core\TicketRecurrencesController@create']);
Route::put('core/ticketRecurrences/{ticketRecurrences}', ['as'=> 'core.ticketRecurrences.update', 'uses' => 'Core\TicketRecurrencesController@update']);
Route::patch('core/ticketRecurrences/{ticketRecurrences}', ['as'=> 'core.ticketRecurrences.update', 'uses' => 'Core\TicketRecurrencesController@update']);
Route::delete('core/ticketRecurrences/{ticketRecurrences}', ['as'=> 'core.ticketRecurrences.destroy', 'uses' => 'Core\TicketRecurrencesController@destroy']);
Route::get('core/ticketRecurrences/{ticketRecurrences}', ['as'=> 'core.ticketRecurrences.show', 'uses' => 'Core\TicketRecurrencesController@show']);
Route::get('core/ticketRecurrences/{ticketRecurrences}/edit', ['as'=> 'core.ticketRecurrences.edit', 'uses' => 'Core\TicketRecurrencesController@edit']);


Route::get('core/tickets', ['as'=> 'core.tickets.index', 'uses' => 'Core\TicketsController@index']);
Route::post('core/tickets', ['as'=> 'core.tickets.store', 'uses' => 'Core\TicketsController@store']);
Route::get('core/tickets/create', ['as'=> 'core.tickets.create', 'uses' => 'Core\TicketsController@create']);
Route::put('core/tickets/{tickets}', ['as'=> 'core.tickets.update', 'uses' => 'Core\TicketsController@update']);
Route::patch('core/tickets/{tickets}', ['as'=> 'core.tickets.update', 'uses' => 'Core\TicketsController@update']);
Route::delete('core/tickets/{tickets}', ['as'=> 'core.tickets.destroy', 'uses' => 'Core\TicketsController@destroy']);
Route::get('core/tickets/{tickets}', ['as'=> 'core.tickets.show', 'uses' => 'Core\TicketsController@show']);
Route::get('core/tickets/{tickets}/edit', ['as'=> 'core.tickets.edit', 'uses' => 'Core\TicketsController@edit']);


Route::get('core/ticketStatuses', ['as'=> 'core.ticketStatuses.index', 'uses' => 'Core\TicketStatusController@index']);
Route::post('core/ticketStatuses', ['as'=> 'core.ticketStatuses.store', 'uses' => 'Core\TicketStatusController@store']);
Route::get('core/ticketStatuses/create', ['as'=> 'core.ticketStatuses.create', 'uses' => 'Core\TicketStatusController@create']);
Route::put('core/ticketStatuses/{ticketStatuses}', ['as'=> 'core.ticketStatuses.update', 'uses' => 'Core\TicketStatusController@update']);
Route::patch('core/ticketStatuses/{ticketStatuses}', ['as'=> 'core.ticketStatuses.update', 'uses' => 'Core\TicketStatusController@update']);
Route::delete('core/ticketStatuses/{ticketStatuses}', ['as'=> 'core.ticketStatuses.destroy', 'uses' => 'Core\TicketStatusController@destroy']);
Route::get('core/ticketStatuses/{ticketStatuses}', ['as'=> 'core.ticketStatuses.show', 'uses' => 'Core\TicketStatusController@show']);
Route::get('core/ticketStatuses/{ticketStatuses}/edit', ['as'=> 'core.ticketStatuses.edit', 'uses' => 'Core\TicketStatusController@edit']);


Route::get('core/ticketTimeTracks', ['as'=> 'core.ticketTimeTracks.index', 'uses' => 'Core\TicketTimeTracksController@index']);
Route::post('core/ticketTimeTracks', ['as'=> 'core.ticketTimeTracks.store', 'uses' => 'Core\TicketTimeTracksController@store']);
Route::get('core/ticketTimeTracks/create', ['as'=> 'core.ticketTimeTracks.create', 'uses' => 'Core\TicketTimeTracksController@create']);
Route::put('core/ticketTimeTracks/{ticketTimeTracks}', ['as'=> 'core.ticketTimeTracks.update', 'uses' => 'Core\TicketTimeTracksController@update']);
Route::patch('core/ticketTimeTracks/{ticketTimeTracks}', ['as'=> 'core.ticketTimeTracks.update', 'uses' => 'Core\TicketTimeTracksController@update']);
Route::delete('core/ticketTimeTracks/{ticketTimeTracks}', ['as'=> 'core.ticketTimeTracks.destroy', 'uses' => 'Core\TicketTimeTracksController@destroy']);
Route::get('core/ticketTimeTracks/{ticketTimeTracks}', ['as'=> 'core.ticketTimeTracks.show', 'uses' => 'Core\TicketTimeTracksController@show']);
Route::get('core/ticketTimeTracks/{ticketTimeTracks}/edit', ['as'=> 'core.ticketTimeTracks.edit', 'uses' => 'Core\TicketTimeTracksController@edit']);


Route::get('core/ticketTypes', ['as'=> 'core.ticketTypes.index', 'uses' => 'Core\TicketTypesController@index']);
Route::post('core/ticketTypes', ['as'=> 'core.ticketTypes.store', 'uses' => 'Core\TicketTypesController@store']);
Route::get('core/ticketTypes/create', ['as'=> 'core.ticketTypes.create', 'uses' => 'Core\TicketTypesController@create']);
Route::put('core/ticketTypes/{ticketTypes}', ['as'=> 'core.ticketTypes.update', 'uses' => 'Core\TicketTypesController@update']);
Route::patch('core/ticketTypes/{ticketTypes}', ['as'=> 'core.ticketTypes.update', 'uses' => 'Core\TicketTypesController@update']);
Route::delete('core/ticketTypes/{ticketTypes}', ['as'=> 'core.ticketTypes.destroy', 'uses' => 'Core\TicketTypesController@destroy']);
Route::get('core/ticketTypes/{ticketTypes}', ['as'=> 'core.ticketTypes.show', 'uses' => 'Core\TicketTypesController@show']);
Route::get('core/ticketTypes/{ticketTypes}/edit', ['as'=> 'core.ticketTypes.edit', 'uses' => 'Core\TicketTypesController@edit']);


Route::get('core/ticketWorkflowActions', ['as'=> 'core.ticketWorkflowActions.index', 'uses' => 'Core\TicketWorkflowActionsController@index']);
Route::post('core/ticketWorkflowActions', ['as'=> 'core.ticketWorkflowActions.store', 'uses' => 'Core\TicketWorkflowActionsController@store']);
Route::get('core/ticketWorkflowActions/create', ['as'=> 'core.ticketWorkflowActions.create', 'uses' => 'Core\TicketWorkflowActionsController@create']);
Route::put('core/ticketWorkflowActions/{ticketWorkflowActions}', ['as'=> 'core.ticketWorkflowActions.update', 'uses' => 'Core\TicketWorkflowActionsController@update']);
Route::patch('core/ticketWorkflowActions/{ticketWorkflowActions}', ['as'=> 'core.ticketWorkflowActions.update', 'uses' => 'Core\TicketWorkflowActionsController@update']);
Route::delete('core/ticketWorkflowActions/{ticketWorkflowActions}', ['as'=> 'core.ticketWorkflowActions.destroy', 'uses' => 'Core\TicketWorkflowActionsController@destroy']);
Route::get('core/ticketWorkflowActions/{ticketWorkflowActions}', ['as'=> 'core.ticketWorkflowActions.show', 'uses' => 'Core\TicketWorkflowActionsController@show']);
Route::get('core/ticketWorkflowActions/{ticketWorkflowActions}/edit', ['as'=> 'core.ticketWorkflowActions.edit', 'uses' => 'Core\TicketWorkflowActionsController@edit']);


Route::get('core/ticketWorkflowCriterias', ['as'=> 'core.ticketWorkflowCriterias.index', 'uses' => 'Core\TicketWorkflowCriteriaController@index']);
Route::post('core/ticketWorkflowCriterias', ['as'=> 'core.ticketWorkflowCriterias.store', 'uses' => 'Core\TicketWorkflowCriteriaController@store']);
Route::get('core/ticketWorkflowCriterias/create', ['as'=> 'core.ticketWorkflowCriterias.create', 'uses' => 'Core\TicketWorkflowCriteriaController@create']);
Route::put('core/ticketWorkflowCriterias/{ticketWorkflowCriterias}', ['as'=> 'core.ticketWorkflowCriterias.update', 'uses' => 'Core\TicketWorkflowCriteriaController@update']);
Route::patch('core/ticketWorkflowCriterias/{ticketWorkflowCriterias}', ['as'=> 'core.ticketWorkflowCriterias.update', 'uses' => 'Core\TicketWorkflowCriteriaController@update']);
Route::delete('core/ticketWorkflowCriterias/{ticketWorkflowCriterias}', ['as'=> 'core.ticketWorkflowCriterias.destroy', 'uses' => 'Core\TicketWorkflowCriteriaController@destroy']);
Route::get('core/ticketWorkflowCriterias/{ticketWorkflowCriterias}', ['as'=> 'core.ticketWorkflowCriterias.show', 'uses' => 'Core\TicketWorkflowCriteriaController@show']);
Route::get('core/ticketWorkflowCriterias/{ticketWorkflowCriterias}/edit', ['as'=> 'core.ticketWorkflowCriterias.edit', 'uses' => 'Core\TicketWorkflowCriteriaController@edit']);


Route::get('core/ticketWorkflowNotifications', ['as'=> 'core.ticketWorkflowNotifications.index', 'uses' => 'Core\TicketWorkflowNotificationsController@index']);
Route::post('core/ticketWorkflowNotifications', ['as'=> 'core.ticketWorkflowNotifications.store', 'uses' => 'Core\TicketWorkflowNotificationsController@store']);
Route::get('core/ticketWorkflowNotifications/create', ['as'=> 'core.ticketWorkflowNotifications.create', 'uses' => 'Core\TicketWorkflowNotificationsController@create']);
Route::put('core/ticketWorkflowNotifications/{ticketWorkflowNotifications}', ['as'=> 'core.ticketWorkflowNotifications.update', 'uses' => 'Core\TicketWorkflowNotificationsController@update']);
Route::patch('core/ticketWorkflowNotifications/{ticketWorkflowNotifications}', ['as'=> 'core.ticketWorkflowNotifications.update', 'uses' => 'Core\TicketWorkflowNotificationsController@update']);
Route::delete('core/ticketWorkflowNotifications/{ticketWorkflowNotifications}', ['as'=> 'core.ticketWorkflowNotifications.destroy', 'uses' => 'Core\TicketWorkflowNotificationsController@destroy']);
Route::get('core/ticketWorkflowNotifications/{ticketWorkflowNotifications}', ['as'=> 'core.ticketWorkflowNotifications.show', 'uses' => 'Core\TicketWorkflowNotificationsController@show']);
Route::get('core/ticketWorkflowNotifications/{ticketWorkflowNotifications}/edit', ['as'=> 'core.ticketWorkflowNotifications.edit', 'uses' => 'Core\TicketWorkflowNotificationsController@edit']);


Route::get('core/ticketWorkflows', ['as'=> 'core.ticketWorkflows.index', 'uses' => 'Core\TicketWorkflowsController@index']);
Route::post('core/ticketWorkflows', ['as'=> 'core.ticketWorkflows.store', 'uses' => 'Core\TicketWorkflowsController@store']);
Route::get('core/ticketWorkflows/create', ['as'=> 'core.ticketWorkflows.create', 'uses' => 'Core\TicketWorkflowsController@create']);
Route::put('core/ticketWorkflows/{ticketWorkflows}', ['as'=> 'core.ticketWorkflows.update', 'uses' => 'Core\TicketWorkflowsController@update']);
Route::patch('core/ticketWorkflows/{ticketWorkflows}', ['as'=> 'core.ticketWorkflows.update', 'uses' => 'Core\TicketWorkflowsController@update']);
Route::delete('core/ticketWorkflows/{ticketWorkflows}', ['as'=> 'core.ticketWorkflows.destroy', 'uses' => 'Core\TicketWorkflowsController@destroy']);
Route::get('core/ticketWorkflows/{ticketWorkflows}', ['as'=> 'core.ticketWorkflows.show', 'uses' => 'Core\TicketWorkflowsController@show']);
Route::get('core/ticketWorkflows/{ticketWorkflows}/edit', ['as'=> 'core.ticketWorkflows.edit', 'uses' => 'Core\TicketWorkflowsController@edit']);


Route::get('core/troubleshooterCategories', ['as'=> 'core.troubleshooterCategories.index', 'uses' => 'Core\TroubleshooterCategoriesController@index']);
Route::post('core/troubleshooterCategories', ['as'=> 'core.troubleshooterCategories.store', 'uses' => 'Core\TroubleshooterCategoriesController@store']);
Route::get('core/troubleshooterCategories/create', ['as'=> 'core.troubleshooterCategories.create', 'uses' => 'Core\TroubleshooterCategoriesController@create']);
Route::put('core/troubleshooterCategories/{troubleshooterCategories}', ['as'=> 'core.troubleshooterCategories.update', 'uses' => 'Core\TroubleshooterCategoriesController@update']);
Route::patch('core/troubleshooterCategories/{troubleshooterCategories}', ['as'=> 'core.troubleshooterCategories.update', 'uses' => 'Core\TroubleshooterCategoriesController@update']);
Route::delete('core/troubleshooterCategories/{troubleshooterCategories}', ['as'=> 'core.troubleshooterCategories.destroy', 'uses' => 'Core\TroubleshooterCategoriesController@destroy']);
Route::get('core/troubleshooterCategories/{troubleshooterCategories}', ['as'=> 'core.troubleshooterCategories.show', 'uses' => 'Core\TroubleshooterCategoriesController@show']);
Route::get('core/troubleshooterCategories/{troubleshooterCategories}/edit', ['as'=> 'core.troubleshooterCategories.edit', 'uses' => 'Core\TroubleshooterCategoriesController@edit']);


Route::get('core/troubleshooterLinks', ['as'=> 'core.troubleshooterLinks.index', 'uses' => 'Core\TroubleshooterLinksController@index']);
Route::post('core/troubleshooterLinks', ['as'=> 'core.troubleshooterLinks.store', 'uses' => 'Core\TroubleshooterLinksController@store']);
Route::get('core/troubleshooterLinks/create', ['as'=> 'core.troubleshooterLinks.create', 'uses' => 'Core\TroubleshooterLinksController@create']);
Route::put('core/troubleshooterLinks/{troubleshooterLinks}', ['as'=> 'core.troubleshooterLinks.update', 'uses' => 'Core\TroubleshooterLinksController@update']);
Route::patch('core/troubleshooterLinks/{troubleshooterLinks}', ['as'=> 'core.troubleshooterLinks.update', 'uses' => 'Core\TroubleshooterLinksController@update']);
Route::delete('core/troubleshooterLinks/{troubleshooterLinks}', ['as'=> 'core.troubleshooterLinks.destroy', 'uses' => 'Core\TroubleshooterLinksController@destroy']);
Route::get('core/troubleshooterLinks/{troubleshooterLinks}', ['as'=> 'core.troubleshooterLinks.show', 'uses' => 'Core\TroubleshooterLinksController@show']);
Route::get('core/troubleshooterLinks/{troubleshooterLinks}/edit', ['as'=> 'core.troubleshooterLinks.edit', 'uses' => 'Core\TroubleshooterLinksController@edit']);


Route::get('core/troubleshooterSteps', ['as'=> 'core.troubleshooterSteps.index', 'uses' => 'Core\TroubleshooterStepsController@index']);
Route::post('core/troubleshooterSteps', ['as'=> 'core.troubleshooterSteps.store', 'uses' => 'Core\TroubleshooterStepsController@store']);
Route::get('core/troubleshooterSteps/create', ['as'=> 'core.troubleshooterSteps.create', 'uses' => 'Core\TroubleshooterStepsController@create']);
Route::put('core/troubleshooterSteps/{troubleshooterSteps}', ['as'=> 'core.troubleshooterSteps.update', 'uses' => 'Core\TroubleshooterStepsController@update']);
Route::patch('core/troubleshooterSteps/{troubleshooterSteps}', ['as'=> 'core.troubleshooterSteps.update', 'uses' => 'Core\TroubleshooterStepsController@update']);
Route::delete('core/troubleshooterSteps/{troubleshooterSteps}', ['as'=> 'core.troubleshooterSteps.destroy', 'uses' => 'Core\TroubleshooterStepsController@destroy']);
Route::get('core/troubleshooterSteps/{troubleshooterSteps}', ['as'=> 'core.troubleshooterSteps.show', 'uses' => 'Core\TroubleshooterStepsController@show']);
Route::get('core/troubleshooterSteps/{troubleshooterSteps}/edit', ['as'=> 'core.troubleshooterSteps.edit', 'uses' => 'Core\TroubleshooterStepsController@edit']);


Route::get('core/userGroupAssigns', ['as'=> 'core.userGroupAssigns.index', 'uses' => 'Core\UserGroupAssignsController@index']);
Route::post('core/userGroupAssigns', ['as'=> 'core.userGroupAssigns.store', 'uses' => 'Core\UserGroupAssignsController@store']);
Route::get('core/userGroupAssigns/create', ['as'=> 'core.userGroupAssigns.create', 'uses' => 'Core\UserGroupAssignsController@create']);
Route::put('core/userGroupAssigns/{userGroupAssigns}', ['as'=> 'core.userGroupAssigns.update', 'uses' => 'Core\UserGroupAssignsController@update']);
Route::patch('core/userGroupAssigns/{userGroupAssigns}', ['as'=> 'core.userGroupAssigns.update', 'uses' => 'Core\UserGroupAssignsController@update']);
Route::delete('core/userGroupAssigns/{userGroupAssigns}', ['as'=> 'core.userGroupAssigns.destroy', 'uses' => 'Core\UserGroupAssignsController@destroy']);
Route::get('core/userGroupAssigns/{userGroupAssigns}', ['as'=> 'core.userGroupAssigns.show', 'uses' => 'Core\UserGroupAssignsController@show']);
Route::get('core/userGroupAssigns/{userGroupAssigns}/edit', ['as'=> 'core.userGroupAssigns.edit', 'uses' => 'Core\UserGroupAssignsController@edit']);


Route::get('core/userGroups', ['as'=> 'core.userGroups.index', 'uses' => 'Core\UserGroupsController@index']);
Route::post('core/userGroups', ['as'=> 'core.userGroups.store', 'uses' => 'Core\UserGroupsController@store']);
Route::get('core/userGroups/create', ['as'=> 'core.userGroups.create', 'uses' => 'Core\UserGroupsController@create']);
Route::put('core/userGroups/{userGroups}', ['as'=> 'core.userGroups.update', 'uses' => 'Core\UserGroupsController@update']);
Route::patch('core/userGroups/{userGroups}', ['as'=> 'core.userGroups.update', 'uses' => 'Core\UserGroupsController@update']);
Route::delete('core/userGroups/{userGroups}', ['as'=> 'core.userGroups.destroy', 'uses' => 'Core\UserGroupsController@destroy']);
Route::get('core/userGroups/{userGroups}', ['as'=> 'core.userGroups.show', 'uses' => 'Core\UserGroupsController@show']);
Route::get('core/userGroups/{userGroups}/edit', ['as'=> 'core.userGroups.edit', 'uses' => 'Core\UserGroupsController@edit']);


Route::get('core/userGroupSettings', ['as'=> 'core.userGroupSettings.index', 'uses' => 'Core\UserGroupSettingsController@index']);
Route::post('core/userGroupSettings', ['as'=> 'core.userGroupSettings.store', 'uses' => 'Core\UserGroupSettingsController@store']);
Route::get('core/userGroupSettings/create', ['as'=> 'core.userGroupSettings.create', 'uses' => 'Core\UserGroupSettingsController@create']);
Route::put('core/userGroupSettings/{userGroupSettings}', ['as'=> 'core.userGroupSettings.update', 'uses' => 'Core\UserGroupSettingsController@update']);
Route::patch('core/userGroupSettings/{userGroupSettings}', ['as'=> 'core.userGroupSettings.update', 'uses' => 'Core\UserGroupSettingsController@update']);
Route::delete('core/userGroupSettings/{userGroupSettings}', ['as'=> 'core.userGroupSettings.destroy', 'uses' => 'Core\UserGroupSettingsController@destroy']);
Route::get('core/userGroupSettings/{userGroupSettings}', ['as'=> 'core.userGroupSettings.show', 'uses' => 'Core\UserGroupSettingsController@show']);
Route::get('core/userGroupSettings/{userGroupSettings}/edit', ['as'=> 'core.userGroupSettings.edit', 'uses' => 'Core\UserGroupSettingsController@edit']);


Route::get('core/userLogInlogs', ['as'=> 'core.userLogInlogs.index', 'uses' => 'Core\UserLogInlogController@index']);
Route::post('core/userLogInlogs', ['as'=> 'core.userLogInlogs.store', 'uses' => 'Core\UserLogInlogController@store']);
Route::get('core/userLogInlogs/create', ['as'=> 'core.userLogInlogs.create', 'uses' => 'Core\UserLogInlogController@create']);
Route::put('core/userLogInlogs/{userLogInlogs}', ['as'=> 'core.userLogInlogs.update', 'uses' => 'Core\UserLogInlogController@update']);
Route::patch('core/userLogInlogs/{userLogInlogs}', ['as'=> 'core.userLogInlogs.update', 'uses' => 'Core\UserLogInlogController@update']);
Route::delete('core/userLogInlogs/{userLogInlogs}', ['as'=> 'core.userLogInlogs.destroy', 'uses' => 'Core\UserLogInlogController@destroy']);
Route::get('core/userLogInlogs/{userLogInlogs}', ['as'=> 'core.userLogInlogs.show', 'uses' => 'Core\UserLogInlogController@show']);
Route::get('core/userLogInlogs/{userLogInlogs}/edit', ['as'=> 'core.userLogInlogs.edit', 'uses' => 'Core\UserLogInlogController@edit']);


Route::get('core/userNotes', ['as'=> 'core.userNotes.index', 'uses' => 'Core\UserNotesController@index']);
Route::post('core/userNotes', ['as'=> 'core.userNotes.store', 'uses' => 'Core\UserNotesController@store']);
Route::get('core/userNotes/create', ['as'=> 'core.userNotes.create', 'uses' => 'Core\UserNotesController@create']);
Route::put('core/userNotes/{userNotes}', ['as'=> 'core.userNotes.update', 'uses' => 'Core\UserNotesController@update']);
Route::patch('core/userNotes/{userNotes}', ['as'=> 'core.userNotes.update', 'uses' => 'Core\UserNotesController@update']);
Route::delete('core/userNotes/{userNotes}', ['as'=> 'core.userNotes.destroy', 'uses' => 'Core\UserNotesController@destroy']);
Route::get('core/userNotes/{userNotes}', ['as'=> 'core.userNotes.show', 'uses' => 'Core\UserNotesController@show']);
Route::get('core/userNotes/{userNotes}/edit', ['as'=> 'core.userNotes.edit', 'uses' => 'Core\UserNotesController@edit']);


Route::get('core/userProfileImages', ['as'=> 'core.userProfileImages.index', 'uses' => 'Core\UserProfileImagesController@index']);
Route::post('core/userProfileImages', ['as'=> 'core.userProfileImages.store', 'uses' => 'Core\UserProfileImagesController@store']);
Route::get('core/userProfileImages/create', ['as'=> 'core.userProfileImages.create', 'uses' => 'Core\UserProfileImagesController@create']);
Route::put('core/userProfileImages/{userProfileImages}', ['as'=> 'core.userProfileImages.update', 'uses' => 'Core\UserProfileImagesController@update']);
Route::patch('core/userProfileImages/{userProfileImages}', ['as'=> 'core.userProfileImages.update', 'uses' => 'Core\UserProfileImagesController@update']);
Route::delete('core/userProfileImages/{userProfileImages}', ['as'=> 'core.userProfileImages.destroy', 'uses' => 'Core\UserProfileImagesController@destroy']);
Route::get('core/userProfileImages/{userProfileImages}', ['as'=> 'core.userProfileImages.show', 'uses' => 'Core\UserProfileImagesController@show']);
Route::get('core/userProfileImages/{userProfileImages}/edit', ['as'=> 'core.userProfileImages.edit', 'uses' => 'Core\UserProfileImagesController@edit']);


Route::get('core/userProperties', ['as'=> 'core.userProperties.index', 'uses' => 'Core\UserPropertiesController@index']);
Route::post('core/userProperties', ['as'=> 'core.userProperties.store', 'uses' => 'Core\UserPropertiesController@store']);
Route::get('core/userProperties/create', ['as'=> 'core.userProperties.create', 'uses' => 'Core\UserPropertiesController@create']);
Route::put('core/userProperties/{userProperties}', ['as'=> 'core.userProperties.update', 'uses' => 'Core\UserPropertiesController@update']);
Route::patch('core/userProperties/{userProperties}', ['as'=> 'core.userProperties.update', 'uses' => 'Core\UserPropertiesController@update']);
Route::delete('core/userProperties/{userProperties}', ['as'=> 'core.userProperties.destroy', 'uses' => 'Core\UserPropertiesController@destroy']);
Route::get('core/userProperties/{userProperties}', ['as'=> 'core.userProperties.show', 'uses' => 'Core\UserPropertiesController@show']);
Route::get('core/userProperties/{userProperties}/edit', ['as'=> 'core.userProperties.edit', 'uses' => 'Core\UserPropertiesController@edit']);


Route::get('core/users', ['as'=> 'core.users.index', 'uses' => 'Core\UsersController@index']);
Route::post('core/users', ['as'=> 'core.users.store', 'uses' => 'Core\UsersController@store']);
Route::get('core/users/create', ['as'=> 'core.users.create', 'uses' => 'Core\UsersController@create']);
Route::put('core/users/{users}', ['as'=> 'core.users.update', 'uses' => 'Core\UsersController@update']);
Route::patch('core/users/{users}', ['as'=> 'core.users.update', 'uses' => 'Core\UsersController@update']);
Route::delete('core/users/{users}', ['as'=> 'core.users.destroy', 'uses' => 'Core\UsersController@destroy']);
Route::get('core/users/{users}', ['as'=> 'core.users.show', 'uses' => 'Core\UsersController@show']);
Route::get('core/users/{users}/edit', ['as'=> 'core.users.edit', 'uses' => 'Core\UsersController@edit']);


Route::get('core/userSettings', ['as'=> 'core.userSettings.index', 'uses' => 'Core\UserSettingsController@index']);
Route::post('core/userSettings', ['as'=> 'core.userSettings.store', 'uses' => 'Core\UserSettingsController@store']);
Route::get('core/userSettings/create', ['as'=> 'core.userSettings.create', 'uses' => 'Core\UserSettingsController@create']);
Route::put('core/userSettings/{userSettings}', ['as'=> 'core.userSettings.update', 'uses' => 'Core\UserSettingsController@update']);
Route::patch('core/userSettings/{userSettings}', ['as'=> 'core.userSettings.update', 'uses' => 'Core\UserSettingsController@update']);
Route::delete('core/userSettings/{userSettings}', ['as'=> 'core.userSettings.destroy', 'uses' => 'Core\UserSettingsController@destroy']);
Route::get('core/userSettings/{userSettings}', ['as'=> 'core.userSettings.show', 'uses' => 'Core\UserSettingsController@show']);
Route::get('core/userSettings/{userSettings}/edit', ['as'=> 'core.userSettings.edit', 'uses' => 'Core\UserSettingsController@edit']);

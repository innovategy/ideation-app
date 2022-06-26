<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* API Endpoints

POST
/v1/register
    - creates a new organization, account
    - associates the account with the organization
    - set the account as the default account for the organization
    - sets the "super-admin" role for the account with all the permissions

    - sets the account with details (if provided)
    - records the IP address and time of T&C acceptance
    - stores messaging preferences (email, SMS)
    - returns account object



create a new account
create a new role
create a new permission

associate permissions to a role
associate an account to an organization with a role

invite colleagues to an organization and set a role
view list of invited colleagues with their status and role




create a new organization
create a new workspace
create a new category
create a new idea
create a new comment
create a new vote

create account vote credits


get the list of all workspaces where the logged in account is having the permission to view the workspace
get the list of all categories in a workspace where the logged in account is having the permission to view the category
get the list of all ideas in a workspace where the logged in account is having the permission to view the idea

get all the comments on an idea where the logged in account is having the permission to view the comment
get vote result for an idea where the logged in account is having the permission to view the vote result

create a new draft idea in a workspace where the logged in account is having the permission to create a new draft idea







*/

//group of routes for the api that are not protected
Route::group(['prefix' => 'v1', 'namespace' => 'IdeationApp\Http\Controllers'], function () {

    Route::get('/logic', 'LogicController@index');

    Route::get('/', function () {
        return response()->json([
            'message' => 'Welcome to the IdeationApp API version 1',
        ]);
    });

});






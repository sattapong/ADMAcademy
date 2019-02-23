<?php

use App\learn_course_lists;
 

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
Route::get('/', [
    
    'as' => 'home',
    'uses' => function () {

     //   $CourseLists = DB::select('select * from learn_course_lists');

        $CourseLists = DB::select('SELECT a.*,COUNT(case b.id_course when a.id then 0 else null end) 
        as CountStudent FROM `learn_course_lists` a LEFT JOIN relation_user_course_lists b ON a.id = b.id_course 
        GROUP BY a.id');

        return view('home.index',[
            'CourseLists' => $CourseLists,
        ]);

    }]);

  

Route::group(['middleware' => 'guest'], function () {

    Route::get('/signin', [
        'uses' => 'UserController@getSignin',
        'as' => 'user.signin',
    ]);

    Route::post('/signin', [
        'uses' => 'UserController@postSignin',
        'as' => 'user.signin',
    ]);

    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup',
    ]);

    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup',
    ]);


  

});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout',
    ]);


    


    Route::group(['prefix' => 'profile'], function () {

        Route::get('/', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile',
        ]);

        Route::post('/update/{id}', [
            'uses' => 'UserController@postUpdateProfile',
            'as' => 'user.updateprofile',
        ]);

    });

    Route::group(['prefix' => 'dashboard'], function () {

        Route::get('/', [
            'uses' => 'AdminController@getDashboard',
            'as' => 'admin.dashboard',
        ]);

        Route::get('/alluser', [
            'uses' => 'AdminController@getAlluser',
            'as' => 'admin.alluser',
        ]);

        Route::get('/addnew', [
            'uses' => 'AdminController@getAddnew',
            'as' => 'admin.addnew',
        ]);

        Route::post('/addnew', [
            'uses' => 'AdminController@postAddnew',
            'as' => 'admin.addnew',
        ]);


        Route::get('/removeuser/{id}', [
            'uses' => 'AdminController@getRemoveUser',
            'as' => 'admin.removeuser',
        ]);


        Route::get('/edituser/{id}', [
            'uses' => 'AdminController@getedituser',
            'as' => 'admin.edituser',
        ]);

        Route::post('/edituser/{id}', [
            'uses' => 'AdminController@postedituser',
            'as' => 'admin.edituser',
        ]);


        
        Route::get('/course', [
            'uses' => 'AdminController@getCourse',
            'as' => 'admin.course',
        ]);

        Route::get('/course/create', [
            'uses' => 'AdminController@getCourseCreate',
            'as' => 'admin.course.create',
        ]);

        Route::post('/course/create', [
            'uses' => 'AdminController@postCourseCreate',
            'as' => 'admin.course.create',
        ]);
 
        
        Route::get('/course/delete/{id}', [
            'uses' => 'AdminController@getDeleteCourse',
            'as' => 'admin.course.delete',
        ]);


        Route::get('/course/edit/{id}', [
            'uses' => 'AdminController@getEditCourse',
            'as' => 'admin.course.edit',
        ]);

        Route::post('/course/edit/{id}', [
            'uses' => 'AdminController@postEditCourse',
            'as' => 'admin.course.edit',
        ]);
     
        
        Route::get('/lessons', [
            'uses' => 'AdminController@getLessons',
            'as' => 'admin.lessons',
        ]);

        Route::get('/lessons/create', [
            'uses' => 'AdminController@getLessonsCreate',
            'as' => 'admin.lessons.create',
        ]);

        Route::post('/lessons/create', [
            'uses' => 'AdminController@postLessonsCreate',
            'as' => 'admin.lessons.create',
        ]);

        Route::get('/lessons/edit/{id}', [
            'uses' => 'AdminController@getLessonsEdit',
            'as' => 'admin.lessons.edit',
        ]);

        Route::post('/lessons/edit/{id}', [
            'uses' => 'AdminController@postEditLessons',
            'as' => 'admin.lessons.edit',
        ]);


        Route::get('/lessons/delete/{id}', [
            'uses' => 'AdminController@getLessonsDelete',
            'as' => 'admin.lessons.delete',
        ]);

        

        Route::get('/quizzes', [
            'uses' => 'AdminController@getQuizzes',
            'as' => 'admin.quizzes',
        ]);

    });

    Route::get('/singlecourse/{id_course}/lesson/{id_lesson}', [
    
        'uses' => 'UserController@getSingleCourseLesson',
        'as' => 'user.singlecourse.lesson',
    ]);
    

});



Route::get('/singlecourse/{id}', [
    
    'uses' => 'UserController@getSingleCourse',
    'as' => 'user.singlecourse',
]);



Route::get('/regiscourse/{id}', [
    
    'uses' => 'UserController@getRegisCourse',
    'as' => 'user.regiscourse',
]);
<?php

namespace App\Http\Controllers;

/* additional */
use App\learn_course_lists;
use App\learn_lesson_lists;
use App\relation_user_course_lists;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getSignin()
    {
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:4',
        ]);

        //$EmailPassword = ['email'=>$request->input('email'),'password' => $request->input('password')];

        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {

            return redirect()->route('home');

        }

        return back()->with('error', 'ชื่อผู้ใช้หรือรหัสผ่านผิดพลาด !!');

    }

    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
        ]);

        $user = new User([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'remember_token' => str_random(10),
        ]);

        $user->save();

        Auth::login($user);

        return redirect()->route('home');

    }

    public function getProfile()
    {

        return view('user.profile');
    }

    public function postUpdateProfile(Request $request, $id)
    {

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|min:4|max:16',
        ]);

        $user = User::find($id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->ImageProfile = $request->input('ImageProfile');
        $user->save();

        return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว !!');

    }
/****************************************************************************************************** */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('user.signin');
    }

    /****************************************************************************************************** */
    public function getSingleCourse($id)
    {
        $CourseLists = learn_course_lists::find($id);

        if ($CourseLists->id_lesson) {
            $ar_Id_Lesson = unserialize($CourseLists->id_lesson);
        } else {
            $ar_Id_Lesson = "";
        }

 

/*
        if ($ar_Id_Lesson) {
            $LessonOfSingleCourses = DB::select("SELECT * FROM `learn_lesson_lists`
            where id in(" . implode(",", $ar_Id_Lesson) . ")
            ORDER BY FIELD(id," . implode(",", $ar_Id_Lesson) . ")");
        } else {
            $LessonOfSingleCourses = "";
        }
*/
 

        $user_course_lists = DB::select('select * from relation_user_course_lists where id_course = ?', [$id]);

        if (isset(Auth::user()->id)) {
            $check_user_regis_course = DB::select('select * from relation_user_course_lists where id_user = ? AND id_course = ?', [Auth::user()->id, $id]);
        } else {
            $check_user_regis_course = 0;
        }

 
    return view('singlecourse.index',[
    'CourseLists' => $CourseLists,
    'user_course_lists' => $user_course_lists,
    'check_user_regis_course' => $check_user_regis_course,
    'LessonOfSingleCourses' => $ar_Id_Lesson,
    ]);
 
    }

    /****************************************************************************************************** */
    public function getRegisCourse($id)
    {
        $user_course_lists = new relation_user_course_lists([
            'id_course' => $id,
            'id_user' => Auth::user()->id,
        ]);

        $user_course_lists->save();

        return redirect()->back();
    }

       /****************************************************************************************************** */
       public function getSingleCourseLesson($id_course,$string_lesson)
       {
           
        $CourseLists = learn_course_lists::find($id_course);
 

        $LessonActive =  DB::table('learn_lesson_lists')->where('title', '=', $string_lesson)->get();
        
     

        if ($CourseLists->id_lesson) {
            $ar_Id_Lesson = unserialize($CourseLists->id_lesson);
        } else {
            $ar_Id_Lesson = "";
        }

  /*
        if ($ar_Id_Lesson) {
            $LessonOfSingleCourses = DB::select("SELECT * FROM `learn_lesson_lists`
            where id in(" . implode(",", $ar_Id_Lesson) . ")
            ORDER BY FIELD(id," . implode(",", $ar_Id_Lesson) . ")");
        } else {
            $LessonOfSingleCourses = "";
        }
*/
 
        return view('singlecourse.lesson.index',[
            'CourseLists' => $CourseLists,
            'LessonOfSingleCourses' => $ar_Id_Lesson,
            'LessonActive' => $LessonActive,
        ]);
 
       }
   

}

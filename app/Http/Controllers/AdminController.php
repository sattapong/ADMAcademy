<?php

namespace App\Http\Controllers;

use App\learn_course_lists;
use App\learn_lesson_lists;
use App\Role;
use App\User;
use DB;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**************************************************************************************/
    public function getDashboard()
    {
        return view('dashboard.index');
    }
    /**************************************************************************************/
    public function getAlluser()
    {
    
        $user = DB::select('SELECT a.*,b.role_name FROM `users` a LEFT JOIN roles b ON a.role_id = b.id');

     
   
     
        return view('dashboard.user.alluser', [
            'user' => $user,
        ])->with('i', 1);
      
    }
    /**************************************************************************************/
    public function getAddnew()
    {
        $role = Role::all();

        return view('dashboard.user.addnew', [
            'role' => $role,
        ]);
    }

/**************************************************************************************/

    public function postAddnew(Request $request)
    {

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required||unique:users',
            'password' => 'required|min:4|max:16',
            'email' => 'required|email|unique:users',
            'role' => 'required',
        ]);

        $token = str_random(60);

        DB::table('users')->insert([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'role_id' => $request->role,
            'remember_token' => $token,

        ]);

        return redirect()->back()->with('success', 'สร้างผู้ใช้เรียบร้อยแล้ว !!');
    }

    /**************************************************************************************/

    public function getRemoveUser($id)
    {
        $user = User::where(['id' => $id])->delete();

        return redirect()->back();

    }

    /**************************************************************************************/

    public function getEditUser($id)
    {
        $user = User::find($id);

        $role = Role::all();

        return view('dashboard.user.edituser', [
            'user' => $user,
            'user_role_id' => $user->role->id,
            'roles' => $role,
        ]);

    }

    /**************************************************************************************/

    public function postEditUser(Request $request, $id)
    {

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|min:4|max:16',
            'role' => 'required',
        ]);

        $user = User::find($id);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->username = $request->username;
        $user->role_id = $request->role;

        $user->save();

        return redirect()->back()->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว !!');
    }

    /**************************************************************************************/

    public function getCourse()
    {
        $CourseLists = DB::select('SELECT a.*,COUNT(case b.id_course when a.id then 0 else null end) 
        as CountStudent FROM `learn_course_lists` a LEFT JOIN relation_user_course_lists b ON a.id = b.id_course 
        GROUP BY a.id');

 
        return view('dashboard.learning.course.course', [
            'CourseLists' => $CourseLists,
        ])->with('i', 1);
   
    }
    /**************************************************************************************/

    public function getCourseCreate()
    {
        $LessonLists = DB::select('select * from learn_lesson_lists');
        return view('dashboard.learning.course.coursecreate',[
            'LessonLists' => $LessonLists,
        ]);
    }

    /**************************************************************************************/

    public function postCourseCreate(Request $request)
    {
   
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ]);

        
      if(isset($_POST['dropdown_lesson'])){
        $dropdown_lesson = serialize($_POST['dropdown_lesson']);
      }else{
      $dropdown_lesson = "";
      }
        

        DB::table('learn_course_lists')->insert([

            'title' => $request->title,
            'content' => $request->content,
            'id_lesson' => $dropdown_lesson,
            'author' => Auth::user()->username,
            'image_course' => $request->input('image_course'),

        ]);
    
      return redirect()->back()->with('success', 'สร้างหลักสูตรการเรียนเรียบร้อยแล้ว !!');
 
    }

    /**************************************************************************************/

    public function getDeleteCourse($id)
    {

        $course = learn_course_lists::where(['id' => $id])->delete();

        return redirect()->back();
    }

    /**************************************************************************************/

    public function getEditCourse($id)
    {
        $CourseEdits = learn_course_lists::find($id);

        $LessonLists = DB::select('select * from learn_lesson_lists');


        if($CourseEdits->id_lesson)
        {
            $ar_AmountLesson = unserialize($CourseEdits->id_lesson);
        
        }else{
            $ar_AmountLesson = "";
        }
      
//print_r($ar_AmountLesson);

 
 
        return view('dashboard.learning.course.courseedit', [
            'CourseEdits' => $CourseEdits,
            'LessonLists' => $LessonLists,
            'ar_AmountLesson' => $ar_AmountLesson,
        ]);
  

    }

    /**************************************************************************************/

    public function postEditCourse(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ]);
        
/*
        if(isset($_POST['dropdown_lesson']))
        {
            $dropdown_lesson = implode(",", $_POST['dropdown_lesson']);
        }else{
            $dropdown_lesson = "";
        }
      */

 
      
  
      if(isset($_POST['dropdown_lesson'])){
        $dropdown_lesson = serialize($_POST['dropdown_lesson']);
      }else{
      $dropdown_lesson = "";
      }

     // print_r($_POST['dropdown_lesson']);

      
        
 

        $learn_course_lists = learn_course_lists::find($id);
        $learn_course_lists->title = $request->title;
        $learn_course_lists->content = $request->content;
        $learn_course_lists->image_course = $request->input('image_course');
        $learn_course_lists->id_lesson = $dropdown_lesson;
        

        $learn_course_lists->save();

        return redirect()->back()->with('success', 'อัพเดตหลักสูตรการเรียนเรียบร้อยแล้ว !!');
 
    }

    /**************************************************************************************/

    public function getLessons()
    {
        $LessonLists = DB::select('select * from learn_lesson_lists');

        return view('dashboard.learning.lessons.lessons', [
            'LessonLists' => $LessonLists,
        ])->with('i', 1);

    }
    /**************************************************************************************/

    public function getLessonsCreate()
    {

        return view('dashboard.learning.lessons.lessonscreate');

    }

    /**************************************************************************************/

    public function postLessonsCreate(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:learn_lesson_lists',
            'content' => 'required',

        ]);

        DB::table('learn_lesson_lists')->insert([

            'title' => $request->title,
            'content' => $request->content,
            'author' => Auth::user()->username,
        ]);

        return redirect()->back()->with('success', 'สร้างแบบทดสอบเรียบร้อยแล้ว !!');

    }

    /**************************************************************************************/

    public function getLessonsDelete($id)
    {

        $Lesson = learn_lesson_lists::where(['id' => $id])->delete();

        return redirect()->back();

    }

    /**************************************************************************************/

    public function getLessonsEdit($id)
    {

        $Lessons = learn_lesson_lists::find($id);

        return view('dashboard.learning.lessons.lessonsedit', [
            'Lessons' => $Lessons,

        ]);

    }

    /**************************************************************************************/

    public function postEditLessons(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',

        ]);

        $learn_lesson_lists = learn_lesson_lists::find($id);
        $learn_lesson_lists->title = $request->title;
        $learn_lesson_lists->content = $request->content;

        $learn_lesson_lists->save();

        return redirect()->back()->with('success', 'อัพเดตบทเรียนเรียบร้อยแล้ว !!');
        
    }

    /**************************************************************************************/

    public function getQuizzes()
    {

        return view('dashboard.learning.quizzes.quizzes');

    }

}

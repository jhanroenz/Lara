<?php 
class UsersController extends BaseController
{
	public function search()
	{
		return View::make('home');
	}
	public function searchPost(){


			//$result = User::find($keyword);
			$keyword = Input::get('keyword');
			$results = User::where('lastname', 'LIKE', "%$keyword%")
							->where('firstname','LIKE', "%$keyword%",'OR')
							->where('middlename','LIKE', "%$keyword%",'OR')
							->where('course','LIKE', "%$keyword%",'OR')
							->where('student_number','LIKE',"%$keyword%",'OR')
							->get();
				return View::make('search-results')->with('results',$results);
			
	}
	public function getStudentInfo(){

	}
	public function postStudentInfo(){
		$student_number = Input::get('stud_no');
		$students = User::where('student_number', '=', $student_number)->get();
		$reports = Transaction::where('student_id','like',$student_number)
								->orderBy('id','desc')
								->get();

		return View::make('student-info')->with('students',$students)
										 ->with('reports',$reports);

	}
}

 ?>
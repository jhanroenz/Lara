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
			$results = User::where('lastname', '=', $keyword)
							->where('firstname','=', $keyword,'OR')
							->where('middlename','=', $keyword,'OR')
							->where('course','=', $keyword,'OR')
							->get();
				return View::make('search-results')->with('results',$results);
			
						
	}
}

 ?>
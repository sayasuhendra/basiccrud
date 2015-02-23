<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$login = Input::all();
		$sukses = Auth::attempt($login);
		if ($sukses) {
			return Redirect::to('admin');
		}

		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

		return Redirect::to('/');
	}


}

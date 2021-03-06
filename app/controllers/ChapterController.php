<?php

class ChapterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Input::get('grade_id') == null){
			$chapters = Chapter::all();

			return Response::json(array(
					'error' => false,
					'chapters' => $chapters
				),
				200
			);
		}
		else{
			$chapters = Chapter::where('grade_id', '=', Input::get('grade_id'))->get();

			return Response::json(array(
					'error' => false,
					'chapters' => $chapters
				),
				200
			);
		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return Response::json(array(
				'error' => true,
				'message' => 'service not available'
			),
			404
		);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Response::json(array(
				'error' => true,
				'message' => 'service not available'
			),
			404
		);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$chapter = Chapter::with('questions')->find($id);

		return Response::json(array(
				'error' => false,
				'chapter' => $chapter
			),
			200
		);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return Response::json(array(
				'error' => true,
				'message' => 'service not available'
			),
			404
		);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return Response::json(array(
				'error' => true,
				'message' => 'service not available'
			),
			404
		);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return Response::json(array(
				'error' => true,
				'message' => 'service not available'
			),
			404
		);
	}


}

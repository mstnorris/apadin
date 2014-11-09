<?php

class PropertiesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /properties
	 *
	 * @return Response
	 */
	public function index()
    {
        $properties = Property::all();
        return View::make('properties.index', compact('properties'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /properties/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /properties
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /properties/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $property = Property::find($id);
        return View::make('properties.show', compact('property'));

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /properties/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /properties/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /properties/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
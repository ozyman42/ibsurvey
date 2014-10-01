<?php

class SchoolsController extends \BaseController {

	/*
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$schools = School::all();
		echo '<h4>Here is a list of Schools that use ibsurvey.com:</h4>';
		if(!$schools->count())
		{
			echo '<br>There are no schools using this site.';
			return;	
		}
		$schoolNames = array();
		foreach ($schools as $school)
			array_push($schoolNames, $school->name);
		sort($schoolNames);
		echo '<ol>';
		foreach($schoolNames as $schoolName)
			echo "<li><a href=\"schools/$schoolName\">$schoolName</a></li>";
		echo '</ol>';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//This should be some sort of sign up page.
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//This will show the school that one is logged in to.
		
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}

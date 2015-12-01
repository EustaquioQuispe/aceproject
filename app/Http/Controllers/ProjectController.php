<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectForm;
use Illuminate\Http\Request;

class ProjectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("projects.index")->with('projects', \App\Project::paginate(10)->setPath('project'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("projects.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$project = new \App\Project;

		$project->name = \Request::input('name');

		$project->description = \Request::input('description');

		$project->save();

		return redirect('project/')->with('message', 'Project saved');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('projects.createUpdate')->with('project', \App\Project::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$project = \App\Project::find($id);

		$project->name = \Request::input('name');

		$project->description = \Request::input('description');

		$project->save();

		return redirect()->route('project.index', ['project' => $id])->with('message', 'Project updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = \App\Project::find($id);
 
		$post->delete();
	 
		return redirect()->route('project.index')->with('message', 'Project deleted');
	}

}

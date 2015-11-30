<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\TaskForm;

class TaskController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("tasks.index")->with('tasks', \App\Task::paginate(2)->setPath('task'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("tasks.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$task = new \App\Task;

		$task->name = \Request::input('name');

		$task->description = \Request::input('description');

		$task->deadline = \Request::input('deadline');

		$task->state = \Request::input('state');

		$task->id_user = \Request::input('id_user');

		$task->id_project = \Request::input('id_project');

		$task->save();

		return redirect('task/create')->with('message', 'Task saved');
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
		return view('tasks.createUpdate')->with('task', \App\Task::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$task = \App\Task::find($id);
	 
		$task->name = \Request::input('name');
	 
		$task->description = \Request::input('description');

		$task->deadline = \Request::input('deadline');

		$task->state = \Request::input('state');

		$task->id_user = \Request::input('id_user');

		$task->id_project = \Request::input('id_project');
	 
		$task->save();
	 
		return redirect()->route('task.edit', ['task' => $id])->with('message', 'Task updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$task = \App\Task::find($id);
 
		$task->delete();
	 
		return redirect()->route('task.index')->with('message', 'Task deleted');
	}

}

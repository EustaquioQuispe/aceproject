@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
      <div class="col-md-3 pull-right">
        {!! Html::link(route('task.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
      </div>
      @if(!$tasks->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Deadline</th>
                <th>State</th>
                <th>Person</th>
                <th>Project</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              @foreach ($tasks as $task)
                  <tr>
                    <td width="500">{{ $task->name }}</td>
                    <td width="500">{{ $task->description }}</td>
                    <td width="500">{{ $task->deadline }}</td>
                    <td width="500">{{ $task->state }}</td>
                    <td width="500">{{ $task->user->name }}</td>
                    <td width="500">{{ $task->project->name }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('task.edit', $task->id), 'Edit', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('task.destroy', $task->id), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Delete</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
          <?php echo $tasks->render(); ?>
      @endif
		</div>
	</div>
</div>
@endsection
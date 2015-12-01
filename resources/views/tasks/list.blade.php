@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
      @if(!$tasks->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Tarea</th>
                <th>Descripcion</th>
                <th>Deadline</th>
                <th>State</th>
                <th>Person</th>
                <th>On time/Delayed</th>
              </tr>
              @foreach ($tasks as $task)
                  <tr>
                    <td width="500">{{ $task->name }}</td>
                    <td width="500">{{ $task->description }}</td>
                    <td width="500">{{ $task->deadline }}</td>
                    <td width="500">{{ $task->state }}</td>
                    <td width="500">{{ $task->user->name }}</td>
                    <td width="500">On Time</td>
                  </tr>
              @endforeach
          </table>
          <?php echo $tasks->render(); ?>
      @endif
		</div>
	</div>
</div>
@endsection

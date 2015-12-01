@extends('app')

@section('content')
<div class="container">
	<div class="row">
     <div class="col-md-3 pull-left " style="margin-left:100px;margin-bottom:10px;">
        {!! Html::link(route('project.create'), 'Add New', array('class' => 'btn btn-info btn-md pull-left')) !!}
       </div>
		<div class="col-md-10 col-md-offset-1">
      @if(!$projects->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
              @foreach ($projects as $project)
                  <tr>
                    <td width="500">{{ $project->name }}</td>
                    <td width="500">{{ $project->description }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('project.edit', $project->id), 'Edit', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('project.destroy', $project->id), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Delete</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
          <?php echo $projects->render(); ?>
      @endif
		</div>
	</div>
</div>
@endsection
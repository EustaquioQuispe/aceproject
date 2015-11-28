@extends('app')

@section('content')
<div class="container">

	<div class="row">

		<div class="col-md-10 col-md-offset-1">
    <div class="col-md-3 pull-right">
      {!! Html::link(route('user.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
    </div>

      @if(!$users->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Name</th>
                <th>Lastname</th>
                <th>E-mail</th>
                <th>Username</th>
                <th>Type</th>
                <th>State</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
              @foreach ($users as $user)
                  <tr>
                    <td width="500">{{ $user->name }}</td>
                    <td width="500">{{ $user->lastname }}</td>
                    <td width="500">{{ $user->email }}</td>
                    <td width="500">{{ $user->username }}</td>
                    <td width="500">{{ $user->type }}</td>
                    <td width="500">{{ $user->state }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('user.edit', $user->id), 'Edit', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('user.destroy', $user->id), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Delete</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
          <?php echo $users->render(); ?>
      @endif
		</div>
	</div>
</div>
@endsection
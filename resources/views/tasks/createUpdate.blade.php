@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-3 pull-right">
				{!! Html::link(route('task.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
      		 </div>
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif

				@if (Session::has('message'))
				    <div class="alert alert-success">{{ Session::get('message') }}</div>
				@endif


				@if(isset($task))
					
								
				<div class="panel-body">
				{!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'patch']) !!}

							<div class="form-group">
								{!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Name']) !!}
							</div>

							<div class="form-group">
								{!! Form::textarea('description', null,
										['class'=>'form-control', 'placeholder'=>'Body'])
								!!}
							</div>


							<div class="form-group">
								{!! Form::input('date', 'deadline') !!}
							</div>

							<div class="form-group">
								{!! Form::select('state', array('active'  => 'active','inactive' =>  'inactive')); !!}
							</div>

							<div class="form-group">
								{!! Form::select('id_user', $users) !!}
							</div>

							<div class="form-group">
								{!! Form::select('id_project', $projects) !!}
							</div>


							<div class="form-group">
								{!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
							</div>

					{!! Form::close() !!}
				</div>

				@else

				<div class="panel-body">
					{!! Form::open(['route' => 'task.store']) !!}

							<div class="form-group">
								{!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Name']) !!}
							</div>

							<div class="form-group">
								{!! Form::textarea('description', null,
										['class'=>'form-control', 'placeholder'=>'Body'])
								!!}
							</div>


							<div class="form-group">
								{!! Form::input('date', 'deadline') !!}
							</div>

							<div class="form-group">

								{!! Form::select('state', array('active'  => 'active','inactive' =>  'inactive')); !!}
							</div>

							<div class="form-group">
								{!! Form::select('id_user', $users) !!}
							</div>

							<div class="form-group">
								{!! Form::select('id_project', $projects) !!}
							</div>


							<div class="form-group">
								{!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
							</div>

					{!! Form::close() !!}
				</div>
				@endif






			</div>
		</div>
	</div>
</div>
@endsection
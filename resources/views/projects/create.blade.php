@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Create Project</div>

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

				<div class="panel-body">
					{!! Form::open(['route' => 'project.store']) !!}

							<div class="form-group">
								{!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Name']) !!}
							</div>

							<div class="form-group">
								{!! Form::textarea('description', null,
										['class'=>'form-control', 'placeholder'=>'Description'])
								!!}
							</div>

							<div class="form-group">
								{!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
							</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
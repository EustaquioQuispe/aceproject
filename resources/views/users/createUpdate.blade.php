@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
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

				@if(isset($user))
					<div class="panel-body">
						{!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'patch']) !!}

								<div class="form-group">
									{!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Name']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('lastname', null, ["class" => "form-control", 'placeholder'=>'Lastname']) !!}
								</div>
								<div class="form-group">
									{!! Form::text('email', null, ["class" => "form-control", 'placeholder'=>'Email']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('username', null, ["class" => "form-control", 'placeholder'=>'Username']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('password', null, ["class" => "form-control", 'placeholder'=>'Password']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('type', null, ["class" => "form-control", 'placeholder'=>'Type']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('state', null, ["class" => "form-control", 'placeholder'=>'State']) !!}
								</div>
								<div class="form-group">
									{!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
								</div>

						{!! Form::close() !!}
					</div>
				@else
					<div class="panel-body">
						{!! Form::open(['route' => 'user.store']) !!}

								<div class="form-group">
									{!! Form::text('name', null, ["class" => "form-control", 'placeholder'=>'Name']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('lastname', null, ["class" => "form-control", 'placeholder'=>'Lastname']) !!}
								</div>
								<div class="form-group">
									{!! Form::text('email', null, ["class" => "form-control", 'placeholder'=>'Email']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('username', null, ["class" => "form-control", 'placeholder'=>'Username']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('password', null, ["class" => "form-control", 'placeholder'=>'Password']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('type', null, ["class" => "form-control", 'placeholder'=>'Type']) !!}
								</div>

								<div class="form-group">
									{!! Form::text('state', null, ["class" => "form-control", 'placeholder'=>'State']) !!}
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
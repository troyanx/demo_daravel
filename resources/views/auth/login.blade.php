@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Iniciar Sesión</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger text-center"	>
							Las credenciales ingresadas son incorrectas. 
						</div>
					@endif
					{!! Form::open(['url' => 'auth/login', 'role' => 'form', 
					'class' => 'form-horizontal'
					]) !!}

						<div class="form-group">
							{!! Form::label('email','E-Mail:',
							['class'=>'col-md-4 control-label']
							) !!}

							<div class="col-md-6">
								{!! Form::email('email', old('email'), 
								['class'=>'form-control']
								) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password','Password:',
							['class'=>'col-md-4 control-label']
							) !!}
							<div class="col-md-6">
								{!! Form::password('password',
								['class'=>'form-control']
								) !!}
							</div>
							
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								 {!! Form::checkbox('rememberme','Recordarme', true) !!} 
								 {!! Form::label('recordarme','Recordarme' 
								) !!}
								
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Entrar
								</button>

								<a href="{!! url('password/email')!!}">Olvido su Password?</a>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

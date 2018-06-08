<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {{ Form::label('name', 'Nombre Usuario') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

        @if ($errors->has('name'))
            <span class="help-block">
                 <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
        
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::password('password',  ['class' => 'form-control', 'id' => 'password']) }}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
</div>

<div class="form-group">
        {{ Form::label('password-confirm', 'Confirmar Contraseña') }}
        {{ Form::password('password_confirmation', ['class'=>'form-control','id'=>'password-confirmation']) }}
</div>

<div class="form-group">
        {{ Form::submit('ENVIAR', ['class' => 'btn btn-warning']) }}
</div>
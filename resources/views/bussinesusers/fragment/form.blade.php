<div class="form-group">
    {{ Form::label('nameConsultant', 'Nombre Consultor') }}
    {{ Form::text('nameConsultant', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('positionConsultant', 'Cargo Consultor') }}
        {{ Form::text('positionConsultant', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('fonoConsultant', 'Fono Consultor') }}
        {{ Form::text('fonoConsultant', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('emailConsultant', 'Email Consultor') }}
        {{ Form::text('emailConsultant', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
         {{ Form::submit('ENVIAR', ['class' => 'btn btn-warning']) }}
</div>
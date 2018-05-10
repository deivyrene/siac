<div class="form-group">
    {{ Form::label('nameCompany', 'Nombre empresa') }}
    {{ Form::text('nameCompany', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('attendantCompany', 'Encargado empresa') }}
        {{ Form::text('attendantCompany', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('addressCompany', 'Dirección empresa') }}
        {{ Form::text('addressCompany', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
        {{ Form::label('fonoCompanyA', 'Fono empresa A') }}
        {{ Form::text('fonoCompanyA', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
        {{ Form::label('fonoCompanyB', 'Fono empresa B') }}
        {{ Form::text('fonoCompanyB', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
        {{ Form::label('fonoCompanyC', 'Fono empresa C') }}
        {{ Form::text('fonoCompanyC', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('emailCompany', 'Email empresa') }}
        {{ Form::text('emailCompany', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
         {{ Form::submit('ENVIAR', ['class' => 'btn btn-warning']) }}
</div>
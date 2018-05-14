<div class="form-group">
    {{ Form::label('nameBusinessUser', 'Nombre usuario') }}
    {{ Form::text('nameBusinessUser', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('fonoBusinessUser', 'Fono usuario') }}
        {{ Form::text('fonoBusinessUser', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('emailBusinessUser', 'Email usuario') }}
        {{ Form::text('emailBusinessUser', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('idCompanies', 'Empresa') }}
        <select class="form-control" name="idCompanies" id="idCompanies">
                        <option value="0">Seleccione</option>
                @foreach($companies as $company)
                        <option value="<?= $company->id ?>" <?php if(isset($businessuser)){ if($businessuser->idCompanies == $company->id){ echo "selected"; } }?> >{{$company->nameCompany}}</option>
                @endforeach
        </select>
</div>


<div class="form-group">
         {{ Form::submit('ENVIAR', ['class' => 'btn btn-warning']) }}
</div>
<div class="form-group">
    {{ Form::label('dateRegisterActivities', 'Fecha Registro') }}
    {{ Form::text('dateRegisterActivities', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('companies_id', 'Empresa') }}
        <select class="form-control" name="companies_id" id="companies_id">
                        <option value="0">Seleccione</option>
                @foreach($companies as $company)
                        <option <?php if(isset($businessuser)){ if($businessuser->idCompanies == $company->id){ echo "selected"; } }?> >{{$company->nameCompany}}</option>
                @endforeach
        </select>
</div>

<div class="form-group">
        {{ Form::label('companies_id', 'Empresa') }}
        <select class="form-control" name="companies_id" id="companies_id">
                        <option value="0">Seleccione</option>
                @foreach($companies as $company)
                        <option <?php if(isset($businessuser)){ if($businessuser->idCompanies == $company->id){ echo "selected"; } }?> >{{$company->nameCompany}}</option>
                @endforeach
        </select>
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
        {{ Form::label('companies_id', 'Empresa') }}
        <select class="form-control" name="companies_id" id="companies_id">
                        <option value="0">Seleccione</option>
                @foreach($companies as $company)
                        <option <?php if(isset($businessuser)){ if($businessuser->idCompanies == $company->id){ echo "selected"; } }?> >{{$company->nameCompany}}</option>
                @endforeach
        </select>
</div>


<div class="form-group">
         {{ Form::submit('ENVIAR', ['class' => 'btn btn-warning']) }}
</div>
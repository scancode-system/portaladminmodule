@extends('portaladmin::layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6">
		{{ Form::open(['route' => ['admin.events.update.validations', $event], 'method' => 'put']) }}
		<div class="card">
			<h5 class="card-header">Validações</h5>
			<div class="card-body">
				@alert_errors()
				@alert_success(['key_message' => 'success_validation'])
				@foreach($validations as $validation)
				<div class="form-group row text-capitalize {{ $loop->last?'mb-0':'' }}">
					{{ Form::label($validation->module_alias, $validation->alias, ['class' => 'col col-form-label']) }}
					<div class="col text-right">
						<label class="switch switch-primary switch-lg mb-0 ml-3">
							{{ Form::hidden('validations['.$validation->id.']', 0) }}
							{{ Form::checkbox('validations['.$validation->id.']', 1, $validation->checked,['class' => 'switch-input']) }}
							<span class="switch-slider"></span>
						</label>
					</div>
				</div>
				@endforeach
			</div>
			<div class="card-footer text-muted">
				{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			</div>
		</div>
		{{ Form::close() }}
		{{ Form::open(['route' => ['admin.events.update.appends', $event], 'method' => 'put']) }}
		<div class="card">
			<h5 class="card-header">Extensão - Validações</h5>
			<div class="card-body">
				@alert_errors()
				@alert_success(['key_message' => 'success_append'])
				@foreach($appends as $append)
				<div class="form-group row text-capitalize {{ $loop->last?'mb-0':'' }}">
					{{ Form::label($append->module_alias, $append->alias, ['class' => 'col col-form-label']) }}
					<div class="col text-right">
						<label class="switch switch-primary switch-lg mb-0 ml-3">
							{{ Form::hidden('appends['.$append->id.']', 0) }}
							{{ Form::checkbox('appends['.$append->id.']', 1, $append->checked,['class' => 'switch-input']) }}
							<span class="switch-slider"></span>
						</label>
					</div>
				</div>
				@endforeach
			</div>
			<div class="card-footer text-muted">
				{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			</div>
		</div>
		{{ Form::close() }}
	</div>
	<div class="col-md-6">
		{{ Form::open(['route' => ['admin.events.update.settings', $event], 'method' => 'put']) }}
		<div class="card">
			<h5 class="card-header">Configurações</h5>
			<div class="card-body">
				@alert_errors()
				@alert_success(['key_message' => 'success_setting'])
				@foreach($settings as $setting)
				<div class="form-group row text-capitalize {{ $loop->last?'mb-0':'' }}">
					{{ Form::label($setting->module_alias, $setting->alias, ['class' => 'col col-form-label']) }}
					<div class="col text-right">
						<label class="switch switch-primary switch-lg mb-0 ml-3">
							{{ Form::hidden('settings['.$setting->id.']', 0) }}
							{{ Form::checkbox('settings['.$setting->id.']', 1, $setting->checked,['class' => 'switch-input']) }}
							<span class="switch-slider"></span>
						</label>
					</div>
				</div>
				@endforeach
			</div>
			<div class="card-footer text-muted">
				{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			</div>
		</div>
		{{ Form::close() }}
	</div>
</div>
@stop


@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('admin.companies') }}">Lista de Empresas</a>
</li>
<li class="breadcrumb-item">
	<a href="{{ route('admin.events', $event->company) }}">Lista de Eventos</a>
</li>
<li class="breadcrumb-item text-capitalize">Configuração de Evento</li>
@endsection
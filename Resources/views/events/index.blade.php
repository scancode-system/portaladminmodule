@extends('portaladmin::layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">{{ $company->name }} - Eventos</h5>
	<div class="card-body">
		{{ Form::open(['route' => ['admin.events.store', $company->id]]) }}
		{{ Form::hidden('company_id', $company->id) }}
		<div class="input-group mb-3">
			{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome do Evento']) }}
			<div class="input-group-append">
				{{  Form::submit('Novo Evento', ['class' => 'btn btn-primary']) }}						
			</div>
		</div>
		{{ Form::Close() }}
		<table class="table table-striped table-hover">
			@include('portaladmin::events.tables.thead')
			<tbody>
				@each('portaladmin::events.tables.tr', $events, 'event')
			</tbody>
		</table>
	</div>
</div>
@stop


@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('admin.companies') }}">Lista de Empresas</a>
</li>
<li class="breadcrumb-item text-capitalize">Lista de Eventos</li>
@endsection
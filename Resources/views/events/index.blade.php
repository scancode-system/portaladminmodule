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
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Token</th>
					<th scope="col">Backup</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($events as $event)
				<tr>
					<th>{{ $event->name }}</th>
					<th>{{ $event->token }}</th>
					<th>
						<a href="">Download</a>
					</th>
					<th class="text-right">
						{{ Form::Open(['route' => ['admin.events.destroy', 1, 4], 'method' => 'delete']) }}
						<button type="submit" class="btn btn-danger">Excluir</button>
						{{ Form::Close() }}
					</th>
				</tr>
				@endforeach
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
@extends('portaladmin::layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">Empresas</h5>
	<div class="card-body">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col" class="text-center">Criado em</th>
					<th scope="col" class="text-center">Eventos</th>
					<th scope="col" class="text-right"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($companies as $company)
				<tr>
					<td>{{ $company->name }}</td>
					<td>{{ $company->email }}</td>
					<td class="text-center">{{ $company->created_at->format('Y/m/d') }}</td>
					<td class="text-center">{{ $company->events()->count() }}</td>
					<td class="text-right">
						{{ Form::Open(['route' => ['admin.companies.destroy', $company->id], 'method' => 'delete']) }}
						<a href="{{ route('admin.companies.login', $company->id) }}" class="btn btn-secondary mr-3">Logar</a>
						<a href="{{ route('admin.events', $company->id) }}" class="btn btn-primary mr-3">Vizualizar</a>
						<button type="submit" class="btn btn-danger">Excluir</button>
						{{ Form::Close() }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{ route('register') }}" class="btn btn-primary">Cadastrar nova empresa</a>
	</div>
</div>
@stop


@section('breadcrumb')
<li class="breadcrumb-item">Lista de Empresas</li>
@endsection
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
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="{{ route('admin.companies.login', $company->id) }}" class="btn btn-primary"><i class="fa fa-dashboard"></i></a></a>
							<a href="#" data-toggle="modal" data-target="#modal_companies_observation_view_{{ $company->id }}" class="btn btn-info"><i class="fa fa-eye"></i></a></a>
							<a href="{{ route('admin.events', $company->id) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
							<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
						</div>
						{{ Form::Close() }}
						@include('portaladmin::companies.modals.modal_companies_observation_view')
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
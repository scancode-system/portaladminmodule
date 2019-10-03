@extends('portaladmin::layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">Eventos</h5>
	<div class="card-body">
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
				<tr>
					<th>ABUP2015</th>
					<th>#@$@$#$%%$#%#!@#$@Ffsdf</th>
					<th>
						<a href="">Download</a>
					</th>
					<th class="text-right">
						{{ Form::Open(['route' => ['admin.companies.event.destroy', 1, 4], 'method' => 'delete']) }}
						<button type="submit" class="btn btn-danger">Excluir</button>
						{{ Form::Close() }}
					</th>
				</tr>
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
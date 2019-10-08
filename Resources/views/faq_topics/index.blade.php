@extends('portaladmin::layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">Lista de FAQ - Topicos</h5>
	<div class="card-body">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">Titulo</th>
					<th scope="col">Descricao</th>
					<th scope="col" class="text-right">Acoes</th>
				</tr>
			</thead>
			<tbody>
				@foreach($faq_topics as $faq_topic)
				<tr>
					<td scope="row">{{ $faq_topic->title }}</td>
					<td>{{ $faq_topic->note }}</td>
					<td class="text-right">
						{{ Form::open(['route' => ['admin.faq_topics.destroy', $faq_topic], 'method' => 'delete']) }}
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="{{ route('admin.faq_topics.edit', $faq_topic->id) }}" class="btn btn-primary">Editar</a>
							<a href="{{ route('admin.faq_items', $faq_topic->id) }}" class="btn btn-secondary">FAQs</a>
							{{ Form::submit('Excluir', ['class' => 'btn btn-danger']) }}
						</div>
						{{ Form::close() }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{ route('admin.faq_topics.create') }}" class="btn btn-primary">Novo topico</a>
	</div>
</div>
@stop


@section('breadcrumb')
<li class="breadcrumb-item">Lista de FAQ - Topicos</li>
@endsection
@extends('portaladmin::layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">FAQs (# {{ $faq_topic->id }} )</h5>
	<div class="card-body">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th scope="col">Titulo</th>
					<th scope="col" class="text-right">Acoes</th>
				</tr>
			</thead>
			<tbody>
				@foreach($faq_items as $faq_item)
				<tr>
					<td scope="row">{{ $faq_item->title }}</td>
					<td class="text-right">
						{{ Form::open(['route' => ['admin.faq_items.destroy', $faq_item], 'method' => 'delete']) }}
						<div class="btn-group" role="group" aria-label="Basic example">
							<a href="{{ route('admin.faq_items.edit', $faq_item->id) }}" class="btn btn-primary">Editar</a>
							{{ Form::submit('Excluir', ['class' => 'btn btn-danger']) }}
						</div>
						{{ Form::close() }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{ route('admin.faq_items.create', $faq_topic) }}" class="btn btn-primary">Novo FAQ</a>
	</div>
</div>
@stop


@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('admin.faq_topics') }}">Lista de FAQ - Topicos</a>
</li>
<li class="breadcrumb-item text-capitalize">FAQs (# {{ $faq_topic->id }} )</li>
@endsection
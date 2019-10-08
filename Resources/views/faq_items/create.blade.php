@extends('portaladmin::layouts.app')

@section('content')
<div class="card">
	<h5 class="card-header">Novo FAQ</h5>
	<div class="card-body">
		{{ Form::open(['route' => ['admin.faq_items.store', $faq_topic]]) }}
		<div class="form-group">
			{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo']) }}
		</div>
		<div class="form-group">
			{{ Form::textarea('text', null, ['class' => 'form-control', 'placeholder' => 'Coloque aqui o conteudo do FAQ']) }}
		</div>
		{{ Form::submit('Salvar', ['class' => 'btn btn-primary']) }}
		{{ Form::close() }}
	</div>
</div>
@stop


@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ route('admin.faq_topics') }}">Lista de FAQ - Topicos</a>
</li>
<li class="breadcrumb-item">
	<a href="{{ route('admin.faq_items', $faq_topic) }}">Lista de FAQ - Topicos</a>
</li>
<li class="breadcrumb-item text-capitalize">Novo FAQ</li>
@endsection